<?php

namespace App\Models;

use Database\Factories\ServiceEquipmentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class ServiceEquipment extends Model
{
    use HasFactory;

    public $table = 'service_equipments';

    protected $fillable = [
    ];

    protected static function newFactory(): ServiceEquipmentFactory
    {
        return ServiceEquipmentFactory::new();
    }

    public function service(): MorphOne
    {
        return $this->morphOne(AdvertService::class, 'serviceable');
    }
}
