<?php

namespace Database\Factories;

use App\Enums\Language;
use App\Models\AppUsp;
use App\Models\AppUspLocale;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;

/**
 * @extends Factory<AppUsp>
 */
class AppUspFactory extends Factory
{
    protected $model = AppUsp::class;

    public function definition(): array
    {
        return [
            //
        ];
    }

    public function configure(): AppUspFactory
    {
        return $this->afterCreating(function (AppUsp $usp) {
            AppUspLocale::factory()
                ->for($usp, 'usp')
                ->count(2)
                ->sequence(fn(Sequence $sequence) => [
                    'lang' => $sequence->index == 0
                        ? Language::FR->value
                        : Language::EN->value
                ])
                ->create();
        });
    }
}
