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
            'phone' => $this->faker->phoneNumber,
            'message' => $this->faker->text,
            'is_resolved' => false,
        ];
    }

    public function partnership(): NotificationFactory
    {
        return $this->state(function () {
            return [
                'notifiable_id' => RequestPartner::factory(),
                'notifiable_type' => RequestPartner::class,
            ];
        });
    }

    public function help(): NotificationFactory
    {
        return $this->state(function () {
            return [
                'notifiable_id' => RequestHelp::factory(),
                'notifiable_type' => RequestHelp::class,
            ];
        });
    }

    public function service(Advert $advert): NotificationFactory
    {
        return $this->state(function () use ($advert) {
            return [
                'notifiable_id' => RequestService::factory()->for($advert),
                'notifiable_type' => RequestService::class,
            ];
        });
    }

}
