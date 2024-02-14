<?php

namespace Database\Factories;

use App\Models\PartnerComment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PartnerComment>
 */
class PartnerCommentFactory extends Factory
{
    protected $model = PartnerComment::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'english' => $this->faker->sentence(40),
            'french' => $this->faker->sentence(40),
        ];
    }
}
