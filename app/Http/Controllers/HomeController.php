<?php

namespace App\Http\Controllers;

use App\Services\TikTokService;

class HomeController extends Controller
{
    public function index(TikTokService $tiktok)
    {
        $videoId = $tiktok->getLatestVideo();
        $username = env('TIKTOK_USERNAME', 'safarikaryamaju');
        $videoUrl = "https://www.tiktok.com/@{$username}/video/{$videoId}";
        
        return view('home', compact('videoId', 'videoUrl'));
    }
}