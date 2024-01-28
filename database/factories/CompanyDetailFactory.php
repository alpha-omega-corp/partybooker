<?php

namespace Database\Factories;

use App\Models\CompanyDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CompanyDetail>
 */
class CompanyDetailFactory extends Factory
{
    protected $model = CompanyDetail::class;

    public function definition(): array
    {
        return [
            'slogan_fr' => $this->faker->sentence,
            'slogan_en' => $this->faker->sentence,
            'short_fr' => $this->faker->sentence,
            'short_en' => $this->faker->sentence,
            'full_fr' => $this->faker->paragraph,
            'full_en' => $this->faker->paragraph,
            'seo_fr' => $this->faker->sentence,
            'seo_en' => $this->faker->sentence,
            'seo_title_fr' => $this->faker->sentence,
            'seo_title_en' => $this->faker->sentence,
            'seo_keywords_fr' => $this->faker->word,
            'seo_keywords_en' => $this->faker->word,

        ];
    }
}
