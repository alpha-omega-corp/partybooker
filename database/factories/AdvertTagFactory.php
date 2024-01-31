<?php

namespace Database\Factories;

use App\Enums\CategoryType;
use App\Models\AdvertTag;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AdvertTag>
 */
class AdvertTagFactory extends Factory
{
    public function definition(): array
    {
        return [
            //
        ];
    }

    public function event(): self
    {
        return $this->state(function () {
            return [
                'category_child_id' => $this->tag(CategoryType::EVENT),
            ];
        });
    }

    private function tag(CategoryType $type): int
    {
        $category = Category::where('service', $type->value)->firstOrFail();
        return $this->faker->randomElement($category->categoryChildren->pluck('id')->toArray());
    }

    public function wine(): self
    {
        return $this->state(function () {
            return [
                'category_child_id' => $this->tag(CategoryType::WINE),
            ];
        });
    }
}
