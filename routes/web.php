<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


Route::get('/generate-sitemap', function () {
    $sitemap = Sitemap::create();

    $sitemap->add(Url::create('/en')->addAlternate('/', 'id')->setPriority(1.0));
    $sitemap->add(Url::create('/en/produk')->addAlternate('/produk', 'id'));
    $sitemap->add(Url::create('/en/pelanggan')->addAlternate('/pelanggan', 'id'));
    $sitemap->add(Url::create('/en/sertifikasi')->addAlternate('/sertifikasi', 'id'));
    $sitemap->add(Url::create('/en/tentang')->addAlternate('/tentang', 'id'));
    $sitemap->add(Url::create('/en/hubungi-kami')->addAlternate('/hubungi-kami', 'id'));
    $sitemap->add(Url::create('/en/welcome')->addAlternate('/welcome', 'id'));
    $sitemap->add(Url::create('/en/tnc')->addAlternate('/tnc', 'id'));
    $sitemap->add(Url::create('/en/privacy')->addAlternate('/privacy', 'id'));

    $sitemap->writeToFile(public_path('sitemap.xml'));

    return 'Sitemap Generated with all routes!';
});


// --- BAHASA INGGRIS (/en) ---
Route::prefix('en')->middleware('set.locale')->name('en.')->group(function () {
    
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/produk', function () { return view('produk'); })->name('produk');
    Route::get('/pelanggan', function () { return view('pelanggan'); })->name('pelanggan');
    Route::get('/sertifikasi', function () { return view('sertifikasi'); })->name('sertifikasi');
    Route::get('/tentang', function () { return view('home.tentang'); })->name('tentang');
    Route::get('/hubungi-kami', function () { return view('hubungi-kami'); })->name('hubungi-kami');
    Route::get('/welcome', function () { return view('home.welcome'); })->name('welcome');
    Route::get('/tnc', function () { return view('tnc'); })->name('tnc');
    Route::get('/privacy', function () { return view('privacy'); })->name('privacy');

});

// --- BAHASA INDONESIA (/) ---
Route::middleware('set.locale')->name('id.')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/produk', function () { return view('produk'); })->name('produk');
    Route::get('/pelanggan', function () { return view('pelanggan'); })->name('pelanggan');
    Route::get('/sertifikasi', function () { return view('sertifikasi'); })->name('sertifikasi');
    Route::get('/tentang', function () { return view('home.tentang'); })->name('tentang');
    Route::get('/hubungi-kami', function () { return view('hubungi-kami'); })->name('hubungi-kami');
    Route::get('/welcome', function () { return view('home.welcome'); })->name('welcome');
    Route::get('/tnc', function () { return view('tnc'); })->name('tnc');
    Route::get('/privacy', function () { return view('privacy'); })->name('privacy');

});

// --- ROUTE UNTUK ADMIN DASHBOARD ---

// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminController::class, 'login']);
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

    // Protected admin routes
    Route::middleware([\App\Http\Middleware\AdminAuthentication::class])->group(function () {
        Route::get('/upload', [AdminController::class, 'showUpload'])->name('upload');
        Route::post('/videos', [AdminController::class, 'storeVideo'])->name('videos.store');
    });
});
