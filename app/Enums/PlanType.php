<?php

namespace App\Enums;

enum PlanType: string
{
    case ALL = 'all';
    case BASIC = 'basic';
    case COMMISSION = 'commission';
    case STANDARD = 'standard';
    case PREMIUM = 'premium';
    case EXCLUSIVE = 'exclusive';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
