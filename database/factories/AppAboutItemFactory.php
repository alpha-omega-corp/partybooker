<?php

namespace Database\Factories;

use App\Enums\Language;
use App\Models\AppAboutItem;
use App\Models\AppAboutItemLocale;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;

/**
 * @extends Factory<AppAboutItem>
 */
class AppAboutItemFactory extends Factory
{
    protected $model = AppAboutItem::class;

    public function definition(): array
    {
        return [
            //
        ];
    }

    public function configure(): AppAboutItemFactory
    {
        return $this->afterCreating(function (AppAboutItem $item) {
            AppAboutItemLocale::factory()
                ->for($item, 'item')
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
