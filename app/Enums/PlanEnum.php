<?php

namespace App\Enums;

enum PlanEnum: string
{
    case VIP = 'vip';
    case STANDARD = 'standard';
    case PREMIUM = 'premium';
    case EXCLUSIVE = 'exclusive';

    case COMMISSION = 'commission';
    case BASIC = 'basic';

}
