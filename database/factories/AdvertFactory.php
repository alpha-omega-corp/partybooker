<?php

namespace Database\Factories;

use App\Models\Advert;
use App\Models\Services\EventService;
use App\Models\Services\WineService;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdvertFactory extends Factory
{
    protected $model = Advert::class;

    public function definition(): array
    {
        return [
            'public' => true,
            'title' => $this->faker->sentence(3),
        ];
    }

    public function eventService(): Factory
    {
        return $this->state(function () {
            return [
                'advertisable_id' => EventService::factory(),
                'advertisable_type' => EventService::class,
            ];
        });
    }

    public function wineService(): Factory
    {
        return $this->state(function () {
            return [
                'advertisable_id' => WineService::factory(),
                'advertisable_type' => WineService::class,
            ];
        });
    }
}
