<?php

namespace App\Models;


use Database\Factories\PartnerFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Partner extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'company_id',
        'partner_payment_id',
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
        return $this->belongsTo(PartnerPayment::class, 'partner_payment_id', 'id');
    }

    public function top(): HasOne
    {
        return $this->hasOne(PartnerTop::class, 'partner_id', 'id');
    }
}
