<?php

namespace App\Enums;

enum Days: string
{
    case MON = 'monday';
    case TUE = 'tuesday';
    case WED = 'wednesday';
    case THU = 'thursday';
    case FRI = 'friday';
    case SAT = 'saturday';
    case SUN = 'sunday';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

}
