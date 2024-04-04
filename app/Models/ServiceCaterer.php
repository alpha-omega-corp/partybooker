<?php

namespace App\Models;

use Database\Factories\ServiceCatererFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class ServiceCaterer extends Model
{
    use HasFactory;

    protected $fillable = [
        'min_guests',
        'max_guests',
        'delivery_services',
        'specialty',
    ];

    protected $casts = [
        'delivery_services' => 'array',
    ];

    protected static function newFactory(): ServiceCatererFactory
    {
        return ServiceCatererFactory::new();
    }

    public function service(): MorphOne
    {
        return $this->morphOne(AdvertService::class, 'serviceable');
    }
}
