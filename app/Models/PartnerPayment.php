<?php

namespace App\Models;

use Database\Factories\PartnerPaymentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PartnerPayment extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'type',
        'accepted_at',
        'expires_at',
        'app_plan_id',
    ];

    protected $casts = [
        'accepted_at' => 'datetime',
        'expires_at' => 'datetime',
    ];

    protected static function newFactory(): PartnerPaymentFactory
    {
        return PartnerPaymentFactory::new();
    }

    public function partner(): HasOne
    {
        return $this->hasOne(Partner::class);
    }

    public function plan(): BelongsTo
    {
        return $this->belongsTo(AppPlan::class, 'app_plan_id', 'id');
    }
}
