<?php

namespace Database\Factories;

use App\Models\Advert;
use App\Models\AdvertImage;
use App\Models\AdvertService;
use App\Models\AdvertTag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;

class AdvertFactory extends Factory
{
    protected $model = Advert::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'slug' => $this->faker->unique()->slug(2),
            'is_public' => true,
            'is_main' => false,
        ];
    }

    public function configure(): AdvertFactory
    {
        return $this->afterCreating(function (Advert $advert) {
            AdvertImage::factory()
                ->count(10)
                ->sequence(fn(Sequence $sequence) => [
                    'is_thumbnail' => $sequence->index == 0
                ])
                ->create([
                    'advert_id' => $advert->id
                ]);
        });
    }

    public function asMain(): Factory
    {
        return $this->state(fn() => ['is_main' => true]);
    }

    public function event(): Factory
    {
        return $this->state(function () {
            return [
                'advert_service_id' => AdvertService::factory()->event()
            ];
        })->has(AdvertTag::factory()->event(), 'tags');
    }

    public function wine(): Factory
    {
        return $this->state(function () {
            return [
                'advert_service_id' => AdvertService::factory()->wine()
            ];
        })->has(AdvertTag::factory()->wine(), 'tags');
    }

    public function business(): Factory
    {
        return $this->state(function () {
            return [
                'advert_service_id' => AdvertService::factory()->business()
            ];
        })->has(AdvertTag::factory()->business(), 'tags');
    }

    public function caterer(): Factory
    {
        return $this->state(function () {
            return [
                'advert_service_id' => AdvertService::factory()->caterer()
            ];
        })->has(AdvertTag::factory()->caterer(), 'tags');
    }

    public function entertainment(): Factory
    {
        return $this->state(function () {
            return [
                'advert_service_id' => AdvertService::factory()->entertainment()
            ];
        })->has(AdvertTag::factory()->entertainment(), 'tags');
    }

    public function equipment(): Factory
    {
        return $this->state(function () {
            return [
                'advert_service_id' => AdvertService::factory()->equipment()
            ];
        })->has(AdvertTag::factory()->equipment(), 'tags');
    }

}
