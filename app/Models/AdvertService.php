<?php

namespace App\Models;

use Database\Factories\AdvertServiceFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class AdvertService extends Model
{
    use HasFactory;

    protected $fillable = [
        'serviceable_id',
        'serviceable_type',
        'advert_schedule_id',
        'advert_rate_id',
    ];

    protected static function newFactory(): AdvertServiceFactory
    {
        return AdvertServiceFactory::new();
    }

    public function files(): HasMany
    {
        return $this->hasMany(AdvertFile::class, 'advert_service_id', 'id');
    }

    public function forms(): BelongsToMany
    {
        return $this->belongsToMany(AppForm::class, 'advert_forms', 'advert_service_id', 'app_form_id');
    }

    public function schedule(): BelongsTo
    {
        return $this->belongsTo(AdvertSchedule::class, 'advert_schedule_id', 'id');
    }

    public function rate(): BelongsTo
    {
        return $this->belongsTo(AdvertRate::class, 'advert_rate_id', 'id');
    }

    public function advert(): HasOne
    {
        return $this->hasOne(Advert::class);
    }

    public function serviceable(): MorphTo
    {
        return $this->morphTo();
    }

}
