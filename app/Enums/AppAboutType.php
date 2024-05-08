<?php

namespace App\Enums;

enum AppAboutType
{
    case FEATURES;
    case BENEFITS;

    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }
}
