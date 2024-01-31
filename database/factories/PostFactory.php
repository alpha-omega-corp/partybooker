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
            'slug' => $this->faker->slug(2),
            'image' => $this->faker->imageUrl(500, 500),
            'alt_fr' => $this->faker->word,
            'alt_en' => $this->faker->word,
            'title_fr' => $this->faker->sentence,
            'title_en' => $this->faker->sentence,
            'content_fr' => $this->faker->paragraph,
            'content_en' => $this->faker->paragraph,
            'status' => rand(true, false),
        ];
    }
}
