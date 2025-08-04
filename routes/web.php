<?php

use Illuminate\Support\Facades\Route;

// --- BAHASA INGGRIS (/en) ---
Route::prefix('en')->middleware('set.locale')->name('en.')->group(function () {
    
    Route::get('/', function () { return view('home'); })->name('home');
    Route::get('/produk', function () { return view('produk'); })->name('produk');
    Route::get('/pelanggan', function () { return view('pelanggan'); })->name('pelanggan');
    Route::get('/sertifikasi', function () { return view('sertifikasi'); })->name('sertifikasi');
    Route::get('/tentang', function () { return view('home.tentang'); })->name('tentang');
    Route::get('/hubungi-kami', function () { return view('hubungi-kami'); })->name('hubungi-kami');
    Route::get('/welcome', function () { return view('home.welcome'); })->name('welcome');

});

// --- BAHASA INDONESIA (/) ---
Route::middleware('set.locale')->name('id.')->group(function () {

    Route::get('/', function () { return view('home'); })->name('home');
    Route::get('/produk', function () { return view('produk'); })->name('produk');
    Route::get('/pelanggan', function () { return view('pelanggan'); })->name('pelanggan');
    Route::get('/sertifikasi', function () { return view('sertifikasi'); })->name('sertifikasi');
    Route::get('/tentang', function () { return view('home.tentang'); })->name('tentang');
    Route::get('/hubungi-kami', function () { return view('hubungi-kami'); })->name('hubungi-kami');
    Route::get('/welcome', function () { return view('home.welcome'); })->name('welcome');

});