<?php

namespace Database\Factories;

use App\Models\CompanyStatistic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CompanyStatistic>
 */
class CompanyStatisticFactory extends Factory
{

    public function definition(): array
    {
        $max = 1000;

        return [
            'email' => rand(0, $max),
            'phone' => rand(0, $max),
            'requests' => rand(0, $max),
            'website' => rand(0, $max),
            'address' => rand(0, $max),
            'instagram' => rand(0, $max),
            'facebook' => rand(0, $max),
            'youtube' => rand(0, $max),
            'twitter' => rand(0, $max),
            'linkedin' => rand(0, $max),
            'vimeo' => rand(0, $max),
        ];
    }
}
