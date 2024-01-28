<?php

namespace App\Enums;

enum PaymentMethod: string
{
    case DEFAULT = 'manual';
    case STRIPE = 'automatic';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
