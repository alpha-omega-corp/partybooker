<?php

namespace App\Helpers;

class SlugSanitizer
{
    private static $items = [
        'é' => 'e',
        'ë' => 'e',
        'à' => 'a',
        'è' => 'e',
        'ù' => 'u',
        'â' => 'a',
        'ê' => 'e',
        'î' => 'i',
        'ô' => 'o',
        'û' => 'u',
    ];

    public static function sanitize($slug): string
    {
        return str_replace(array_keys(self::$items), array_values(self::$items), $slug);
    }
}
