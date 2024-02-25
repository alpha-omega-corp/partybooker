<?php


namespace App\Models;


use Database\Factories\ServiceEventFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class ServiceEvent extends Model
{
    use HasFactory;

    protected $fillable = [
    ];

    protected static function newFactory(): ServiceEventFactory
    {
        return ServiceEventFactory::new();
    }

    public function service(): MorphOne
    {
        return $this->morphOne(AdvertService::class, 'serviceable');
    }
}
