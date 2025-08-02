<?php

namespace App\Helpers;

class LocaleHelper
{
    public static function getSwitchUrl()
    {
        $currentLocale = app()->getLocale();
        $targetLocale = $currentLocale === 'id' ? 'en' : 'id';

        $routeName = request()->route()->getName();
        $routeParameters = request()->route()->parameters();

        // ngeset target locale
        $routeParameters['locale'] = $targetLocale;

        // id jadi default no prefix
        if ($targetLocale === 'id') {
            $routeParameters['locale'] = null;
        }

        return route($routeName, $routeParameters);
    }
}
