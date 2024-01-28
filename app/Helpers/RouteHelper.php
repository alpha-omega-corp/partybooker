<?php


namespace App\Helpers;


use App\Http\Middleware\LocaleMiddleware;

class RouteHelper
{
    public static function navigate(string $path): string
    {
        return LocaleMiddleware::getLocale() . '/' . $path;
    }
}

