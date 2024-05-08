<?php

namespace App\Enums;

enum GeoLimit: string
{
    case CH = 'Switzerland';
    case EUR = 'Europe';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
