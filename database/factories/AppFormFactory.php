<?php

namespace Database\Factories;

use App\Enums\FormType;
use App\Models\AppForm;
use App\Models\AppFormLocale;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;

/**
 * @extends Factory<AppForm>
 */
class AppFormFactory extends Factory
{
    protected $model = AppForm::class;

    public function definition(): array
    {
        return [
            //
        ];
    }

    public function configure(): AppFormFactory
    {
        return $this->afterCreating(function (AppForm $form) {
            AppFormLocale::factory()
                ->for($form, 'form')
                ->count(2)
                ->sequence(fn(Sequence $sequence) => [
                    'lang' => $sequence->index == 0 ? 'en' : 'fr'
                ])
                ->create();
        });
    }

    public function serviceCaterer(): AppFormFactory
    {
        return $this->state(function () {
            return [
                'type' => FormType::SERVICE_CATERER->name,
            ];
        })->count(10);
    }

    public function serviceEntertainment(): AppFormFactory
    {
        return $this->state(function () {
            return [
                'type' => FormType::SERVICE_ENTERTAINMENT->name,
            ];
        })->count(10);
    }

    public function serviceEquipment(): AppFormFactory
    {
        return $this->state(function () {
            return [
                'type' => FormType::SERVICE_EQUIPMENT->name,
            ];
        })->count(10);
    }

    public function serviceEvent(): AppFormFactory
    {
        return $this->state(function () {
            return [
                'type' => FormType::SERVICE_EVENT->name,
            ];
        })->count(10);
    }


    public function serviceWine(): AppFormFactory
    {
        return $this->state(function () {
            return [
                'type' => FormType::SERVICE_WINE->name,
            ];
        })->count(10);
    }

    public function payments(): AppFormFactory
    {
        return $this->state(function () {
            return [
                'type' => FormType::PAYMENT->name,
            ];
        })->count(5);
    }

    public function furniture(): AppFormFactory
    {
        return $this->state(function () {
            return [
                'type' => FormType::FURNITURE->name,
            ];
        })->count(10);
    }

    public function staff(): AppFormFactory
    {
        return $this->state(function () {
            return [
                'type' => FormType::STAFF->name,
            ];
        })->count(8);
    }

    public function decoration(): AppFormFactory
    {
        return $this->state(function () {
            return [
                'type' => FormType::DECORATION->name,
            ];
        })->count(10);
    }

    public function dishes(): AppFormFactory
    {
        return $this->state(function () {
            return [
                'type' => FormType::DISH->name,
            ];
        })->count(10);
    }

    public function installations(): AppFormFactory
    {
        return $this->state(function () {
            return [
                'type' => FormType::INSTALLATION->name,
            ];
        })->count(5);
    }

    public function delivery(): AppFormFactory
    {
        return $this->state(function () {
            return [
                'type' => FormType::DELIVERY->name,
            ];
        })->count(3);
    }

    public function kitchen(): AppFormFactory
    {
        return $this->state(function () {
            return [
                'type' => FormType::KITCHEN->name,
            ];
        })->count(8);
    }

    public function technical(): AppFormFactory
    {
        return $this->state(function () {
            return [
                'type' => FormType::TECHNICAL->name,
            ];
        })->count(5);
    }

    public function food(): AppFormFactory
    {
        return $this->state(function () {
            return [
                'type' => FormType::FOOD->name,
            ];
        })->count(3);
    }
}
