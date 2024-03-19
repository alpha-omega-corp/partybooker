<?php

namespace App\Enums;

enum AppContentType
{
    case USER_TERMS;
    case SERVICE_TERMS;
    case APP_ABOUT;
    case APP_CONCEPT;

    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }
}
