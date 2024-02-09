<?php

namespace App\Enums;

enum PaymentMethod: string
{
    case CASH = 'cash';
    case CARD = 'card';
    case BILL = 'bill';
    case AMERICAN = 'american-express';
    case MAESTRO = 'ec-direct';
    case POST = 'post-finance';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
