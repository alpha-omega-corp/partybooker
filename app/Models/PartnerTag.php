<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PartnerTag extends Pivot
{
    public $timestamps = false;

    protected $fillable = [
        'partners_info_id',
        'event_type_id'
    ];
}
