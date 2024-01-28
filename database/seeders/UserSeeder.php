<?php

namespace Database\Seeders;

use App\Enums\PlanType;
use App\Models\Company;
use App\Models\Partner;
use App\Models\Payment;
use App\Models\Plan;
use App\Models\PlanOption;
use App\Models\Services\EventService;
use App\Models\Services\Partials\ServiceCost;
use App\Models\Services\Partials\ServiceSchedule;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $plans = [
            Plan::factory([
                'name' => PlanType::STANDARD->value,
                'price' => 300,
                'uploads' => 5,
                'request' => true,
                'video' => true,
            ])->has(PlanOption::factory()
                ->count(1)
                ->state(new Sequence(
                    ['categories' => 1, 'children' => 2],
                )))->create(),

            Plan::factory([
                'name' => PlanType::PREMIUM->value,
                'price' => 500,
                'uploads' => 10,
                'request' => true,
                'video' => true,
            ])->has(PlanOption::factory()
                ->count(2)
                ->state(new Sequence(
                    ['categories' => 1, 'children' => 2],
                    ['categories' => 2, 'children' => 1]
                )))->create(),

            Plan::factory([
                'name' => PlanType::EXCLUSIVE->value,
                'price' => 950,
                'uploads' => 15,
                'request' => true,
                'video' => true,
            ])->has(PlanOption::factory()
                ->count(3)
                ->state(new Sequence(
                    ['categories' => 1, 'children' => 3],
                    ['categories' => 2, 'children' => 1],
                    ['categories' => 3, 'children' => 1],
                )))->create(),
        ];

        EventService::factory([
            'company_id' => Company::factory(),
            'service_cost_id' => ServiceCost::factory(),
            'service_schedule_id' => ServiceSchedule::factory(),
        ])->create();


        User::factory([
            'partner_id' => Partner::factory([
                'payment_id' => Payment::factory([
                    'plan_id' => $plans[array_rand($plans)],
                ]),
            ])
        ])
            ->count(10)
            ->create();
    }

}
