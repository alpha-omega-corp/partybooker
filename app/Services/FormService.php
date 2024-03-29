<?php


namespace App\Services;


use App\Enums\Days;
use App\Enums\FormType;
use App\Helpers\ServiceHelper;
use App\Interfaces\IFormService;
use App\Models\AppForm;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Illuminate\Support\Collection;

class FormService implements IFormService
{
    public function __construct()
    {
        // Livewire Form Sections
    }

    public function schedule(): Section
    {
        return Section::make(__('service.section.schedule'))
            ->schema([
                Tabs::make('Tabs')
                    ->tabs(array_map(function (string $day) {
                            $dayLabel = __("service.day.$day");
                            return Tab::make($dayLabel)
                                ->schema([

                                    Section::make($dayLabel)
                                        ->description(__('service.section.schedule.description'))
                                        ->schema([
                                            Checkbox::make("is_open_$day")
                                                ->label(__('service.section.schedule.day'))
                                                ->reactive(),
                                        ]),

                                    Section::make(__('service.section.schedule'))
                                        ->reactive()
                                        ->hidden(fn(Get $get): bool => !$get("is_open_$day"))
                                        ->schema([
                                            Repeater::make("timetable_$day")
                                                ->label(__('service.section.schedule.timetable', ['day' => strtolower($dayLabel)]))
                                                ->columns()
                                                ->hiddenLabel()
                                                ->schema([
                                                    TextInput::make('open')
                                                        ->type('time')
                                                        ->required(),
                                                    TextInput::make('close')->type('time')->required(),
                                                ])
                                        ]),
                                ]);
                        }, Days::values())
                    ),
                Tabs::make('Tabs')
                    ->tabs([
                        Tab::make('extension')
                            ->label(__('service.section.schedule.extension'))
                            ->schema([
                                Section::make(__('service.section.schedule.extension'))
                                    ->description(__('service.section.schedule.extension.description'))
                                    ->schema([
                                        Radio::make('has_extension')
                                            ->required()
                                            ->hiddenLabel()
                                            ->inline()
                                            ->reactive()
                                            ->options([
                                                true => __('form.yes'),
                                                false => __('form.no'),
                                            ]),
                                        TextInput::make('extension_description')
                                            ->label(__('form.description'))
                                            ->type('text')
                                            ->hidden(fn(Get $get) => !$get('has_extension'))
                                            ->reactive()
                                    ]),
                            ]),
                        Tab::make('holidays')
                            ->label(__('service.section.schedule.holidays'))
                            ->schema([
                                Section::make(__('service.section.schedule.holidays'))
                                    ->description(__('service.section.schedule.holidays.description'))
                                    ->schema([
                                        Repeater::make('holidays')
                                            ->label(__('service.section.schedule.holidays'))
                                            ->hiddenLabel()
                                            ->schema([
                                                DatePicker::make('start')
                                                    ->native(false)
                                                    ->required(),
                                                DatePicker::make('end')
                                                    ->native(false)
                                                    ->required(),
                                            ])->columns(),
                                    ]),
                            ]),
                    ]),
            ])
            ->columns();
    }

    public function price(): Section
    {
        return Section::make(__('service.section.price'))
            ->columns()
            ->schema([
                Repeater::make('prices')
                    ->defaultItems(2)
                    ->label(__('service.section.price.rates'))
                    ->hiddenLabel()
                    ->schema([
                        TextInput::make('price')
                            ->label(__('form.price'))
                            ->type('number')
                            ->required(),
                        TextInput::make('description')
                            ->label(__('form.description'))
                            ->required(),
                    ])->columns(),
                Tabs::make('Tabs')
                    ->tabs([
                        Tab::make('payment')
                            ->label(__('service.section.price.payment'))
                            ->schema([
                                Section::make(__('service.section.price.payment'))
                                    ->description(__('service.section.price.payment.description'))
                                    ->schema([
                                        CheckboxList::make('payments')
                                            ->options($this->getFormOptions(FormType::PAYMENT))
                                            ->hiddenLabel()
                                            ->reactive()
                                            ->bulkToggleable(),
                                    ]),
                            ]),
                        Tab::make('budget')
                            ->label(__('service.section.price.budget'))
                            ->schema([
                                Section::make(__('service.section.price.budget'))
                                    ->description(__('service.section.price.budget.description'))
                                    ->schema([
                                        Select::make('budget')
                                            ->hiddenLabel()
                                            ->required()
                                            ->options(ServiceHelper::budgets())
                                            ->native(false),

                                        Fieldset::make(__('service.section.price.budget.deposit'))
                                            ->columns()
                                            ->schema([
                                                Radio::make('has_deposit')
                                                    ->hiddenLabel()
                                                    ->required()
                                                    ->inline()
                                                    ->reactive()
                                                    ->options([
                                                        true => __('form.yes'),
                                                        false => __('form.no'),
                                                    ]),
                                                TextInput::make('deposit_description')
                                                    ->label(__('form.description'))
                                                    ->type('text')
                                                    ->hidden(fn(Get $get) => !$get('has_deposit'))
                                                    ->reactive()
                                            ])


                                    ]),
                            ]),
                    ]),
            ]);
    }

