<?php

namespace Database\Factories;

use App\Models\Advert;
use App\Models\Company;
use App\Models\CompanyLocale;
use App\Models\Partner;
use App\Models\PartnerComment;
use App\Models\PartnerTop;
use App\Models\Payment;
use App\Models\Plan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Lottery;

/**
 * @extends Factory<Partner>
 */
class PartnerFactory extends Factory
{
    protected $model = Partner::class;

    public function definition(): array
    {
        $adverts = [
            Advert::factory()->event(),
            Advert::factory()->wine(),
            Advert::factory()->business(),
            Advert::factory()->caterer(),
            Advert::factory()->entertainment(),
            Advert::factory()->equipment()
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
                ->has($this->faker->randomElement($adverts)->asMain(), 'adverts')
                ->has($this->faker->randomElement($adverts), 'adverts')
                ->has(CompanyLocale::factory()->english(), 'locale')
                ->has(CompanyLocale::factory()->french(), 'locale')
        ];
    }

    public function configure(): PartnerFactory
    {
        return $this->afterCreating(function (Partner $partner) {
            Lottery::odds(1, 5)
                ->winner(function () use ($partner) {
                    PartnerTop::factory()->for($partner)->create();
                    PartnerComment::factory()->for($partner)->create();
                })->choose();

        });
    }

}
