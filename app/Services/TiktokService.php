<?php

namespace app\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;

class TikTokService
{
    public function getLatestVideo()
    {
        // Gunakan cache untuk menyimpan video ID selama 1 jam (3600 detik)
        // Ini mencegah scraping setiap kali halaman dimuat.
        return Cache::remember('latest_tiktok_video_id', 3600, function () {
            try {
                $username = env('TIKTOK_USERNAME');
                if (!$username) {
                    Log::warning('TIKTOK_USERNAME environment variable is not set.');
                    // Gunakan ID video yang valid sebagai fallback
                    return '7534211093099547910';
                }

                $response = Http::get("https://www.tiktok.com/@" . $username);
                
                if ($response->successful()) {
                    $html = $response->body();
                    
                    // Regex yang lebih baik untuk mencari data JSON di dalam tag script
                    preg_match('/<script id="SIGI_STATE" type="application\/json">(.*?)<\/script>/', $html, $matches);
                    
                    if (isset($matches[1])) {
                        $jsonData = json_decode($matches[1], true);
                        
                        // Ambil video ID dari item pertama dalam daftar video
                        $latestVideoId = data_get($jsonData, 'ItemModule.1.id');
                        
                        if ($latestVideoId) {
                            return $latestVideoId;
                        }
                    }
                }
            } catch (\Exception $e) {
                Log::error('Error fetching TikTok video: ' . $e->getMessage());
            }
            
            // Fallback ke video ID yang Anda berikan jika terjadi error atau tidak ditemukan
            return '7534211093099547910';
        });
    }
}
