<?php

namespace App\Enums;

enum FormType
{
    case PAYMENT;
    case FURNITURE;
    case EQUIPMENT;
    case KITCHEN;
    case DELIVERY;
    case STAFF;
    case DECORATION;
    case DISH;
    case INSTALLATION;

    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }
}
