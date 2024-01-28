<?php

namespace App\Models;


use App\Models\Services\EventService;
use Database\Factories\PartnerFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Partner extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'id',
        'company_id',
        'payment_id',
    ];

    protected static function newFactory(): PartnerFactory
    {
        return PartnerFactory::new();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function company(): HasOne
    {
        return $this->hasOne(Company::class);
    }

    public function payment(): HasOne
    {
        return $this->hasOne(Payment::class);
    }

    public function currentPlan(): HasOne
    {
        return $this->hasOne(Plan::class, 'id', 'plans_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(ServiceImage::class);
    }

    public function rates(): HasMany
    {
        return $this->hasMany(Rate::class, 'id_partner', 'id_partner');
    }

    public function statistic(): HasOne
    {
        return $this->hasOne(Statistic::class, 'id_partner', 'id_partner');
    }

    public function planOptions(): HasMany
    {
        return $this->hasMany(PartnerPlanOption::class, 'partners_info_id', 'id');
    }

    public function categories(): HasMany
    {
        return $this->hasMany(AdvertCategory::class, 'partners_info_id', 'id');
    }

    public function services(): HasMany
    {
        return $this->hasMany(Advert::class, 'partners_info_id', 'id');
    }

    public function scopeListing(Builder $query): void
    {
        $query->with(['company'])->where('public', true);
    }

    public function eventTypes(): BelongsToMany
    {
        return $this->belongsToMany(EventService::class,
            PartnerEventType::class,
            'partners_info_id',
            'event_type_id',
            'id', 'id');
    }
}
