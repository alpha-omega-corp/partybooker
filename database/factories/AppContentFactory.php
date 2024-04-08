<?php

namespace Database\Factories;

use App\Enums\AppContentType;
use App\Enums\Language;
use App\Models\AppContent;
use App\Models\AppContentLocale;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;

/**
 * @extends Factory<AppContent>
 */
class AppContentFactory extends Factory
{
    protected $model = AppContent::class;

    public function definition(): array
    {
        return [
            //
        ];
    }

    public function configure(): AppContentFactory
    {
        return $this->afterCreating(function (AppContent $content) {
            AppContentLocale::factory()
                ->for($content, 'content')
                ->count(2)
                ->sequence(fn(Sequence $sequence) => [
                    'lang' => $sequence->index == 0
                        ? Language::EN->value
                        : Language::FR->value
                ])
                ->create();
        });
    }


    public function userTerms(): AppContentFactory
    {
        return $this->state(function () {
            return [
                'type' => AppContentType::USER_TERMS->name,
            ];
        });
    }

    public function serviceTerms(): AppContentFactory
    {
        return $this->state(function () {
            return [
                'type' => AppContentType::SERVICE_TERMS->name,
            ];
        });
    }

    public function appAbout(): AppContentFactory
    {
        return $this->state(function () {
            return [
                'type' => AppContentType::APP_ABOUT->name,
            ];
        });
    }

    public function appConcept(): AppContentFactory
    {
        return $this->state(function () {
            return [
                'type' => AppContentType::APP_CONCEPT->name,
            ];
        });
    }

    public function appHome(): AppContentFactory
    {
        return $this->state(function () {
            return [
                'type' => AppContentType::APP_HOME->name,
            ];
        });
    }


}
