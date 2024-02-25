<?php

namespace App\Enums;

enum Language: string
{
    case FR = 'fr';
    case EN = 'en';
    case DE = 'de';
    case IT = 'it';


    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

}
