<?php

namespace App\Models;


use Database\Factories\PartnerFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function payment(): BelongsTo
    {
        return $this->belongsTo(Payment::class);
    }

    public function top(): HasOne
    {
        return $this->hasOne(PartnerTop::class, 'partner_id', 'id');
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
