<?php


namespace App\Services;

use App\Helpers\BudgetsHelper;
use App\Helpers\PaymentMethodsTranslatorHelper;
use App\Interfaces\IFormService;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;

class FormService implements IFormService
{
    public function __construct()
    {
    }

    public function Timetable(): Repeater
    {
        return Repeater::make('timetable')
            ->label(__('partner.working_schedule'))
            ->columns(3)
            ->schema([
                TextInput::make('open')
                    ->type('time')
                    ->required(),
                TextInput::make('close')->type('time')->required(),
                TextInput::make('description')->type('text')->required(),
            ]);
    }

    public function Budget(): Fieldset
    {
        return Fieldset::make()
            ->columns(3)
            ->schema([
                Select::make('budget')
                    ->required()
                    ->label(__('partner.budget'))
                    ->options(BudgetsHelper::$_budgets)
                    ->native(false),
                Radio::make('deposit')
                    ->required()
                    ->label(__('partner.booking_deposit'))
                    ->options([
                        'yes' => __('form.yes'),
                        'no' => __('form.no'),
                    ])
                    ->descriptions([
                        'yes' => __('partner.booking_deposit_expl'),
                    ])->reactive(),
                TextInput::make('depositDescription')
                    ->label(__('form.detail'))
                    ->type('text')
                    ->hidden(fn(Get $get) => $get('deposit') !== 'yes')
                    ->reactive(),
            ]);
    }

    public function Rates(): Fieldset
    {
        return Fieldset::make()
            ->columns(3)
            ->schema([
                TextInput::make('rate')
                    ->required()
                    ->label(__('partner.price'))
                    ->numeric()
                    ->prefixIcon('heroicon-o-currency-dollar')
                    ->hint(__('partner.price_expl'))
                    ->type('number'),
                Select::make('rateType')
                    ->required()
                    ->label(__('form.rate_type'))
                    ->reactive()
                    ->options([
                        'space_rental_price_per_hour' => ucfirst(__('partner.space_rental_price_per_hour')),
                        'fixed_price_per_person' => ucfirst(__('partner.fixed_price_per_person')),
                        'flat_rate_for_service' => ucfirst(__('partner.flat_rate_for_service')),
                        'other' => __('become_partner.other')
                    ])->native(false),
                TextInput::make('rateTypeOther')
                    ->label(__('become_partner.other'))
                    ->type('text')
                    ->hidden(fn(Get $get) => $get('rateType') !== 'other')
                    ->reactive(),
            ]);

    }

    public function Holidays(): Repeater
    {
        return Repeater::make('holidays')
            ->label(__('partner.annual_holidays'))
            ->columns(2)
            ->schema([
                DatePicker::make('start')
                    ->native(false)
                    ->required(),
                DatePicker::make('end')
                    ->native(false)
                    ->required(),
            ]);
    }

    public function WorkingDays(): Fieldset
    {
        $workingDays = collect(['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'])
            ->mapWithKeys(fn($day) => [$day => __('days.' . $day)]);

        return Fieldset::make()
            ->columns(1)
            ->schema([
                CheckboxList::make('days')
                    ->required()
                    ->label(__('partner.working_days'))
                    ->options($workingDays)
                    ->gridDirection('row')
                    ->columns(7)
                    ->bulkToggleable()
            ]);
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
