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

    public static function payments(): array
    {
        return [
            'Cash',
            'Visa/Mastercard',
            'Facture',
            'American Express',
            'Maestro',
            'Twint',
            'Post Finance'
        ];
    }

    public static function budgets(): array
    {
        return [
            '100-500 CHF',
            '500-1000 CHF',
            '1000-2000 CHF',
            '2000-5000 CHF',
            '5000-10000 CHF',
        ];
    }

    public static function dishes(): array
    {
        return [
            __('service.equipment.dish.glass'),
            __('service.equipment.dish.wine'),
            __('service.equipment.dish.plates'),
            __('service.equipment.dish.cutlery'),
            __('service.equipment.dish.stove'),
            __('service.equipment.dish.tableware'),
            __('service.equipment.dish.basket'),
        ];
    }

    public static function furniture(): array
    {
        return [
            __('service.equipment.furniture.tables'),
            __('service.equipment.furniture.chairs'),
            __('service.equipment.furniture.benches'),
            __('service.equipment.furniture.stools'),
            __('service.equipment.furniture.buffet'),
            __('service.equipment.furniture.tent'),
        ];
    }

    public static function staff(): array
    {
        return [
            __('service.equipment.staff.waiter'),
            __('service.equipment.staff.installation'),
            __('service.equipment.staff.decoration'),
            __('service.equipment.staff.washing'),
            __('service.equipment.staff.cleaning'),
        ];
    }

    public static function decorations(): array
    {
        return [
            __('service.equipment.decorations.tablecloth'),
            __('service.equipment.decorations.napkins'),
            __('service.equipment.decorations.flowers'),
            __('service.equipment.decorations.chair_cover'),
            __('service.equipment.decorations.tealight'),
            __('service.equipment.decorations.candles'),
            __('service.equipment.decorations.menus'),
            __('service.equipment.decorations.lights'),
            __('service.equipment.decorations.balloons'),
        ];
    }

    public static function kitchen(): array
    {
        return [
            __('service.equipment.kitchen.fridge'),
            __('service.equipment.kitchen.oven'),
            __('service.equipment.kitchen.coffee'),
        ];
    }

    public static function logistics(): array
    {
        return [
            __('service.equipment.logistics.delivery'),
            __('service.equipment.logistics.takeaway'),
            __('service.equipment.logistics.unknown'),
        ];
    }

}