    private function getFormOptions(FormType $type): Collection
    {
        return AppForm::ofType($type)->get()->mapWithKeys(fn($item) => [
            $item->id => $item->locale->label
        ]);
    }

    public function comment(): Section
    {
        return Section::make(__('service.section.comment'))
            ->description(__('service.section.comment.description'))
            ->schema([
                Textarea::make('comment')
                    ->required()
                    ->hiddenLabel()
                    ->maxLength(1024)
            ]);
    }

    public function caterer(): Section
    {
        return Section::make(__('service.section.caterer'))
            ->columns()
            ->schema([
                Tabs::make('caterer')
                    ->tabs([
                        Tab::make(__('service.section.caterer.materials'))->schema([
                            Section::make(__('service.section.caterer.materials'))
                                ->columns(3)
                                ->description(__('service.section.caterer.materials.description'))
                                ->schema([
                                    CheckboxList::make('decorations')
                                        ->options($this->getFormOptions(FormType::DECORATION))
                                        ->label(__('service.equipment.decorations'))
                                        ->bulkToggleable(),
                                    CheckboxList::make('dishes')
                                        ->options($this->getFormOptions(FormType::DISH))
                                        ->label(__('service.equipment.dishes'))
                                        ->bulkToggleable(),
                                    CheckboxList::make('furniture')
                                        ->options($this->getFormOptions(FormType::FURNITURE))
                                        ->label(__('service.equipment.furniture'))
                                        ->bulkToggleable(),
                                ]),
                        ]),
                        Tab::make(__('service.section.caterer.service'))->schema([
                            Section::make(__('service.section.caterer.service'))
                                ->columns(3)
                                ->description(__('service.section.caterer.service.description'))
                                ->schema([
                                    CheckboxList::make('kitchen')
                                        ->options($this->getFormOptions(FormType::KITCHEN))
                                        ->label(__('service.equipment.kitchen'))
                                        ->bulkToggleable(),
                                    CheckboxList::make('staff')
                                        ->options($this->getFormOptions(FormType::STAFF))
                                        ->label(__('service.equipment.staff'))
                                        ->bulkToggleable(),
                                    CheckboxList::make('delivery')
                                        ->options($this->getFormOptions(FormType::DELIVERY))
                                        ->label(__('service.equipment.logistics'))
                                        ->bulkToggleable(),
                                ]),
                        ]),

                    ]),
                Tabs::make('menus')
                    ->tabs([
                        Tab::make(__('service.section.caterer.menus'))->schema([
                            Section::make(__('service.section.caterer.menus'))
                                ->description(__('service.section.caterer.menus.description'))
                                ->schema([
                                    FileUpload::make('menuFiles')
                                        ->hiddenLabel()
                                        ->directory('images/adverts/menus')
                                        ->imageEditor()
                                        ->multiple()
                                        ->acceptedFileTypes([
                                            'pdf',
                                            'doc',
                                            'docx',
                                            'xls',
                                            'xlsx',
                                            'image/*',
                                        ]),
                                ]),
                        ]),
                        Tab::make(__('service.section.caterer.capacity'))
                            ->schema([
                                Section::make(__('service.section.caterer.capacity'))
                                    ->description(__('service.section.caterer.capacity.description'))
                                    ->columns()
                                    ->schema([
                                        TextInput::make('minGuests')
                                            ->label(__('service.section.caterer.capacity.min'))
                                            ->required(),
                                        TextInput::make('maxGuests')
                                            ->label(__('service.section.caterer.capacity.max'))
                                            ->required(),
                                    ]),
                            ]),
                        Tab::make(__('service.section.caterer.delivery'))->schema([
                            Section::make(__('service.section.caterer.delivery'))
                                ->description(__('service.section.caterer.delivery.description'))
                                ->schema([
                                    Repeater::make('logistics')
                                        ->label(__('service.section.caterer.delivery'))
                                        ->hiddenLabel()
                                        ->schema([
                                            TextInput::make('deliveryService')
                                                ->label(__('service.section.caterer.delivery.service'))
                                                ->required(),
                                            TextInput::make('deliveryService')
                                                ->label(__('form.url'))
                                        ])->columns(),
                                ]),
                        ]),
                        Tab::make(__('service.section.caterer.specialties'))->schema([
                            Section::make(__('service.section.caterer.specialties'))
                                ->description(__('service.section.caterer.specialties.description'))
                                ->schema([
                                    RichEditor::make('specialties')
                                        ->required()
                                        ->hiddenLabel()
                                        ->toolbarButtons([
                                            'blockquote',
                                            'bold',
                                            'bulletList',
                                            'codeBlock',
                                            'h2',
                                            'h3',
                                            'italic',
                                            'link',
                                            'orderedList',
                                            'redo',
                                            'strike',
                                            'underline',
                                            'undo',
                                        ]),
                                ]),
                        ]),
                    ]),
            ]);
    }
}
