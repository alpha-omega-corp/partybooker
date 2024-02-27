<?php

namespace App\Livewire;

use App\Models\Advert;
use App\Models\Partner;
use App\Models\ServiceWine;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CreateWine extends Component implements HasForms
{
    use InteractsWithForms;

    public $days;
    public $timetable;
    public $flexOpening;
    public $holidays;
    public $extension;
    public $extensionDescription;
    public $rate;
    public $rateType;
    public $rateTypeOther;
    public $allowedPayments;
    public $allowedPaymentsMore;
    public $deposit;
    public $depositDescription;
    public $activities;
    public $participants;
    public $affiliations;
    public $wines;
    public $articles;
    public $budget;
    public $furnitureEquipment;
    public $furnitureEquipmentMore;
    public $technicalEquipment;
    public $technicalEquipmentMore;
    public $prepareMeal;
    public $bringFood;
    public $catererChoice;
    public $catererChoiceValues;
    public $catererAffiliated;
    public $catererAffiliatedValues;
    public $comment;


    public $advertId;
    public $partnerId;
    public $partnerInfoId;

    public function mount(string $partnerId, int $advertId): void
    {
        $this->form->fill();
        $this->advertId = $advertId;
        $this->partnerId = $partnerId;
        $partner = Partner::where('id_partner', $this->partnerId)->first();
        $this->partnerInfoId = $partner->id;

        $advert = Advert::where('id', $this->advertId)
            ->where('partners_info_id', $this->partnerInfoId)
            ->first();

        if ($advert->status === Advert::STATUS_ACTIVE) {
            $wine = ServiceWine::where('id', $advert->service_id)->first();
            $this->days = json_decode($wine->working_days, true);
            $this->timetable = json_decode($wine->working_time, true);
            $this->flexOpening = $wine->opening_upon;
            $this->holidays = json_decode($wine->holidays, true);
            $this->extension = $wine->extansion;
            $this->extensionDescription = $wine->ext_true;
            $this->rate = $wine->price;
            $this->rateType = $wine->price_for;
            $this->rateTypeOther = $wine->other_price;
            $this->allowedPayments = json_decode($wine->paymeny, true);
            $this->allowedPaymentsMore = json_decode($wine->other_payment, true);
            $this->deposit = $wine->deposit != null ? 'yes' : 'no';
            $this->depositDescription = $wine->deposit;
            $this->activities = json_decode($wine->service, true);
            $this->participants = json_decode($wine->participant, true);
            $this->affiliations = json_decode($wine->affiliation, true);
            $this->wines = json_decode($wine->wine, true);
            $this->articles = json_decode($wine->article, true);
            $this->budget = $wine->budget;
            $this->technicalEquipment = json_decode($wine->equipment, true);
            $this->furnitureEquipment = json_decode($wine->furniture);

            $this->furnitureEquipmentMore = collect(json_decode($wine->other_furniture, true))->mapWithKeys(
                fn($item) => [$item => ['name' => $item]]
            )->toArray();
            $this->technicalEquipmentMore = collect(json_decode($wine->other_equipment, true))->mapWithKeys(
                fn($item) => [$item => ['name' => $item]]
            )->toArray();

            $this->prepareMeal = $wine->food_on_site;
            $this->bringFood = $wine->yes_food;
            $this->catererChoice = $wine->catering;
            $this->catererChoiceValues = json_decode($wine->caterer_aff, true);
            $this->catererAffiliated = $wine->caterers_aff != null ? 'yes' : 'no';
            $this->catererAffiliatedValues = json_decode($wine->caterers_aff, true);
            $this->comment = $wine->comment;

        }
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(__('partner.working_schedule'))
                    ->columns(2)
                    ->schema([
                        (new FormService())->WorkingDays(),
                        (new FormService())->Extension(),
                        Fieldset::make()
                            ->schema([
                                Radio::make('flexOpening')
                                    ->required()
                                    ->inline()
                                    ->label(__('partner.opening_upon_appointment'))
                                    ->options([
                                        'yes' => __('form.yes'),
                                        'no' => __('form.no'),
                                    ])
                            ]),
                        (new FormService())->Timetable(),
                        (new FormService())->Holidays(),
                    ]),
                Section::make(__('partner.rates_conditions'))
                    ->schema([
                        (new FormService())->Rates(),
                        (new FormService())->Budget(),
                        (new FormService())->PaymentMethods(),
                    ]),
                Section::make(__('partner.service_general_info'))
                    ->schema([
                        Fieldset::make()
                            ->columns(3)
                            ->schema([
                                Repeater::make('activities')
                                    ->label(ucfirst(__('partner.service_or_activity_name')))
                                    ->hintIcon('heroicon-o-information-circle')
                                    ->hintIconTooltip(ucfirst(__('partner.service_or_activity_name_expl')))
                                    ->columns(2)
                                    ->schema([
                                        TextInput::make('name')
                                            ->label('AdvertService')
                                            ->required(),
                                        TextInput::make('description')
                                            ->required(),
                                    ]),
                                Repeater::make('participants')
                                    ->columns(3)
                                    ->required()
                                    ->schema([
                                        TextInput::make('name')
                                            ->label(__('partner.space_name'))
                                            ->required(),
                                        TextInput::make('max')
                                            ->label(__('form.guests') . ' Maximum')
                                            ->numeric()
                                            ->required(),
                                        TextInput::make('min')
                                            ->label(__('form.guests') . ' Minimum')
                                            ->numeric()
                                            ->required(),
                                    ]),
                                Repeater::make('affiliations')
                                    ->columns(2)
                                    ->schema([
                                        TextInput::make('name')
                                            ->label(__('partner.name'))
                                            ->required(),
                                        TextInput::make('url')
                                            ->label('Url')
                                            ->url()
                                            ->required(),
                                    ]),
                            ]),

                        Fieldset::make()
                            ->columns(2)
                            ->schema([
                                Repeater::make('wines')
                                    ->columns(3)
                                    ->label(__('partner.wine'))
                                    ->hintIcon('heroicon-o-information-circle')
                                    ->hintIconTooltip(__('partner.wine_expl'))
                                    ->schema([
                                        TextInput::make('name')
                                            ->label(__('partner.wine_name'))
                                            ->required(),
                                        TextInput::make('price')
                                            ->label(__('partner.price'))
                                            ->numeric()
                                            ->required(),
                                        TextInput::make('description')
                                            ->required(),
                                        Fieldset::make()
                                            ->columns(2)
                                            ->schema([
                                                Radio::make('rewards')
                                                    ->label(__('partner.rewards'))
                                                    ->inline()
                                                    ->required()
                                                    ->reactive()
                                                    ->options([
                                                        'gold' => __('partner.GOLD'),
                                                        'silver' => __('partner.SILVER'),
                                                        'bronze' => __('partner.BRONZE'),
                                                        'no' => __('partner.no'),
                                                    ])->default('no'),
                                                TextInput::make('rewardName')
                                                    ->label(__('partner.contest_name'))
                                                    ->reactive()
                                                    ->hidden(fn(Get $get) => $get('rewards') === 'no')
                                            ])
                                    ]),
                                FileUpload::make('articles')
                                    ->multiple()
                                    ->directory('articles')
                                    ->acceptedFileTypes([
                                        'pdf',
                                        'image/*',
                                    ]),
                            ]),
                        Fieldset::make()
                            ->columns(2)
                            ->schema([
                                (new FormService())->Furniture(),
                                (new FormService())->TechnicalEquipment(),
                            ])
                    ]),
                Section::make(__('partner.food_services_info'))
                    ->schema([
                        (new FormService())->Stewardship(),
                        (new FormService())->StewardshipExtra(),
                    ]),
                (new FormService())->CommentSection(),
            ]);
    }

    public function submit(): void
    {
        $advert = Advert::where('id', $this->advertId)
            ->where('partners_info_id', $this->partnerInfoId)
            ->first();

        $wine = ServiceWine::where('id', $advert->service_id)->first();
        $data = $this->form->getState();

        if ($wine) {
            $item = $wine;
        } else {
            $item = new ServiceWine();
        }

        $item->id_partner = $this->partnerId;
        $item->working_days = json_encode($data['days']);
        $item->opening = $data['timetable'][0]['open'];
        $item->closing = $data['timetable'][0]['close'];
        $item->working_time = json_encode($data['timetable']);
        $item->opening_upon = $data['flexOpening'];
        $item->holidays = json_encode($data['holidays']);
        $item->extansion = $data['extension'];
        $item->ext_true = $data['extension'] === 'yes' ? $data['extensionDescription'] : null;
        $item->price = $data['rate'];
        $item->price_for = $data['rateType'];
        $item->paymeny = json_encode($data['allowedPayments']);
        $item->deposit = $data['deposit'] === 'no' ? 'Non' : $data['depositDescription'];
        $item->service = json_encode($data['activities']);
        $item->participant = json_encode($data['participants']);
        $item->affiliation = json_encode($data['affiliations']);
        $item->wine = json_encode($data['wines']);
        $item->budget = $data['budget'];
        $item->article = json_encode($data['articles']);
        $item->furniture = json_encode($data['furnitureEquipment']);
        $item->equipment = json_encode($data['technicalEquipment']);
        $item->food_on_site = $data['prepareMeal'];
        $item->yes_food = $data['bringFood'];
        $item->catering = $data['catererChoice'];
        $item->caterer_aff = $data['catererChoice'] == 'yes' ? json_encode($data['catererChoiceValues']) : null;
        $item->caterers_aff = $data['catererAffiliated'] == 'yes' ? json_encode($data['catererAffiliatedValues']) : null;
        $item->other_furniture = isset($data['furnitureEquipmentMore']) ? json_encode(array_column($data['furnitureEquipmentMore'], 'name')) : null;
        $item->other_equipment = isset($data['technicalEquipmentMore']) ? json_encode(array_column($data['technicalEquipmentMore'], 'name')) : null;
        $item->other_payment = isset($data['allowedPaymentsMore']) ? json_encode(array_column($data['allowedPaymentsMore'], 'name')) : null;
        $item->other_price = $data['rateTypeOther'] ?? null;
        $item->comment = $data['comment'];

        $item->save();

        $advert->status = Advert::STATUS_ACTIVE;
        $advert->service_id = $item->id;
        $item->advert()->save($advert);
    }

    public function render(): View
    {
        return view('livewire.wine');
    }
}
