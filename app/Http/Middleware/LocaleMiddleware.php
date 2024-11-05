<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;

class LocaleMiddleware
{
    public static string $mainLanguage = "fr";
    public static array $languages = ['fr', 'en'];

    public function handle($request, Closure $next)
    {
        $locale = self::getLocale();
        if ($locale) App::setLocale($locale);
        else App::setLocale(self::$mainLanguage);
        return $next($request);
    }

    public static function getLocale(): ?string
    {
        $uri = Request::path();
        $segmentsURI = explode('/', $uri);
        if (!empty($segmentsURI[0]) && in_array($segmentsURI[0], self::$languages)) {
            if ($segmentsURI[0] != self::$mainLanguage) return $segmentsURI[0];
        }
        return null;
    }
}
