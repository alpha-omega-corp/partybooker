<?php

namespace App\Services;

use App\Interfaces\IPartnerService;
use App\Models\PartnerTop;
use Illuminate\Support\Collection;

class PartnerService implements IPartnerService
{
    public function topServices(?bool $random = false): Collection
    {
        if ($random) {
            $topCount = PartnerTop::all()->count();
            $dCount = 4;

            return PartnerTop::all()->random(PartnerTop::all()->count() < $dCount ? $topCount : $dCount)->map(fn($item) => $item->partner);
        }

        return PartnerTop::all()->map(fn($item) => $item->partner)->shuffle();
    }
}
