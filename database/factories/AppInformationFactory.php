<?php

namespace Database\Factories;

use App\Models\AppInformation;
use App\Models\AppInformationLocale;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;

/**
 * @extends Factory<AppInformation>
 */
class AppInformationFactory extends Factory
{
    protected $model = AppInformation::class;

    public function definition(): array
    {
        return [
            //
        ];
    }

    public function configure(): AppInformationFactory
    {
        return $this->afterCreating(function (AppInformation $information) {
            AppInformationLocale::factory()
                ->for($information, 'information')
                ->count(2)
                ->sequence(fn(Sequence $sequence) => [
                    'lang' => $sequence->index == 0 ? 'en' : 'fr'
                ])
                ->create();
        });
    }
}
