<?php

namespace Database\Factories;

use App\Models\CompanySocial;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CompanySocial>
 */
class CompanySocialFactory extends Factory
{
    protected $model = CompanySocial::class;

    public function definition(): array
    {
        return [
            'www' => $this->faker->unique()->url,
            'youtube' => $this->faker->url,
            'instagram' => $this->faker->url,
            'facebook' => $this->faker->url,
            'tiktok' => $this->faker->url,
            'twitter' => $this->faker->url,
            'linkedin' => $this->faker->url,
            'vimeo' => $this->faker->url,
        ];
    }
}
