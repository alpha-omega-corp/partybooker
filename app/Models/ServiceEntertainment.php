<?php


namespace App\Models;


use Database\Factories\ServiceEntertainmentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class ServiceEntertainment extends Model
{
    use HasFactory;

    protected $fillable = [
        'min_guests',
        'max_guests',
    ];

    protected static function newFactory(): ServiceEntertainmentFactory
    {
        return ServiceEntertainmentFactory::new();
    }

    public function service(): MorphOne
    {
        return $this->morphOne(AdvertService::class, 'serviceable');
    }
}
