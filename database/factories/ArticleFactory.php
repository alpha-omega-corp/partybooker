<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Article>
 */
class ArticleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'post_id' => Str::random(4),
            'created' => now(),
            'updated' => now(),
            'published' => now(),
            'status' => 1,
            'title_en' => fake()->company,
            'title_fr' => fake()->company,
            'slug' => Str::random(4),
            'main_img' => 'null',
            'sec_img' => 'null',
            'article_fr' => fake()->realText,
            'article_en' => fake()->realText,
            'author' => 'Alphomega',
        ];
    }
}
