<?php

namespace App\Models;

use Database\Factories\AdvertRateFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvertRate extends Model
{
    use HasFactory;

    protected $fillable = [
        'prices',
        'budget',
        'has_deposit',
        'deposit_description'
    ];

    protected $casts = [
        'prices' => 'array',
        'has_deposit' => 'boolean',
    ];

    protected static function newFactory(): AdvertRateFactory
    {
        return AdvertRateFactory::new();
    }
}
