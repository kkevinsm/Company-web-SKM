<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    // Method ini dipanggil oleh route GET /admin/login
    public function create()
    {
        // Pastikan path view Anda benar.
        // Jika Anda menyimpannya di resources/views/auth/login.blade.php
        return view('auth.login');
    }

    // Biarkan method lain untuk saat ini
}