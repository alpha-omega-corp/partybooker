<?php

namespace Database\Factories;

use App\Enums\CategoryType;
use App\Enums\PlanType;
use App\Models\Advert;
use App\Models\AdvertImage;
use App\Models\AdvertLocale;
use App\Models\AdvertService;
use App\Models\AdvertTag;
use App\Models\Category;
use App\Models\Plan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;

class AdvertFactory extends Factory
{
    protected $model = Advert::class;

    public function definition(): array
    {
        return [
            'slug' => $this->faker->unique()->slug(2),
            'is_public' => true,
            'is_main' => false,
        ];
    }

    public function configure(): AdvertFactory
    {
        return $this->afterCreating(function (Advert $advert) {
            AdvertImage::factory()
                ->count(Plan::ofType(PlanType::STANDARD)->first()->uploads)
                ->sequence(fn(Sequence $sequence) => [
                    'is_thumbnail' => $sequence->index == 0
                ])
                ->create([
                    'advert_id' => $advert->id
                ]);

            AdvertLocale::factory([
                'translatable_id' => $advert->id,
                'translatable_type' => Advert::class,
            ])
                ->count(2)
                ->sequence(fn(Sequence $sequence) => [
                    'lang' => $sequence->index == 0 ? 'en' : 'fr'
                ])
                ->create();
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
        })
            ->has(AdvertTag::factory()->event(), 'tags')
            ->for(Category::ofType(CategoryType::EVENT)->first());
    }

    public function wine(): Factory
    {
        return $this->state(function () {
            return [
                'advert_service_id' => AdvertService::factory()->wine()
            ];
        })
            ->has(AdvertTag::factory()->wine(), 'tags')
            ->for(Category::ofType(CategoryType::WINE)->first());

    }

    public function caterer(): Factory
    {
        return $this->state(function () {
            return [
                'advert_service_id' => AdvertService::factory()->caterer()
            ];
        })->has(AdvertTag::factory()->caterer(), 'tags')
            ->for(Category::ofType(CategoryType::CATERER)->first());

    }

    public function entertainment(): Factory
    {
        return $this->state(function () {
            return [
                'advert_service_id' => AdvertService::factory()->entertainment()
            ];
        })->has(AdvertTag::factory()->entertainment(), 'tags')
            ->for(Category::ofType(CategoryType::ENTERTAINMENT)->first());

    }

    public function equipment(): Factory
    {
        return $this->state(function () {
            return [
                'advert_service_id' => AdvertService::factory()->equipment()
            ];
        })->has(AdvertTag::factory()->equipment(), 'tags')
            ->for(Category::ofType(CategoryType::EQUIPMENT)->first());

    }

}
