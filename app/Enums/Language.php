<?php

namespace App\Enums;

enum Language: string
{
    case FRENCH = 'fr';
    case ENGLISH = 'en';
    case GERMAN = 'de';
    case ITALIAN = 'it';


    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

}
