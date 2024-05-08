<?php

namespace App\Enums;

enum PartnerSort: string
{
    case NONE = 'none';
    case PAYMENT = 'payment';
    case CREATED = 'created';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
