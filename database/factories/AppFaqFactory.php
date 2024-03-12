<?php

namespace Database\Factories;

use App\Enums\Language;
use App\Models\AppFaq;
use App\Models\AppFaqLocale;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;

/**
 * @extends Factory<AppFaq>
 */
class AppFaqFactory extends Factory
{
    protected $model = AppFaq::class;

    public function definition(): array
    {
        return [
            //
        ];
    }

    public function configure(): AppFaqFactory
    {
        return $this->afterCreating(function (AppFaq $faq) {
            AppFaqLocale::factory()
                ->for($faq, 'faq')
                ->count(2)
                ->sequence(fn(Sequence $sequence) => [
                    'lang' => $sequence->index == 0
                        ? Language::EN->value
                        : Language::FR->value
                ])
                ->create();
        });
    }
}
