<?php

namespace App\Enums;

/*
resources/sass/bootstrap.scss
*/

enum AppColor: string
{
    case PRIMARY = 'primary';
    case ACCENT = 'accent';
    case SECONDARY = 'secondary';
    case DANGER = 'danger';
    case WARNING = 'warning';
    case INFO = 'info';
    case PINK = 'pink';
    case BLUE = 'blue';
    case ORANGE = 'orange';
    case GRAY = 'gray';
    case LIGHT = 'light';
    case HOME_GREEN = 'home-green';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
