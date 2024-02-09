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
    ];

    protected static function newFactory(): ServiceEntertainmentFactory
    {
        return ServiceEntertainmentFactory::new();
    }

    public function category(): MorphOne
    {
        return $this->morphOne(Category::class, 'categorizable');
    }

    public function service(): MorphOne
    {
        return $this->morphOne(AdvertService::class, 'serviceable');
    }
}
