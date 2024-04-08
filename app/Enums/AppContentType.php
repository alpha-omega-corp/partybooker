<?php

namespace App\Enums;

enum AppContentType
{
    case USER_TERMS;
    case SERVICE_TERMS;
    case APP_ABOUT;
    case APP_CONCEPT;
    case APP_HOME;

    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }
}
