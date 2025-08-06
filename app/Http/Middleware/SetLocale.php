<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $routeName = $request->route()->getName();

        if (str_starts_with($routeName, 'en.')) {
            app()->setLocale('en');
        } else {
            app()->setLocale('id');
        }

        return $next($request);
    }
}