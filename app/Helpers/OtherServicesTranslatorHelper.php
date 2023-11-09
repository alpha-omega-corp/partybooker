<?php


namespace App\Helpers;


class OtherServicesTranslatorHelper
{

    public static $_items = [
        'flexible-hours',
        'decorations',
        'swimming-pool',
        'spa',
        'smoking-area',
        'playground',
        'tent',
        'group-activities',
        'team-building',
        'other'
    ];

    public static function translate($key)
    {
        return SimpleTranslateHelper::translate($key);
    }

}
