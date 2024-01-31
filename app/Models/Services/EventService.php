<?php


namespace App\Models\Services;


use App\Models\Advert;
use App\Models\Category;
use App\Models\Services\Partials\ServiceCommon;
use App\Models\Services\Partials\ServiceCost;
use App\Models\Services\Partials\ServiceSchedule;
use Database\Factories\EventServiceFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class EventService extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_cost_id',
        'service_schedule_id',
        'service_common_id',
    ];

    protected static function newFactory(): EventServiceFactory
    {
        return EventServiceFactory::new();
    }

    public function category(): MorphOne
    {
        return $this->morphOne(Category::class, 'categorizable');
    }

    public function advert(): MorphOne
    {
        return $this->morphOne(Advert::class, 'advertisable');
    }

    public function serviceCost(): HasOne
    {
        return $this->hasOne(ServiceCost::class);
    }

    public function serviceSchedule(): HasOne
    {
        return $this->hasOne(ServiceSchedule::class);
    }

    public function serviceCommon(): HasOne
    {
        return $this->hasOne(ServiceCommon::class);
    }

}
