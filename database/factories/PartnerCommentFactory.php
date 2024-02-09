<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class PartnerCommentFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'english' => $this->faker->sentence(40),
            'french' => $this->faker->sentence(40),
        ];
    }
}
