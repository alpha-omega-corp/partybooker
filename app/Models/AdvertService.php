<?php

namespace App\Models;

use Database\Factories\AdvertServiceFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class AdvertService extends Model
{
    use HasFactory;

    protected $fillable = [
        'serviceable_id',
        'serviceable_type',
        'listing_detail_id',
        'listing_price_id',
        'listing_schedule_id',
    ];

    protected static function newFactory(): AdvertServiceFactory
    {
        return AdvertServiceFactory::new();
    }

    public function advert(): BelongsTo
    {
        return $this->belongsTo(Advert::class, 'advert_service_id', 'id');
    }

    public function detail(): HasOne
    {
        return $this->hasOne(ListingDetail::class, 'id', 'listing_detail_id');
    }

    public function price(): HasOne
    {
        return $this->hasOne(ListingPrice::class, 'id', 'listing_price_id');
    }

    public function schedule(): HasOne
    {
        return $this->hasOne(ListingSchedule::class, 'id', 'listing_schedule_id');
    }

    public function serviceable(): MorphTo
    {
        return $this->morphTo();
    }

}
