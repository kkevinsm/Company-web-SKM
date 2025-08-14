<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Http\Controllers\HomeController;
// controller untuk Admin
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminDashboardController;


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

// Memberi prefix 'admin' pada URL (contoh: /admin/login)
// Memberi nama 'admin.' pada route (contoh: route('admin.login'))
Route::prefix('admin')->name('admin.')->group(function () {

    // Route untuk tamu (yang belum login)
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AdminLoginController::class, 'create'])->name('login');
        Route::post('/login', [AdminLoginController::class, 'store']);
    });

    // Route yang hanya bisa diakses setelah login (terproteksi)
    Route::middleware('auth')->group(function () {
        // Arahkan /admin ke dashboard upload
        Route::get('/', [AdminDashboardController::class, 'upload']);
        Route::get('/dashboard', [AdminDashboardController::class, 'upload'])->name('dashboard'); // alias untuk dashboard
        Route::get('/upload', [AdminDashboardController::class, 'upload'])->name('upload');
        
        // Route untuk memproses upload video
        Route::post('/upload-video', [AdminDashboardController::class, 'storeUpload'])->name('upload.store');

        // Route untuk logout
        Route::post('/logout', [AdminLoginController::class, 'destroy'])->name('logout');
    });

});

Route::get('/cek-tampilan-dashboard', function () {
    return view('admin.upload');
});