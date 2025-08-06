<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App; // Pastikan ini diimpor

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        // TAMBAHKAN BLOK INI
        if (App::runningInConsole()) {
            return $next($request);
        }

        // Logika Anda yang sudah ada tetap di sini
        $locale = $request->segment(1);
        if (in_array($locale, ['en', 'id'])) {
            app()->setLocale($locale);
        }
        
        return $next($request);
    }
}
