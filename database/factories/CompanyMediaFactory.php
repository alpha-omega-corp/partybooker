<?php

namespace Database\Factories;

use App\Models\CompanyMedia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CompanyMedia>
 */
class CompanyMediaFactory extends Factory
{
    protected $model = CompanyMedia::class;

    public function definition(): array
    {
        return [
            'www' => $this->faker->url,
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
