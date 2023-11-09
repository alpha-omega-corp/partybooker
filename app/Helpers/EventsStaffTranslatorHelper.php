<?php


namespace App\Helpers;


class EventsStaffTranslatorHelper
{

    public static $_items = [
        'no-service',
        'babysitters',
        'service-staff',
        'musicians',
        'entertainers',
        'traffic-coordination',
        'post-party-cleaning',
        'master-ceremonies',
        'security',
        'singers',
        'cloakroom',
        'dj',
        'other'
    ];


    public static function translate($key)
    {
        return SimpleTranslateHelper::translate($key);
    }

}
