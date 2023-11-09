<?php


namespace App\Helpers;


class BarDanceFloorTranslatorHelper
{

    public static $_items = [
        'bar',
        'dance-floor',
        'sound-system',
        'lighting',
        'stage',
        'other'
    ];

    public static function translate($key)
    {
        return SimpleTranslateHelper::translate($key);
    }

}
