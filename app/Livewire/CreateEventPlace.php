<?php

namespace App\Livewire;

use App\Helpers\BarDanceFloorTranslatorHelper;
use App\Helpers\BudgetsHelper;
use App\Helpers\ConveniencesTranslatorHelper;
use App\Helpers\EventsStaffTranslatorHelper;
use App\Helpers\FurnitureTranslatorHelper;
use App\Helpers\OtherServicesTranslatorHelper;
use App\Helpers\TechnicalEquipmentTranslatorHelper;
use App\Models\Advert;
use App\Models\EventPlace;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Illuminate\Contracts\View\View;
use Livewire\Component;


class CreateEventPlace extends Component implements HasForms
{
    use InteractsWithForms;

    public array $days;
    public array $timetable;
    public array $holidays;
    public $extension;
    public $extensionDescription;
    public $rate;
    public $rateType;
    public $rateTypeOther;
    public $budget;
    public $deposit;
    public $depositDescription;
    public $allowedPayments;
    public $cocktailCapacity;
    public $standingCapacity;
    public $outsideCapacity;
    public $hasParking;
    public $parkingCapacity;
    public $mobilityAccess;
    public $conferenceRooms;
    public $roomInstallations;
    public $roomCommodities;
    public $bringWine;
    public $bringWineDescription;
    public $bringFood;
    public $prepareMeal;
    public $furnitureEquipment;
    public $technicalEquipment;
    public $catererAffiliated;
    public $catererChoice;
    public $catererChoiceValues;
    public $catererAffiliatedValues;
    public $eventStaffValues;
    public $otherServicesValues;
    public $accommodation;
    public $sittingConfiguration;
    public $accommodationDescription;
    public $comments;
    public $technicalEquipmentMore;
    public $eventStaffValuesMore;
    public $otherServicesValuesMore;
    public $roomInstallationsMore;
    public $allowedPaymentsMore;


    public $workingDays;
    public $installations;
    public $commodities;
    public $furniture;
    public $technical;
    public $eventStaff;
    public $otherServices;

    public $advertId;
    public $partnerId;

