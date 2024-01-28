<?php

namespace App\Enums;

use App\Models\Services\BusinessService;
use App\Models\Services\CatererService;
use App\Models\Services\EntertainmentService;
use App\Models\Services\EquipmentService;
use App\Models\Services\EventService;
use App\Models\Services\WineService;

enum CategoryType: string
{
    case EVENT = EventService::class;
    case BUSINESS = BusinessService::class;
    case ENTERTAINMENT = EntertainmentService::class;
    case EQUIPMENT = EquipmentService::class;
    case CATERER = CatererService::class;
    case WINE = WineService::class;
}
