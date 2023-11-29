<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PartnerEventType extends Pivot
{
    public $timestamps = false;
    public $incrementing = false;

    protected $table = "partner_event_types";

    protected $fillable = [
        'partners_info_id',
        'event_type_id'
    ];
}
