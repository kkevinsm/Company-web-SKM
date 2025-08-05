<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Route::get('/generate-sitemap', function () {
    $sitemap = Sitemap::create();

    $sitemap->add(Url::create('/en')->addAlternate('/', 'id')->setPriority(1.0));
    $sitemap->add(Url::create('/en/produk')->addAlternate('/produk', 'id'));
    $sitemap->add(Url::create('/en/pelanggan')->addAlternate('/pelanggan', 'id'));
    $sitemap->add(Url::create('/en/sertifikasi')->addAlternate('/sertifikasi', 'id'));
    $sitemap->add(Url::create('/en/tentang')->addAlternate('/tentang', 'id'));
    $sitemap->add(Url::create('/en/hubungi-kami')->addAlternate('/hubungi-kami', 'id'));
    $sitemap->add(Url::create('/en/welcome')->addAlternate('/welcome', 'id'));

    $sitemap->writeToFile(public_path('sitemap.xml'));

    return 'Sitemap Generated with all routes!';
});


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
