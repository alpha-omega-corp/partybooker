<?php

namespace App\Models;

use Database\Factories\ServiceWineFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class ServiceWine extends Model
{
    use HasFactory;

    protected $fillable = [
    ];

    protected static function newFactory(): ServiceWineFactory
    {
        return ServiceWineFactory::new();
    }

    public function service(): MorphOne
    {
        return $this->morphOne(AdvertService::class, 'serviceable');
    }
}
