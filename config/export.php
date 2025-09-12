<?php

/**
 * Ini adalah file konfigurasi untuk spatie/laravel-export.
 */

use Illuminate\Support\Facades\Route;

$allPaths = [];

// --- PERBAIKAN DIMULAI DI SINI ---
// Cek apakah perintah yang sedang berjalan adalah 'export'.
// Ini mencegah kode pencarian rute berjalan saat 'config:cache' atau perintah lain dieksekusi.
if (isset($_SERVER['argv']) && in_array('export', $_SERVER['argv'])) {
    try {
        // Ambil semua rute yang terdaftar di aplikasi Anda
        $routes = collect(Route::getRoutes()->getRoutes());

        foreach ($routes as $route) {
            // Logika yang sama seperti sebelumnya:
            // Proses hanya rute GET, tanpa parameter dinamis, dan bukan rute internal.
            if (in_array('GET', $route->methods()) && !str_contains($route->uri(), '{') && !str_starts_with($route->uri(), '_')) {
                $routeName = $route->getName();

                if ($routeName) {
                    try {
                        $url = route($routeName);
                        $path = parse_url($url, PHP_URL_PATH) ?: '/';

                        // Tambahkan path yang berupa string ke dalam array $allPaths
                        $allPaths[] = $path;
                    } catch (\Exception $e) {
                        continue;
                    }
                }
            }
        }
    } catch (\Exception $e) {
        // Biarkan $allPaths kosong jika ada masalah saat membaca rute
    }
}
// --- AKHIR DARI PERBAIKAN ---


// Hapus duplikasi path
$allPaths = array_unique($allPaths);

// Sekarang kita return array konfigurasi
return [
    /*
     * If true, the exporter will crawl through your site's pages to determine
     * the paths that need to be exported.
     */
    'crawl' => true,

    /*
     * Kita memasukkan array path yang sudah kita generate di atas.
     * Array ini akan kosong jika perintahnya bukan 'export'.
     */
    'paths' => $allPaths,

    /*
     * Files and folders that should be included in the build.
     */
    'include_files' => [
        'public' => '',
    ],

    /*
     * File patterns that should be excluded from the included files.
     */
    'exclude_file_patterns' => [
        '/\.php$/',
        '/mix-manifest\.json$/',
        '/.env*/',
        '/storage\/logs\/.*/',
    ],

    /*
     * Whether or not the destination folder should be emptied before starting
     * the export.
     */
    'clean_before_export' => true,

    /*
     * If set, the site will be exported to this disk.
     */
    'disk' => null,

    /*
     * Shell commands that should be run before the export starts.
     */
    'before' => [
        //
    ],

    /*
     * Shell commands that should be run after the export has finished.
     */
    'after' => [
        //
    ],
];