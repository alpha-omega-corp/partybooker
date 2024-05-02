<?php

namespace App\Models;

use Database\Factories\RequestPartnerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class RequestPartner extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'app_plan_id',
    ];

    protected static function newFactory(): RequestPartnerFactory
    {
        return RequestPartnerFactory::new();
    }

    public function plan(): BelongsTo
    {
        return $this->belongsTo(AppPlan::class, 'app_plan_id', 'id');
    }


    public function notification(): MorphOne
    {
        return $this->morphOne(Notification::class, 'notifiable');
    }

}