    public function mount(int $advertId): void
    {
        $this->form->fill();
        $this->advertId = $advertId;
        $this->partnerId = auth()->user()->id_partner;

        $advert = Advert::where('id', $this->advertId)
            ->where('partners_info_id', auth()->user()->partnerInfo->id)
            ->first();
        if ($advert->status === Advert::STATUS_ACTIVE) {
            $eventPlace = EventPlace::where('id', $advert->service_id)->first();
            $this->days = json_decode($eventPlace->working_days);
            $this->timetable = json_decode($eventPlace->working_time, true);
            $this->holidays = json_decode($eventPlace->holidays, true);
            $this->extension = $eventPlace->extansion;
            $this->extensionDescription = $eventPlace->ext_true;
            $this->rate = $eventPlace->price;
            $this->rateType = $eventPlace->price_for;
            $this->budget = $eventPlace->budget;
            $this->deposit = $eventPlace->deposit != null ? 'yes' : 'no';
            $this->depositDescription = $eventPlace->deposit;
            $this->allowedPayments = json_decode($eventPlace->paymeny);
            $this->conferenceRooms = $eventPlace->room;
            $this->cocktailCapacity = $eventPlace->coctail;
            $this->standingCapacity = $eventPlace->banquet;
            $this->outsideCapacity = $eventPlace->outdoor;
            $this->hasParking = $eventPlace->car != null ? 'yes' : 'no';
            $this->parkingCapacity = $eventPlace->car;
            $this->mobilityAccess = $eventPlace->reduced_mob;
            $this->roomInstallations = json_decode($eventPlace->facilities);
            $this->roomCommodities = json_decode($eventPlace->convenience);
            $this->bringWine = $eventPlace->alcohole;
            $this->bringWineDescription = $eventPlace->alcohole_yes;
            $this->prepareMeal = $eventPlace->meals;
            $this->catererAffiliated = $eventPlace->affiliate_caterer;
            $this->catererAffiliatedValues = json_decode($eventPlace->yes_af_caterers, true);
            $this->catererChoice = $eventPlace->free_caterer;
            $this->catererChoiceValues = json_decode($eventPlace->yes_free_caterers, true);
            $this->bringFood = $eventPlace->ext_food;
            $this->furnitureEquipment = json_decode($eventPlace->furniture);
            $this->technicalEquipment = json_decode($eventPlace->equipment);
            $this->eventStaffValues = json_decode($eventPlace->staff);
            $this->accommodation = $eventPlace->accomodation;
            $this->otherServicesValues = json_decode($eventPlace->other_services);
            $this->comments = $eventPlace->comment;
            $this->accommodationDescription = $eventPlace->number_questrooms;
            $this->rateTypeOther = $eventPlace->price_for == 'other' ? $eventPlace->other_price : null;
            $this->technicalEquipmentMore = collect(json_decode($eventPlace->other_eq, true))->mapWithKeys(
                fn($item) => [$item => ['name' => $item]]
            )->toArray();

            $this->eventStaffValuesMore = collect(json_decode($eventPlace->other_staff, true))->mapWithKeys(
                fn($item) => [$item => ['name' => $item]]
            )->toArray();
            $this->otherServicesValuesMore = collect(json_decode($eventPlace->more_services, true))->mapWithKeys(
                fn($item) => [$item => ['name' => $item]]
            )->toArray();
            $this->sittingConfiguration = collect(json_decode($eventPlace->sitting, true))->mapWithKeys(
                fn($item) => [$item => ['sitting' => $item]]
            )->toArray();
            $this->allowedPaymentsMore = collect(json_decode($eventPlace->other_payment, true))->mapWithKeys(
                fn($item) => [$item => ['name' => $item]]
            )->toArray();
            $this->roomInstallationsMore = collect(json_decode($eventPlace->oth_facilities, true))->mapWithKeys(
                fn($item) => [$item => ['name' => $item]]
            )->toArray();


        }
    }

