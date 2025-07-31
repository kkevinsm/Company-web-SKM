<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/produk', function () {
    return view('produk');
})->name('produk');

Route::get('/sertifikasi', function () {
    return view('sertifikasi');
})->name('sertifikasi');

Route::get('/welcome', function () {
    return view('home.welcome');
})->name('welcome');

Route::get('/tentang', function () {
    return view('home.tentang');
})->name('tentang');

Route::get('/pelanggan', function () {
    return view('pelanggan');
})->name('pelanggan');

Route::get('/hubungi-kami', function () {
    return view('hubungi-kami');
})->name('hubungi-kami');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
