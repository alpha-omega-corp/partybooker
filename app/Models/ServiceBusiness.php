<?php

namespace App\Models;

use Database\Factories\ServiceBusinessFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class ServiceBusiness extends Model
{
    use HasFactory;

    protected $fillable = [
    ];

    protected static function newFactory(): ServiceBusinessFactory
    {
        return ServiceBusinessFactory::new();
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