    public function boot(): void
    {
        $this->workingDays = collect(['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'])
            ->mapWithKeys(fn($day) => [$day => __('days.' . $day)]);

        $this->installations = collect(BarDanceFloorTranslatorHelper::$_items)
            ->mapWithKeys(fn($item) => [$item => BarDanceFloorTranslatorHelper::translate($item)]);


        $this->commodities = collect(ConveniencesTranslatorHelper::$_items)
            ->mapWithKeys(fn($item) => [$item => ConveniencesTranslatorHelper::translate($item)]);


        $this->furniture = collect(FurnitureTranslatorHelper::$_items)
            ->mapWithKeys(fn($item) => [$item => FurnitureTranslatorHelper::translate($item)]);

        $this->technical = collect(TechnicalEquipmentTranslatorHelper::$_items)
            ->mapWithKeys(fn($item) => [$item => TechnicalEquipmentTranslatorHelper::translate($item)]);

        $this->eventStaff = collect(EventsStaffTranslatorHelper::$_items)
            ->mapWithKeys(fn($item) => [$item => EventsStaffTranslatorHelper::translate($item)]);

        $this->otherServices = collect(OtherServicesTranslatorHelper::$_items)
            ->mapWithKeys(fn($item) => [$item => OtherServicesTranslatorHelper::translate($item)]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(__('partner.working_schedule'))
                    ->icon('heroicon-m-shopping-bag')
                    ->schema(
                        $this->scheduleForm()
                    )
                    ->columns(2),

                Section::make(__('partner.rates_conditions'))
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
                        (new FormService())->PaymentMethods(),
                    ]),
                Section::make(__('partner.service_general_info'))
                    ->columns(3)
                    ->schema([
                        Fieldset::make()
                            ->columns(2)
                            ->schema([
                                Repeater::make('conferenceRooms')
                                    ->label(__('partner.conference_room'))
                                    ->columns(2)
                                    ->schema([
                                        TextInput::make('name')
                                            ->type('text')
                                            ->required(),
                                        TextInput::make('capacity')->type('number')->numeric()->required(),
                                    ]),

                                CheckboxList::make('roomCommodities')
                                    ->required()
                                    ->label(__('partner.conveniences'))
                                    ->options($this->commodities)
                                    ->hint(__('partner.conveniences_expl'))
                                    ->bulkToggleable(),
                                CheckboxList::make('roomInstallations')
                                    ->required()
                                    ->columns(3)
                                    ->label(__('partner.Bar_dance_floor_stage'))
                                    ->options($this->installations)
                                    ->reactive()
                                    ->hint(__('partner.Bar_dance_floor_stage_expl'))
                                    ->bulkToggleable(),
                                Repeater::make('roomInstallationsMore')
                                    ->label(__('form.detail') . ' ' . strtolower(__('partner.Bar_dance_floor_stage')))
                                    ->reactive()
                                    ->hidden(fn(Get $get): bool => !in_array('other', $get('roomInstallations')))
                                    ->schema([
                                        TextInput::make('name')
                                            ->label(__('form.item'))
                                            ->type('text')
                                            ->required(),
                                    ]),
                            ]),
                        TextInput::make('cocktailCapacity')
                            ->required()
                            ->hintIcon('heroicon-o-information-circle')
                            ->hintIconTooltip(__('partner.cocktail_reception_capacity_expl'))
                            ->label(__('partner.cocktail_reception_capacity'))
                            ->type('number')
                            ->numeric(),

                        TextInput::make('standingCapacity')
                            ->required()
                            ->hintIcon('heroicon-o-information-circle')
                            ->hintIconTooltip(__('partner.banquet_capacity_expl'))
                            ->label(__('partner.banquet_capacity'))
                            ->type('number')
                            ->numeric(),

                        TextInput::make('outsideCapacity')
                            ->required()
                            ->hintIcon('heroicon-o-information-circle')
                            ->hintIconTooltip(__('partner.other_service_facilities_expl'))
                            ->label(__('partner.outdoor_facility'))
                            ->type('number')
                            ->numeric(),

                        Repeater::make('sittingConfiguration')
                            ->label(__('partner.sitting_schema'))
                            ->schema([
                                TextInput::make('sitting')
                                    ->numeric()
                                    ->label(__('form.table_capacity'))
                            ])->defaultItems(1),

                        Radio::make('hasParking')
                            ->required()
                            ->label(__('partner.car_park'))
                            ->reactive()
                            ->inline()
                            ->options([
                                'yes' => __('form.yes'),
                                'no' => __('form.no'),
                            ]),
                        TextInput::make('parkingCapacity')
                            ->label(__('partner.car_park_expl'))
                            ->numeric()
                            ->type('number')
                            ->hidden(fn(Get $get) => $get('hasParking') !== 'yes')
                            ->reactive(),

                        Fieldset::make()
                            ->columns(3)
                            ->schema([
                                Radio::make('mobilityAccess')
                                    ->required()
                                    ->label(__('partner.reduced_mobility_access'))
                                    ->inline()
                                    ->options([
                                        'yes' => __('form.yes'),
                                        'no' => __('form.no'),
                                        'partial' => __('partner.partial')
                                    ]),
                                Radio::make('bringWine')
                                    ->required()
                                    ->label(__('partner.bring_alcohol'))
                                    ->reactive()
                                    ->options([
                                        'yes' => __('form.yes'),
                                        'no' => __('form.no'),
                                    ])
                                    ->descriptions([
                                        'yes' => __('partner.bring_alcohol_expl'),
                                    ]),
                                TextInput::make('bringWineDescription')
                                    ->label(__('form.detail'))
                                    ->type('text')
                                    ->hidden(fn(Get $get) => $get('bringWine') !== 'yes')
                                    ->reactive(),

                            ])
                    ]),
                Section::make(__('partner.catering-stewardship'))
                    ->icon('heroicon-m-shopping-bag')
                    ->columns(2)
                    ->schema([
                        Fieldset::make()
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
                            ]),

