<?php

return [
    /*
     * A list of paths to export.
     *
     * Each path will be crawled by the exporter.
     */
    'paths' => [
        '/',
        '/produk',
        '/pelanggan',
        '/sertifikasi',
        '/tentang',
        '/hubungi-kami',
        '/welcome',

        '/en',
        '/en/produk',
        '/en/pelanggan',
        '/en/sertifikasi',
        '/en/tentang',
        '/en/hubungi-kami',
        '/en/welcome',
    ],

    /*
     * This option determines whether the exporter will crawl all found links on the site.
     *
     * If this is set to `false`, only the paths listed above will be exported.
     */
    'crawl' => false,

    /*
     * A list of globs that will be included in the final export.
     *
     * The paths are relative to the root of your application.
     */
    'include' => [
        '/public/build',
    ],

    /*
     * A list of globs that will be excluded from the final export.
     *
     * The paths are relative to the root of your application.
     */
    'exclude' => [
        // '/storage',
    ],

    /*
     * If true, the exporter will delete the destination directory before exporting.
     */
    'delete_before_export' => true,
];
