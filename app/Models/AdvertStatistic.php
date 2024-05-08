<?php

namespace App\Models;

use Database\Factories\AdvertStatisticFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AdvertStatistic extends Model
{
    use HasFactory;

    protected $fillable = [
        'views',
        'requests'
    ];

    protected static function newFactory(): AdvertStatisticFactory
    {
        return AdvertStatisticFactory::new();
    }

    public function advert(): HasOne
    {
        return $this->hasOne(Advert::class);
    }
}
