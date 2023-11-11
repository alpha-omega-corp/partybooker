<?php


namespace App\Services;

use App\Helpers\PaymentMethodsTranslatorHelper;
use App\Interfaces\IFormService;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Illuminate\Support\Collection;

class FormService implements IFormService
{
    private Collection $paymentMethods;

    public function __construct()
    {
    }


    public function PaymentFieldset(): Fieldset
    {
        $paymentMethods = collect(PaymentMethodsTranslatorHelper::$_methods)
            ->mapWithKeys(fn($method) => [$method => PaymentMethodsTranslatorHelper::translate($method)]);

        return Fieldset::make()
            ->columns(1)
            ->schema([
                CheckboxList::make('allowedPayments')
                    ->required()
                    ->label(__('partner.payment_methods'))
                    ->options($paymentMethods)
                    ->gridDirection('row')
                    ->columns(4)
                    ->reactive()
                    ->hint(__('partner.payment_methods_expl'))
                    ->bulkToggleable(),

                Repeater::make('allowedPaymentsMore')
                    ->label(__('form.detail') . ' ' . strtolower(__('partner.payment_methods')))
                    ->reactive()
                    ->hidden(fn(Get $get): bool => !in_array('other', $get('allowedPayments')))
                    ->schema([
                        TextInput::make('name')
                            ->label(__('form.item'))
                            ->type('text')
                            ->required(),
                    ]),
            ]);
    }
}
