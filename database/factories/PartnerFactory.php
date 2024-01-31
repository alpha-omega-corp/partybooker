<?php

namespace Database\Factories;

use App\Models\Advert;
use App\Models\AdvertImage;
use App\Models\AdvertTag;
use App\Models\Company;
use App\Models\CompanyLocale;
use App\Models\Partner;
use App\Models\Payment;
use App\Models\Plan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;

class PartnerFactory extends Factory
{
    protected $model = Partner::class;


    public function definition(): array
    {
        $images = AdvertImage::factory()
            ->count(10)
            ->sequence(fn(Sequence $sequence) => [
                'is_thumbnail' => $sequence->index === 0
            ]);

        $adverts = [
            Advert::factory()->eventService()
                ->has(AdvertTag::factory()->event(), 'tags')
                ->has($images, 'images'),
            Advert::factory()->wineService()
                ->has(AdvertTag::factory()->wine(), 'tags')
                ->has($images, 'images'),
        ];

        $plans = Plan::all()
            ->collect()
            ->pluck('id')
            ->toArray();

        return [
            'payment_id' => Payment::factory([
                'plan_id' => $this->faker->randomElement($plans)
            ]),
            'company_id' => Company::factory()
                ->has($this->faker->randomElement($adverts))
                ->has(CompanyLocale::factory()->english(), 'locale')
                ->has(CompanyLocale::factory()->french(), 'locale')

        ];
    }
}
