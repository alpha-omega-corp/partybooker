<?php

namespace Database\Factories;

use App\Models\Advert;
use App\Models\Notification;
use App\Models\RequestHelp;
use App\Models\RequestPartner;
use App\Models\RequestService;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Notification>
 */
class NotificationFactory extends Factory
{
    protected $model = Notification::class;

    public function definition(): array
    {
        return [
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'message' => $this->faker->text,
            'is_resolved' => false,
        ];
    }

    public function partnership(): NotificationFactory
    {
        return $this->state(function () {
            return [
                'requestable_id' => RequestPartner::factory(),
                'requestable_type' => RequestPartner::class,
            ];
        });
    }

    public function help(): NotificationFactory
    {
        return $this->state(function () {
            return [
                'requestable_id' => RequestHelp::factory(),
                'requestable_type' => RequestHelp::class,
            ];
        });
    }

    public function service(Advert $advert): NotificationFactory
    {
        return $this->state(function () use ($advert) {
            return [
                'requestable_id' => RequestService::factory()->for($advert),
                'requestable_type' => RequestService::class,
            ];
        });
    }

}
