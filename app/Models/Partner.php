<?php

namespace App\Models;


use Database\Factories\PartnerFactory;
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
        'company_id',
        'payment_id',
    ];

    protected static function newFactory(): PartnerFactory
    {
        return PartnerFactory::new();
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function company(): HasOne
    {
        return $this->hasOne(Company::class, 'id', 'company_id');
    }

    public function payment(): BelongsTo
    {
        return $this->belongsTo(Payment::class);
    }

    public function plan(): HasOne
    {
        return $this->hasOne(Plan::class, 'id', 'plans_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(AdvertImage::class);
    }

    public function rates(): HasMany
    {
        return $this->hasMany(Rate::class, 'id_partner', 'id_partner');
    }

    public function statistic(): HasOne
    {
        return $this->hasOne(Statistic::class, 'id_partner', 'id_partner');
    }

    public function eventTypes(): BelongsToMany
    {
        return $this->belongsToMany(ServiceEvent::class,
            PartnerTag::class,
            'partners_info_id',
            'event_type_id',
            'id', 'id');
    }
}
