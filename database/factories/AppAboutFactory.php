<?php

namespace Database\Factories;

use App\Models\AppAbout;
use App\Models\AppAboutItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AppAbout>
 */
class AppAboutFactory extends Factory
{
    protected $model = AppAbout::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'image' => $this->faker->imageUrl
        ];
    }

    public function configure(): AppAboutFactory
    {
        return $this->afterCreating(function (AppAbout $about) {
            AppAboutItem::factory()
                ->for($about, 'about')
                ->count(5)
                ->create();
        });
    }


}
