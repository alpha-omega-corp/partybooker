<?php

namespace App\Services;

use App\Models\PartnerTop;
use Illuminate\Database\Eloquent\Collection;

class PartnerService
{
    public function topServices(?bool $random = false): Collection
    {
        if ($random) {
            $topCount = PartnerTop::all()->count();
            $dCount = 4;
            
            return PartnerTop::all()->random(PartnerTop::all()->count() < $dCount ? $topCount : $dCount)->map(fn($item) => $item->partner);
        }

        return PartnerTop::all()->map(fn($item) => $item->partner);
    }
}
