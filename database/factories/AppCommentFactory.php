<?php

namespace Database\Factories;

use App\Enums\Language;
use App\Models\AppComment;
use App\Models\AppCommentLocale;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;

/**
 * @extends Factory<AppComment>
 */
class AppCommentFactory extends Factory
{
    protected $model = AppComment::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
        ];
    }

    public function configure(): AppCommentFactory
    {
        return $this->afterCreating(function (AppComment $comment) {
            AppCommentLocale::factory()
                ->for($comment, 'comment')
                ->count(2)
                ->sequence(fn(Sequence $sequence) => [
                    'lang' => $sequence->index == 0
                        ? Language::EN->value
                        : Language::FR->value
                ])
                ->create();
        });
    }
}
