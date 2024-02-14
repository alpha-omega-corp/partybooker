<?php

namespace App\Models;

use Database\Factories\RequestPartnerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class RequestPartner extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
    ];

    protected static function newFactory(): RequestPartnerFactory
    {
        return RequestPartnerFactory::new();
    }

    public function notification(): MorphOne
    {
        return $this->morphOne(Notification::class, 'notifiable');
    }

}
