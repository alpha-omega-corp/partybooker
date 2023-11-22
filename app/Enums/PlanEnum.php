<?php

namespace App\Enums;

enum PlanEnum: string
{
    case VIP = 'vip';
    case STANDARD = 'standart';
    case PREMIUM = 'premium';
    case EXCLUSIVE = 'exclusif';

    case COMMISSION = 'commission';
    case BASIC = 'basic';

}
