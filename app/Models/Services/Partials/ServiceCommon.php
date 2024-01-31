<?php

namespace App\Models\Services\Partials;

use Database\Factories\ServiceCommonFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCommon extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'staff',
        'rooms',
        'furniture',
        'equipment',
        'facilities',
        'conveniences',
        'has_handicap',
        'has_parking',
        'parking_slots',
    ];

    protected $casts = [
        'staff' => 'array',
        'rooms' => 'array',
        'equipment' => 'array',
        'furniture' => 'array',
        'facilities' => 'array',
        'conveniences' => 'array',
        'has_handicap' => 'boolean',
        'has_parking' => 'boolean',
    ];

    protected static function newFactory(): ServiceCommonFactory
    {
        return ServiceCommonFactory::new();
    }
}
