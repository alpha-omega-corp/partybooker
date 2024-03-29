<?php

namespace App\Livewire;

use App\Models\Advert;
use App\Models\Partner;
use App\Models\ServiceEquipment;
use App\Services\FormService;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CreateEquipment extends Component implements HasForms
{
    use InteractsWithForms;

    public $days;
    public $timetable;
    public $holidays;
    public $extension;
    public $extensionDescription;
    public $rate;
    public $rateType;
    public $rateTypeOther;
    public $budget;
    public $deposit;
    public $depositDescription;
    public $allowedPayments;
    public $allowedPaymentsMore;
    public $deliveryCharge;
    public $extraCharge;
    public $geoLimitations;
    public $servicesMore;
    public $equipmentMore;
    public $referencesMore;
    public $expensesMore;
    public $canDeliver;
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
            $equipment = ServiceEquipment::where('id', $advert->service_id)->first();
            $this->days = json_decode($equipment->working_days);
            $this->timetable = json_decode($equipment->working_time, true);
            $this->holidays = json_decode($equipment->holidays, true);
            $this->extension = $equipment->extansion;
            $this->extensionDescription = $equipment->ext_true;
            $this->rate = $equipment->price;
            $this->rateType = $equipment->price_for;
            $this->rateTypeOther = $equipment->price_for == 'other' ? $equipment->other_price : null;
            $this->budget = $equipment->budget;
            $this->deposit = $equipment->deposit != null ? 'yes' : 'no';
            $this->depositDescription = $equipment->deposit;
            $this->allowedPayments = json_decode($equipment->paymeny);
            $this->canDeliver = $equipment->delivery != null ? 'yes' : 'no';
            $this->deliveryCharge = $this->canDeliver === 'yes' ? $equipment->delivery : null;
            $this->allowedPaymentsMore = collect(json_decode($equipment->other_payment, true))->mapWithKeys(
                fn($item) => [$item => ['name' => $item]]
            )->toArray();

            $this->expensesMore = collect(json_decode($equipment->expences, true))->mapWithKeys(
                fn($item) => [$item => ['name' => $item]]
            )->toArray();

            $this->servicesMore = collect(json_decode($equipment->complim_services, true))->mapWithKeys(
                fn($item) => [$item => ['name' => $item]]
            )->toArray();

            $this->equipmentMore = collect(json_decode($equipment->proposed, true))->mapWithKeys(
                fn($item) => [$item => ['name' => $item]]
            )->toArray();

            $this->referencesMore = collect(json_decode($equipment->references, true))->mapWithKeys(
                fn($item) => [$item => ['name' => $item]]
            )->toArray();
            $this->geoLimitations = $equipment->geo;
            $this->comment = $equipment->comment;


        }
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(__('partner.working_schedule'))
                    ->schema([
                        (new FormService())->WorkingDays(),
                        Fieldset::make()
                            ->columns(2)
                            ->schema([
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
                            ]),
                        Fieldset::make()
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
                            ])
                    ]),
                Section::make(__('partner.rates_conditions'))
                    ->columns(3)
                    ->schema([

                        (new FormService())->PaymentMethods(),
                        (new FormService())->Rates(),
                        (new FormService())->Budget(),
                        Repeater::make('expensesMore')
                            ->label(__('partner.additional_expenses'))
                            ->hintIcon('heroicon-o-information-circle')
                            ->hintIconTooltip(__('partner.additional_expenses_expl2'))
                            ->schema([
                                TextInput::make('name')
                                    ->label(__('form.detail'))
                                    ->type('text')
                                    ->required(),
                            ]),
                        Radio::make('canDeliver')
                            ->required()
                            ->label('Livraison possible')
                            ->reactive()
                            ->options([
                                'yes' => __('form.yes'),
                                'no' => __('form.no'),
                            ]),
                        Textarea::make('deliveryCharge')
                            ->label(__('partner.delivery_charge'))
                            ->hint(__('partner.delivery_charge_expl'))
                            ->autosize()
                            ->reactive()
                            ->hidden(fn(Get $get) => $get('canDeliver') !== 'yes')
                    ]),
                Section::make(__('partner.service_general_info'))
                    ->columns(3)
                    ->schema([

                        Fieldset::make()
                            ->columns(3)
                            ->schema([
                                Repeater::make('servicesMore')
                                    ->label(__('partner.complimentary_services'))
                                    ->hintIcon('heroicon-o-information-circle')
                                    ->hintIconTooltip(__('partner.complimentary_services_expl'))
                                    ->schema([
                                        TextInput::make('name')
                                            ->label(__('form.detail'))
                                            ->type('text')
                                            ->required(),
                                    ]),
                                Repeater::make('equipmentMore')
                                    ->label(__('partner.proposed_equipment'))
                                    ->hintIcon('heroicon-o-information-circle')
                                    ->hintIconTooltip(__('partner.proposed_equipment_expl'))
                                    ->schema([
                                        TextInput::make('name')
                                            ->label(__('form.detail'))
                                            ->type('text')
                                            ->required(),
                                    ]),

                                Repeater::make('referencesMore')
                                    ->label(__('partner.references'))
                                    ->hintIcon('heroicon-o-information-circle')
                                    ->hintIconTooltip(__('partner.references_expl'))
                                    ->schema([
                                        TextInput::make('name')
                                            ->label(__('form.detail'))
                                            ->type('text')
                                            ->required(),
                                    ]),
                            ]),
                        Textarea::make('geoLimitations')
                            ->label(__('partner.geographical_limit'))
                            ->autosize()
                            ->required(),
                    ]),
                Section::make(__('partner.want_to_add_something'))
                    ->schema([
                        Textarea::make('comment')
                            ->required()
                            ->label(__('partner.your_comment'))
                            ->hint(__('partner.want_to_add_something_expl'))
                            ->maxLength(1024)
                    ])
            ]);
    }

    public function submit(): void
    {
        $advert = Advert::where('id', $this->advertId)
            ->where('partners_info_id', $this->partnerInfoId)
            ->first();

        $equipment = ServiceEquipment::where('id', $advert->service_id)->first();
        $data = $this->form->getState();

        if ($equipment) {
            $item = $equipment;
        } else {
            $item = new ServiceEquipment();
        }

        $item->id_partner = $this->partnerId;
        $item->working_days = json_encode($data['days']);
        $item->working_time = json_encode($data['timetable']);
        $item->opening = $data['timetable'][0]['open'];
        $item->closing = $data['timetable'][0]['close'];
        $item->price = $data['rate'];
        $item->price_for = $data['rateType'];
        $item->budget = $data['budget'];
        $item->paymeny = json_encode($data['allowedPayments']);
        $item->other_payment = isset($data['allowedPaymentsMore']) ? json_encode(array_column($data['allowedPaymentsMore'], 'name')) : null;
        $item->holidays = json_encode($data['holidays']);
        $item->extansion = $data['extension'];
        $item->ext_true = $data['extension'] === 'yes' ? $data['extensionDescription'] : null;
        $item->deposit = $data['deposit'] === 'no' ? 'Non' : $data['depositDescription'];
        $item->geo = strip_tags($data['geoLimitations']);
        $item->delivery = $data['canDeliver'] === 'no' ? null : $data['deliveryCharge'];
        $item->other_price = $data['rateTypeOther'] ?? null;

        $item->complim_services = isset($data['servicesMore']) ? json_encode(array_column($data['servicesMore'], 'name')) : null;
        $item->proposed = isset($data['equipmentMore']) ? json_encode(array_column($data['equipmentMore'], 'name')) : null;
        $item->references = isset($data['referencesMore']) ? json_encode(array_column($data['referencesMore'], 'name')) : null;
        $item->expences = isset($data['expensesMore']) ? json_encode(array_column($data['expensesMore'], 'name')) : null;
        $item->comment = $data['comment'];
        $item->save();

        $advert->status = Advert::STATUS_ACTIVE;
        $advert->service_id = $item->id;
        $item->advert()->save($advert);
    }

    public function render(): View
    {
        return view('livewire.equipment');
    }
}
