<?php


namespace App\Livewire;

use App\Helpers\BudgetsHelper;
use App\Helpers\FurnitureTranslatorHelper;
use App\Helpers\PaymentMethodsTranslatorHelper;
use App\Helpers\TechnicalEquipmentTranslatorHelper;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;

class FormService implements IFormService
{
    public function __construct()
    {
    }

    public function CommentSection(): Section
    {
        return Section::make(__('partner.want_to_add_something'))
            ->schema([
                Textarea::make('comment')
                    ->required()
                    ->label(__('partner.your_comment'))
                    ->hint(__('partner.want_to_add_something_expl'))
                    ->maxLength(1024)
            ]);
    }

    public function Stewardship(): Fieldset
    {
        return Fieldset::make()
            ->columns(4)
            ->schema([
                Radio::make('bringFood')
                    ->required()
                    ->label(__('partner.external_food_allowed'))
                    ->reactive()
                    ->options([
                        'yes' => __('form.yes'),
                        'no' => __('form.no'),
                    ]),
                Radio::make('prepareMeal')
                    ->required()
                    ->label(__('partner.property_prepare_meals'))
                    ->reactive()
                    ->options([
                        'yes' => __('form.yes'),
                        'no' => __('form.no'),
                    ]),
                Radio::make('catererChoice')
                    ->required()
                    ->label(__('partner.free_choice_of_caterer'))
                    ->reactive()
                    ->options([
                        'yes' => __('form.yes'),
                        'no' => __('form.no'),
                    ]),
                Radio::make('catererAffiliated')
                    ->required()
                    ->label(__('partner.works_with_affiliated_partners'))
                    ->reactive()
                    ->options([
                        'yes' => __('form.yes'),
                        'no' => __('form.no'),
                    ]),
            ]);
    }

    public function StewardshipExtra(): Fieldset
    {
        return Fieldset::make()
            ->hidden(fn(Get $get) => $get('catererChoice') !== 'yes' && $get('catererAffiliated') !== 'yes')
            ->schema([
                Repeater::make('catererAffiliatedValues')
                    ->label(__('form.detail') . ' ' . strtolower(__('partner.works_with_affiliated_partners')))
                    ->columns(2)
                    ->hidden(fn(Get $get) => $get('catererAffiliated') !== 'yes')
                    ->reactive()
                    ->schema([
                        TextInput::make('name')
                            ->type('text')
                            ->required(),
                        TextInput::make('url')->type('text')->required(),
                    ])->defaultItems(1),
                Repeater::make('catererChoiceValues')
                    ->label(__('form.detail') . ' ' . strtolower(__('partner.free_choice_of_caterer')))
                    ->columns(2)
                    ->hidden(fn(Get $get) => $get('catererChoice') !== 'yes')
                    ->reactive()
                    ->schema([
                        TextInput::make('name')
                            ->type('text')
                            ->required(),
                        TextInput::make('url')->type('text')->required(),
                    ])->defaultItems(1),
            ]);
    }

    public function TechnicalEquipment(): Fieldset
    {
        $technical = collect(TechnicalEquipmentTranslatorHelper::$_items)
            ->mapWithKeys(fn($item) => [$item => TechnicalEquipmentTranslatorHelper::translate($item)]);

        return Fieldset::make()
            ->columns(2)
            ->schema([
                CheckboxList::make('technicalEquipment')
                    ->label(__('partner.technical_equipment'))
                    ->options($technical)
                    ->columns(3)
                    ->hintIcon('heroicon-o-information-circle')
                    ->hintIconTooltip(__('partner.technical_equipment_expl'))
                    ->reactive()
                    ->bulkToggleable(),

                Repeater::make('technicalEquipmentMore')
                    ->label(__('form.detail') . ' ' . strtolower(__('partner.available_furniture_equipment')))
                    ->reactive()
                    ->hidden(fn(Get $get): bool => !in_array('other', $get('technicalEquipment')))
                    ->schema([
                        TextInput::make('name')
                            ->label(__('form.item'))
                            ->type('text')
                            ->required(),
                    ]),
            ]);
    }

    public function Furniture(): Fieldset
    {
        $furniture = collect(FurnitureTranslatorHelper::$_items)
            ->mapWithKeys(fn($item) => [$item => FurnitureTranslatorHelper::translate($item)]);

        return Fieldset::make()->schema([
            CheckboxList::make('furnitureEquipment')
                ->required()
                ->label(__('partner.available_furniture_equipment'))
                ->options($furniture)
                ->columns(4)
                ->reactive()
                ->hintIcon('heroicon-o-information-circle')
                ->hintIconTooltip(__('partner.available_furniture_equipment_expl'))
                ->bulkToggleable(),
            Repeater::make('furnitureEquipmentMore')
                ->label(__('form.detail') . ' ' . strtolower(__('partner.available_furniture_equipment')))
                ->reactive()
                ->hidden(fn(Get $get): bool => !in_array('other', $get('furnitureEquipment')))
                ->schema([
                    TextInput::make('name')
                        ->label(__('form.item'))
                        ->type('text')
                        ->required(),
                ]),
        ]);
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

    public function Extension(): Fieldset
    {
        return Fieldset::make()
            ->columns(2)
            ->schema([
                Radio::make('extension')
                    ->required()
                    ->label(__('partner.possibility_extend_time'))
                    ->options([
                        'yes' => __('form.yes'),
                        'no' => __('form.no'),
                    ])
                    ->descriptions([
                        'yes' => __('partner.possibility_extend_time_expl'),
                    ])->reactive(),
                TextInput::make('extensionDescription')
                    ->label(__('partner.extansion'))
                    ->type('text')
                    ->hidden(fn(Get $get) => $get('extension') !== 'yes')
                    ->reactive()
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


    public function PaymentMethods(): Fieldset
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
