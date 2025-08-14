<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    // Method ini dipanggil oleh route GET /admin/upload
    public function upload()
    {
        // Pastikan path view Anda benar.
        // Jika Anda menyimpannya di resources/views/admin/upload.blade.php
        return view('admin.upload');
    }

    // Biarkan method lain untuk saat ini
}