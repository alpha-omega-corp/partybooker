<?php

namespace App\Enums;

enum FormType: string
{
    case PAYMENT = 'payment';
    case FURNITURE = 'furniture';
    case EQUIPMENT = 'equipment';
    case KITCHEN = 'kitchen';
    case DELIVERY = 'delivery';
    case STAFF = 'staff';
    case DECORATION = 'decoration';
    case DISH = 'dish';
    case INSTALLATION = 'installation';
    case TECHNICAL = 'technical';
    case FOOD = 'food';

    case SERVICE_CATERER = 'service.caterer';
    case SERVICE_ENTERTAINMENT = 'service.entertainment';
    case SERVICE_EQUIPMENT = 'service.equipment';
    case SERVICE_EVENT = 'service.event';
    case SERVICE_WINE = 'service.wine';

    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
