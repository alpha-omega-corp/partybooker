<?php

namespace App\Enums;

enum EnvironmentType: string
{
    case LOCAL = 'local';
    case DEV = 'dev';
    case PROD = 'production';
}
