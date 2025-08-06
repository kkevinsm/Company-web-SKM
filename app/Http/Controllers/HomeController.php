<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() // <--- Parameter sudah kosong
    {
        // Tidak ada lagi logika TikTok
        return view('home'); // <--- Tidak ada lagi data 'videoId' yang dikirim
    }
}