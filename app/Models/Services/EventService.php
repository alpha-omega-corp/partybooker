<?php


namespace App\Models\Services;


use App\Models\Partner;
use App\Models\PartnerEventType;
use App\Models\Services\Partials\ServiceCost;
use App\Models\Services\Partials\ServiceSchedule;
use Database\Factories\EventServiceFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class EventService extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'service_cost_id',
        'service_schedule_id',
    ];

    protected static function newFactory(): EventServiceFactory
    {
        return EventServiceFactory::new();
    }

    public function serviceCost(): HasOne
    {
        return $this->hasOne(ServiceCost::class);
    }

    public function serviceSchedule(): HasOne
    {
        return $this->hasOne(ServiceSchedule::class);
    }

    public function partners(): BelongsToMany
    {
        return $this->belongsToMany(Partner::class,
            PartnerEventType::class,
            'event_type_id',
            'partners_info_id',
            'id', 'id');
    }


}