                        Fieldset::make()
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
                            ]),

                        Fieldset::make()
                            ->columns(1)
                            ->schema([
                                CheckboxList::make('furnitureEquipment')
                                    ->required()
                                    ->label(__('partner.available_furniture_equipment'))
                                    ->options($this->furniture)
                                    ->columns(4)
                                    ->reactive()
                                    ->hintIcon('heroicon-o-information-circle')
                                    ->hintIconTooltip(__('partner.available_furniture_equipment_expl'))
                                    ->bulkToggleable(),
                            ]),

                        Fieldset::make()
                            ->columns(2)
                            ->schema([
                                CheckboxList::make('technicalEquipment')
                                    ->label(__('partner.technical_equipment'))
                                    ->options($this->technical)
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

                            ])
                    ]),

                Section::make(__('partner.other_services'))
                    ->icon('heroicon-m-shopping-bag')
                    ->columns(2)
                    ->schema([

                        Fieldset::make()
                            ->columns(2)
                            ->schema([
                                CheckboxList::make('eventStaffValues')
                                    ->required()
                                    ->label(__('partner.staff'))
                                    ->options($this->eventStaff)
                                    ->reactive()
                                    ->columns(2)
                                    ->bulkToggleable(),

                                CheckboxList::make('otherServicesValues')
                                    ->required()
                                    ->reactive()
                                    ->label(__('partner.other_services'))
                                    ->hint(__('partner.staf_expl'))
                                    ->options($this->otherServices)
                                    ->columns(2)
                                    ->bulkToggleable(),

                                Repeater::make('eventStaffValuesMore')
                                    ->label(__('form.detail') . ' ' . strtolower(__('partner.staff')))
                                    ->reactive()
                                    ->hidden(fn(Get $get): bool => !in_array('other', $get('eventStaffValues')))
                                    ->schema([
                                        TextInput::make('name')
                                            ->label(__('form.item'))
                                            ->type('text')
                                            ->required(),
                                    ]),
                                Repeater::make('otherServicesValuesMore')
                                    ->label(__('form.detail') . ' ' . strtolower(__('partner.other_services')))
                                    ->reactive()
                                    ->hidden(fn(Get $get): bool => !in_array('other', $get('otherServicesValues')))
                                    ->schema([
                                        TextInput::make('name')
                                            ->label(__('form.item'))
                                            ->type('text')
                                            ->required(),
                                    ]),
                            ]),

                        Fieldset::make()
                            ->columns(1)
                            ->schema([
                                Radio::make('accommodation')
                                    ->required()
                                    ->label(__('partner.accomodation'))
                                    ->inline()
                                    ->hint(__('partner.accomodation_expl'))
                                    ->reactive()
                                    ->options([
                                        'yes' => __('form.yes'),
                                        'not-available' => __('form.no'),
                                        'yes-nearby' => __('form.nearby')
                                    ]),
                                TextInput::make('accommodationDescription')
                                    ->label(__('form.detail'))
                                    ->numeric()
                                    ->hidden(fn(Get $get) => $get('accommodation') !== 'yes')
                                    ->reactive()
                            ])
                    ]),
                Section::make(__('partner.want_to_add_something'))
                    ->columns(1)
                    ->schema([
                        Textarea::make('comments')
                            ->required()
                            ->label(__('partner.your_comment'))
                            ->hint(__('partner.want_to_add_something_expl'))
                            ->maxLength(1024)
                    ])
            ]);


    }

    private function scheduleForm(): array
    {
        return [
            Fieldset::make()
                ->columns(1)
                ->schema([
                    CheckboxList::make('days')
                        ->required()
                        ->label(__('partner.working_days'))
                        ->options($this->workingDays)
                        ->gridDirection('row')
                        ->columns(7)
                        ->bulkToggleable(),
                ]),

            Repeater::make('timetable')
                ->label(__('partner.working_schedule'))
                ->columns(3)
                ->schema([
                    TextInput::make('open')
                        ->type('time')
                        ->required(),
                    TextInput::make('close')->type('time')->required(),
                    TextInput::make('description')->type('text')->required(),
                ]),
            Repeater::make('holidays')
                ->label(__('partner.annual_holidays'))
                ->columns(2)
                ->schema([
                    DatePicker::make('start')
                        ->native(false)
                        ->required(),
                    DatePicker::make('end')
                        ->native(false)
                        ->required(),
                ]),

            Fieldset::make()
                ->columns(1)
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

                ]),


        ];
    }

    public function submit(): void
    {

        $advert = Advert::where('id', $this->advertId)
            ->where('partners_info_id', auth()->user()->partnerInfo->id)
            ->first();

        $eventPlace = EventPlace::where('id', $advert->service_id)->first();
        $data = $this->form->getState();

        if ($eventPlace) {
            $item = $eventPlace;
        } else {
            $item = new EventPlace();
        }
        $item->id_partner = $this->partnerId;
        $item->working_days = json_encode($data['days']);
        $item->opening = $data['timetable'][0]['open'];
        $item->closing = $data['timetable'][0]['close'];
        $item->working_time = json_encode($data['timetable']);
        $item->holidays = json_encode($data['holidays']);
        $item->extansion = $data['extension'];
        $item->ext_true = $data['extensionDescription'];
        $item->price = $data['rate'];
        $item->price_for = $data['rateType'];
        $item->paymeny = json_encode($data['allowedPayments']);
        $item->deposit = $data['deposit'] === 'no' ? 'Non' : $data['depositDescription'];
        $item->coctail = $data['cocktailCapacity'];
        $item->banquet = $data['standingCapacity'];
        $item->outdoor = $data['outsideCapacity'];
        $item->sitting = json_encode(array_column($data['sittingConfiguration'], 'sitting'));
        $item->room = $data['conferenceRooms'];
        $item->reduced_mob = $data['mobilityAccess'];
        $item->car = $data['hasParking'] === 'yes' ? $data['parkingCapacity'] : null;
        $item->facilities = json_encode($data['roomInstallations']);
        $item->convenience = json_encode($data['roomCommodities']);
        $item->alcohole = $data['bringWine'];
        $item->alcohole_yes = $data['bringWine'] == 'yes' ? $data['bringWineDescription'] : null;
        $item->meals = $data['prepareMeal'];
        $item->affiliate_caterer = $data['catererAffiliated'];
        $item->yes_af_caterers = $data['catererAffiliated'] == 'yes' ? json_encode($data['catererAffiliatedValues']) : null;
        $item->free_caterer = $data['catererChoice'];
        $item->yes_free_caterers = $data['catererChoice'] == 'yes' ? json_encode($data['catererChoiceValues']) : null;
        $item->ext_food = $data['bringFood'];
        $item->furniture = json_encode($data['furnitureEquipment']);
        $item->equipment = json_encode($data['technicalEquipment']);
        $item->staff = json_encode($data['eventStaffValues']);
        $item->accomodation = $data['accommodation'];
        $item->other_services = json_encode($data['otherServicesValues']);
        $item->comment = $data['comments'];
        $item->number_questrooms = $data['accommodationDescription'];
        $item->budget = $data['budget'];

        $item->oth_facilities = isset($data['roomInstallationsMore']) ? json_encode(array_column($data['roomInstallationsMore'], 'name')) : null;
        $item->other_eq = isset($data['technicalEquipmentMore']) ? json_encode(array_column($data['technicalEquipmentMore'], 'name')) : null;
        $item->other_staff = isset($data['eventStaffValuesMore']) ? json_encode(array_column($data['eventStaffValuesMore'], 'name')) : null;
        $item->more_services = isset($data['otherServicesValuesMore']) ? json_encode(array_column($data['otherServicesValuesMore'], 'name')) : null;
        $item->other_payment = isset($data['allowedPaymentsMore']) ? json_encode(array_column($data['allowedPaymentsMore'], 'name')) : null;
        $item->other_price = $data['rateTypeOther'];
        $item->save();

        $advert->status = Advert::STATUS_ACTIVE;
        $item->advert()->save($advert);
    }

    public function render(): View
    {
        return view('livewire.create-event-place');
    }
}
