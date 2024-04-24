<?php

namespace Database\Factories;

use App\Enums\PlanType;
use App\Models\Advert;
use App\Models\AppPlan;
use App\Models\Company;
use App\Models\CompanyLocale;
use App\Models\Partner;
use App\Models\PartnerTop;
use App\Models\Payment;
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
            Advert::factory()->caterer(),
            Advert::factory()->entertainment(),
            Advert::factory()->equipment()
        ];

        $plans = AppPlan::all()
            ->collect()
            ->pluck('id')
            ->toArray();

        return [
            'payment_id' => Payment::factory([
                'app_plan_id' => $this->faker->randomElement($plans)
            ]),
            'company_id' => function (array $attributes) use ($adverts) {
                $company = Company::factory()
                    ->has(CompanyLocale::factory()->english(), 'locale')
                    ->has(CompanyLocale::factory()->french(), 'locale');

                $payment = Payment::find($attributes['payment_id']);
                return match (PlanType::from($payment->plan->code)) {
                    PlanType::STANDARD => $company
                        ->has($this->faker->randomElement($adverts)->asMain(), 'adverts'),
                    PlanType::PREMIUM => $company
                        ->has($this->faker->randomElement($adverts)->asMain(), 'adverts')
                        ->has($this->faker->randomElement($adverts), 'adverts'),
                    PlanType::EXCLUSIVE => $company
                        ->has($this->faker->randomElement($adverts)->asMain(), 'adverts')
                        ->has($this->faker->randomElement($adverts), 'adverts')
                        ->has($this->faker->randomElement($adverts), 'adverts'),
                    default => $company,
                };
            },
        ];
    }

    public function configure(): PartnerFactory
    {
        return $this->afterCreating(function (Partner $partner) {
            Lottery::odds(1, 5)
                ->winner(function () use ($partner) {
                    PartnerTop::factory()->for($partner)->create();
                })->choose();

        });
    }

}