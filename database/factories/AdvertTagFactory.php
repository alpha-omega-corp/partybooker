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
                'category_tag_id' => $this->tag(CategoryType::EVENT),
            ];
        });
    }

    private function tag(CategoryType $type): int
    {
        $category = Category::where('service', $type->value)->firstOrFail();
        return $this->faker->randomElement($category->children()->pluck('id')->toArray());
    }

    public function wine(): self
    {
        return $this->state(function () {
            return [
                'category_tag_id' => $this->tag(CategoryType::WINE),
            ];
        });
    }

    public function caterer(): self
    {
        return $this->state(function () {
            return [
                'category_tag_id' => $this->tag(CategoryType::CATERER),
            ];
        });
    }

    public function entertainment(): self
    {
        return $this->state(function () {
            return [
                'category_tag_id' => $this->tag(CategoryType::ENTERTAINMENT),
            ];
        });
    }

    public function equipment(): self
    {
        return $this->state(function () {
            return [
                'category_tag_id' => $this->tag(CategoryType::EQUIPMENT),
            ];
        });
    }
}
