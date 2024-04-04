<?php

namespace App\Helpers;

class ServiceHelper
{
    public static function days(): array
    {
        return [
            __('service.day.monday'),
            __('service.day.tuesday'),
            __('service.day.wednesday'),
            __('service.day.thursday'),
            __('service.day.friday'),
            __('service.day.saturday'),
            __('service.day.sunday'),
        ];
    }
}
