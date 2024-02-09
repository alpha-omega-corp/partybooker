<?php

namespace App\Models;

use Database\Factories\ListingDetailFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingDetail extends Model
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

    protected static function newFactory(): ListingDetailFactory
    {
        return ListingDetailFactory::new();
    }
}
