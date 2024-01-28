<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'slug' => fake()->unique()->word,
            'image' => fake()->image,
            'alt_fr' => fake()->word,
            'alt_en' => fake()->word,
            'title_fr' => fake()->sentence,
            'title_en' => fake()->sentence,
            'content_fr' => fake()->paragraph,
            'content_en' => fake()->paragraph,
            'status' => rand(true, false),
        ];
    }
}
