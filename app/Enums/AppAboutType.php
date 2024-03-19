<?php

namespace App\Enums;

enum AppAboutType
{
    case ABOUT;
    case BENEFITS;

    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }
}
