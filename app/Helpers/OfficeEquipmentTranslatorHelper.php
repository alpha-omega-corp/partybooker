<?php


namespace App\Helpers;


class OfficeEquipmentTranslatorHelper
{

    public static $_items = [
        'refrigeration',
        'heating-dishes',
        'refrigerator-freezer',
        'coffee-machine',
        'other'
    ];


    public static function translate($key)
    {
        return SimpleTranslateHelper::translate($key);
    }
}
