<?php

namespace App\Enums;

enum PartnerFilter: string
{
    case PLAN = 'planFilter';
    case CATEGORY = 'categoryFilter';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
