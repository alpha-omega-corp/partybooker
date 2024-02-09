<?php

namespace Database\Factories;

use App\Models\AdvertImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdvertImageFactory extends Factory
{
    protected $model = AdvertImage::class;

    public function definition(): array
    {

        return [
            'is_thumbnail' => false,
            'path' => $this->faker->imageUrl(500, 500),
        ];
    }

}
