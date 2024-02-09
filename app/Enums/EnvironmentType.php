<?php

namespace App\Enums;

enum EnvironmentType: string
{
    case PROD = 'production';
    case LOCAL = 'local';
    case DEV = 'dev';
}
