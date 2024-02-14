<?php

namespace App\Models;

use Database\Factories\RequestServiceFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class RequestService extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
    ];

    protected static function newFactory(): RequestServiceFactory
    {
        return RequestServiceFactory::new();
    }

    public function notification(): MorphOne
    {
        return $this->morphOne(Notification::class, 'notifiable');
    }

    public function advert(): BelongsTo
    {
        return $this->belongsTo(Advert::class);
    }
}
