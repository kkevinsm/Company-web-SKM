<?php

/**
 * Ini adalah file konfigurasi untuk spatie/laravel-export.
 * Kita akan mengumpulkan semua path rute di sini sebelum me-return array konfigurasi.
 */

// Gunakan facade Route untuk mengakses rute
use Illuminate\Support\Facades\Route;

// Siapkan array kosong untuk menampung semua path yang akan di-export
$allPaths = [];

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
    // Tangani jika rute belum bisa diakses saat config dibaca
    // Biarkan $allPaths kosong, crawl akan mencoba menemukan dari homepage
}

// Hapus duplikasi path (misalnya jika ada rute '/' dan rute bernama 'home' yang keduanya menunjuk ke path yang sama)
$allPaths = array_unique($allPaths);


// Sekarang kita return array konfigurasi dengan 'paths' yang sudah berisi array of strings.
return [

    /*
     * If true, the exporter will crawl through your site's pages to determine
     * the paths that need to be exported.
     */
    'crawl' => true,

    /*
     * Kita memasukkan array path yang sudah kita generate di atas.
     */
    'paths' => $allPaths,

    /*
     * Files and folders that should be included in the build. Expects
     * key/value pairs with current paths as keys, and destination paths
     * as values.
     *
     * By default your `public` folder's contents will be added to the export.
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
     * If set, the site will be exported to this disk. Disks can be configured
     * in `config/filesystems.php`.
     *
     * If empty, your site will be exported to a `dist` folder.
     */
    'disk' => null,

    /*
     * Shell commands that should be run before the export starts when running
     * `php artisan export`.
     *
     * You can skip these by adding a `--skip-{name}` flag to the command.
     */
    'before' => [
        //
    ],

    /*
     * Shell commands that should be run after the export has finished when
     * running `php artisan export`.
     *
     * You can skip these by adding a `--skip-{name}` flag to the command.
     */
    'after' => [
        //
    ],

];