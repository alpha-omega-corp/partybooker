<?php

namespace App\Models\Services;

use Database\Factories\EventPlaceFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessService extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    protected static function newFactory(): EventPlaceFactory
    {
        return EventPlaceFactory::new();
    }

}
