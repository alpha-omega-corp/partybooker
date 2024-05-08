<?php

namespace App\Enums;

enum NetworkType: string
{
    case INSTAGRAM = 'instagram';
    case FACEBOOK = 'facebook';
    case TWITTER = 'twitter';
    case YOUTUBE = 'youtube';
    case LINKEDIN = 'linkedin';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
