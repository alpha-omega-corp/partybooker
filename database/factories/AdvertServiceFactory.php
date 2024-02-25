<?php

namespace Database\Factories;

use App\Models\AdvertService;
use App\Models\ListingDetail;
use App\Models\ListingPrice;
use App\Models\ListingSchedule;
use App\Models\ServiceCaterer;
use App\Models\ServiceEntertainment;
use App\Models\ServiceEquipment;
use App\Models\ServiceEvent;
use App\Models\ServiceWine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AdvertService>
 */
class AdvertServiceFactory extends Factory
{
    protected $model = AdvertService::class;

    public function definition(): array
    {
        return [
            'listing_schedule_id' => ListingSchedule::factory(),
            'listing_detail_id' => ListingDetail::factory(),
            'listing_price_id' => ListingPrice::factory(),
        ];
    }

    public function wine(): Factory
    {
        return $this->state(function () {
            return [
                'serviceable_id' => ServiceWine::factory(),
                'serviceable_type' => ServiceWine::class,
            ];
        });
    }

    public function event(): Factory
    {
        return $this->state(function () {
            return [
                'serviceable_id' => ServiceEvent::factory(),
                'serviceable_type' => ServiceEvent::class,
            ];
        });
    }

    public function caterer(): Factory
    {
        return $this->state(function () {
            return [
                'serviceable_id' => ServiceCaterer::factory(),
                'serviceable_type' => ServiceCaterer::class,
            ];
        });
    }

    public function equipment(): Factory
    {
        return $this->state(function () {
            return [
                'serviceable_id' => ServiceEquipment::factory(),
                'serviceable_type' => ServiceEquipment::class,
            ];
        });
    }

    public function entertainment(): Factory
    {
        return $this->state(function () {
            return [
                'serviceable_id' => ServiceEntertainment::factory(),
                'serviceable_type' => ServiceEntertainment::class,
            ];
        });
    }
}
