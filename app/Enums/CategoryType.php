<?php

namespace App\Enums;

use App\Models\ServiceCaterer;
use App\Models\ServiceEntertainment;
use App\Models\ServiceEquipment;
use App\Models\ServiceEvent;
use App\Models\ServiceWine;

enum CategoryType: string
{
    case ALL = 'all';
    case EVENT = ServiceEvent::class;
    case ENTERTAINMENT = ServiceEntertainment::class;
    case EQUIPMENT = ServiceEquipment::class;
    case CATERER = ServiceCaterer::class;
    case WINE = ServiceWine::class;

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }
}
