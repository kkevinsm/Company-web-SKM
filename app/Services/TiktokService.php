<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;

class TikTokService
{
    public function getLatestVideo()
    {
        // Gunakan cache selama 1 jam untuk mengurangi frekuensi scraping
        return Cache::remember('latest_tiktok_video_id', 3600, function () {
            try {
                $username = env('TIKTOK_USERNAME', 'safarikaryamaju');
                
                // Gunakan header User-Agent yang menyerupai browser asli
                $response = Http::withHeaders([
                    'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36'
                ])->get("https://www.tiktok.com/@" . $username);

                if ($response->failed()) {
                    Log::error("TikTok Scraper: Gagal mengakses halaman @{$username}. Status: " . $response->status());
                    return '7534211093099547910'; // Fallback
                }

                $html = $response->body();
                
                // Cari data JSON yang disematkan di dalam tag <script>
                preg_match('/<script id="SIGI_STATE" type="application\/json">(.*?)<\/script>/', $html, $matches);
                
                if (isset($matches[1])) {
                    $jsonData = json_decode($matches[1], true);
                    
                    // Ambil daftar video dari 'ItemModule'
                    $itemModule = $jsonData['ItemModule'] ?? [];

                    if (!empty($itemModule)) {
                        // Video terbaru adalah item pertama dalam daftar
                        $latestVideo = reset($itemModule);
                        if (isset($latestVideo['id'])) {
                            Log::info("TikTok Scraper: Berhasil menemukan video terbaru ID: " . $latestVideo['id']);
                            return $latestVideo['id'];
                        }
                    }
                }

                Log::warning("TikTok Scraper: Tidak dapat menemukan data video di halaman @{$username}.");

            } catch (\Exception $e) {
                Log::error('TikTok Scraper Error: ' . $e->getMessage());
            }
            
            // Jika semua cara gagal, kembalikan ID video fallback yang valid
            return '7534211093099547910';
        });
    }
}
