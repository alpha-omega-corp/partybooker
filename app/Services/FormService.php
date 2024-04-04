<?php


namespace App\Services;


use App\Enums\Days;
use App\Enums\FormType;
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
                Tabs::make()
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
                Tabs::make('Tabs')
                    ->tabs([
                        Tab::make('prices')
                            ->icon('heroicon-o-currency-dollar')
                            ->label(__('service.section.price.rates'))
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
                            ]),
                    ]),
                Tabs::make()
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
                                        TextInput::make('budget')
                                            ->label(__('service.section.price.budget'))
                                            ->required(),

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

    public function getFormOptions(FormType $type): Collection
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

    public function wine(): Section
    {
        return Section::make(__('service.section.wine'))
            ->columns()
            ->schema([
                Tabs::make()
                    ->tabs([
                        Tab::make(__('service.section.description'))->schema([
                            $this->descriptionSection()
                        ]),
                        Tab::make(__('service.section.material'))->schema([
                            Section::make(__('service.section.material'))
                                ->columns(3)
                                ->description(__('service.section.material.description'))
                                ->schema([
                                    $this->furnitureForms(),
                                    $this->decorationForms(),
                                    $this->technicalForms(),
                                ]),
                        ]),
                        Tab::make(__('service.section.logistics'))->schema([
                            Section::make(__('service.section.logistics'))
                                ->columns(3)
                                ->description(__('service.section.logistics.description'))
                                ->schema([
                                    $this->staffForms(),
                                    $this->installationForms(),
                                    $this->foodForms(),
                                ]),
                        ]),

                        Tab::make(__('service.section.service'))->schema([
                            Section::make(__('service.section.wine'))
                                ->columns()
                                ->description(__('service.section.service.description'))
                                ->schema([
                                    $this->wineServiceForms()->inlineLabel(),
                                ])
                        ]),

                    ]),

                Tabs::make()
                    ->tabs([
                        Tab::make(__('service.section.capacity'))
                            ->schema([
                                $this->capacitySection(),
                            ]),
                        Tab::make(__('service.section.wine.article'))->schema([
                            Section::make(__('service.section.wine.article'))
                                ->description(__('service.section.wine.article.description'))
                                ->schema([
                                    FileUpload::make('articleFile')
                                        ->hiddenLabel()
                                        ->hint(__('service.help.file'))
                                        ->directory('images/adverts/articles')
                                        ->imageEditor()
                                        ->multiple(false)
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
                    ]),
            ]);
    }

    private function descriptionSection(): Section
    {
        return Section::make(__('service.section.description'))
            ->description(__('service.section.description.info'))
            ->schema([
                Tabs::make()
                    ->tabs([
                        Tab::make('FR')
                            ->schema([
                                TextInput::make('title_fr')
                                    ->label(__('form.title')),
                                RichEditor::make('description_fr')
                                    ->hiddenLabel()
                                    ->toolbarButtons([
                                        'blockquote',
                                        'bold',
                                        'bulletList',
                                        'h2',
                                        'h3',
                                        'italic',
                                        'link',
                                        'orderedList',
                                        'redo',
                                        'strike',
                                        'underline',
                                        'undo',
                                    ])
                            ]),
                        Tab::make('EN')
                            ->schema([
                                TextInput::make('title_en')
                                    ->label(__('form.title')),
                                RichEditor::make('description_en')
                                    ->hiddenLabel()
                                    ->toolbarButtons([
                                        'blockquote',
                                        'bold',
                                        'bulletList',
                                        'h2',
                                        'h3',
                                        'italic',
                                        'link',
                                        'orderedList',
                                        'redo',
                                        'strike',
                                        'underline',
                                        'undo',
                                    ])
                            ]),
                    ]),

            ]);
    }

    private function furnitureForms(): CheckboxList
    {
        return CheckboxList::make('furniture')
            ->options($this->getFormOptions(FormType::FURNITURE))
            ->label(__('service.checklist.furniture'))
            ->bulkToggleable();
    }

    private function decorationForms(): CheckboxList
    {
        return CheckboxList::make('decorations')
            ->options($this->getFormOptions(FormType::DECORATION))
            ->label(__('service.checklist.decorations'))
            ->bulkToggleable();
    }

    private function technicalForms(): CheckboxList
    {
        return CheckboxList::make('technical')
            ->options($this->getFormOptions(FormType::TECHNICAL))
            ->label(__('service.checklist.technical'))
            ->bulkToggleable();
    }

    private function staffForms(): CheckboxList
    {
        return CheckboxList::make('staff')
            ->options($this->getFormOptions(FormType::STAFF))
            ->label(__('service.checklist.staff'))
            ->bulkToggleable();
    }

    private function installationForms(): CheckboxList
    {
        return CheckboxList::make('installations')
            ->options($this->getFormOptions(FormType::INSTALLATION))
            ->label(__('service.checklist.installation'))
            ->bulkToggleable();
    }

    private function foodForms(): CheckboxList
    {
        return CheckboxList::make('food')
            ->options($this->getFormOptions(FormType::FOOD))
            ->label(__('service.checklist.food'))
            ->bulkToggleable();
    }

    private function wineServiceForms(): CheckboxList
    {
        return CheckboxList::make('wine_forms')
            ->options($this->getFormOptions(FormType::SERVICE_WINE))
            ->label(__('service.checklist.service'))
            ->bulkToggleable();
    }

    private function capacitySection(): Section
    {
        return Section::make(__('service.section.capacity'))
            ->description(__('service.section.capacity.description'))
            ->columns()
            ->schema([
                TextInput::make('min_guests')
                    ->label(__('service.section.capacity.min')),
                TextInput::make('max_guests')
                    ->label(__('service.section.capacity.max')),
            ]);
    }

    public function caterer(): Section
    {
        return Section::make(__('service.section.caterer'))
            ->columns()
            ->schema([
                Tabs::make()
                    ->tabs([
                        Tab::make(__('service.section.material'))->schema([
                            Section::make(__('service.section.material'))
                                ->columns(3)
                                ->description(__('service.section.material.description'))
                                ->schema([
                                    $this->furnitureForms(),
                                    $this->decorationForms(),
                                    $this->dishForms(),
                                ]),
                        ]),
                        Tab::make(__('service.section.logistics'))->schema([
                            Section::make(__('service.section.logistics'))
                                ->columns(3)
                                ->description(__('service.section.logistics.description'))
                                ->schema([
                                    $this->kitchenForms(),
                                    $this->staffForms(),
                                    $this->deliveryForms()
                                ]),
                        ]),
                        Tab::make(__('service.section.service'))->schema([
                            Section::make(__('service.section.caterer'))
                                ->columns()
                                ->description(__('service.section.service.description'))
                                ->schema([
                                    $this->catererServiceForms()->inlineLabel(),
                                ])
                        ]),

                    ]),
                Tabs::make()
                    ->tabs([
                        Tab::make(__('service.section.capacity'))
                            ->schema([
                                $this->capacitySection(),
                            ]),

                        Tab::make(__('service.section.caterer.menu'))->schema([
                            Section::make(__('service.section.caterer.menu'))
                                ->description(__('service.section.caterer.menu.description'))
                                ->schema([
                                    FileUpload::make('menuFile')
                                        ->hiddenLabel()
                                        ->hint(__('service.help.file'))
                                        ->directory('images/adverts/menus')
                                        ->imageEditor()
                                        ->multiple(false)
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

                        Tab::make(__('service.section.caterer.delivery'))->schema([
                            Section::make(__('service.section.caterer.delivery'))
                                ->description(__('service.section.caterer.delivery.description'))
                                ->schema([
                                    Repeater::make('delivery_services')
                                        ->label(__('service.section.caterer.delivery'))
                                        ->hiddenLabel()
                                        ->schema([
                                            TextInput::make('service')
                                                ->label(__('service.section.caterer.delivery.service')),
                                            TextInput::make('service_url')
                                                ->label(__('form.url'))
                                        ])->columns(),
                                ]),
                        ]),
                        Tab::make(__('service.section.caterer.specialties'))->schema([
                            Section::make(__('service.section.caterer.specialties'))
                                ->description(__('service.section.caterer.specialties.description'))
                                ->schema([
                                    RichEditor::make('specialty')
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

    private function dishForms(): CheckboxList
    {
        return CheckboxList::make('dishes')
            ->options($this->getFormOptions(FormType::DISH))
            ->label(__('service.checklist.dish'))
            ->bulkToggleable();
    }

    private function kitchenForms(): CheckboxList
    {
        return CheckboxList::make('kitchen')
            ->options($this->getFormOptions(FormType::KITCHEN))
            ->label(__('service.checklist.kitchen'))
            ->bulkToggleable();
    }

    private function deliveryForms(): CheckboxList
    {
        return CheckboxList::make('delivery')
            ->options($this->getFormOptions(FormType::DELIVERY))
            ->label(__('service.checklist.delivery'))
            ->bulkToggleable();
    }

    private function catererServiceForms(): CheckboxList
    {
        return CheckboxList::make('caterer_forms')
            ->options($this->getFormOptions(FormType::SERVICE_CATERER))
            ->label(__('service.checklist.service'))
            ->bulkToggleable();
    }

    public function entertainment(): Section
    {
        return Section::make(__('service.section.entertainment'))
            ->columns()
            ->schema([
            ]);
    }

    public function equipment(): Section
    {
        return Section::make(__('service.section.equipment'))
            ->columns()
            ->schema([
            ]);
    }

    public function event(): Section
    {
        return Section::make(__('service.section.event'))
            ->columns()
            ->schema([
                Tabs::make()
                    ->tabs([
                        Tab::make(__('service.section.material'))->schema([
                            Section::make(__('service.section.material'))
                                ->columns(3)
                                ->description(__('service.section.material.description'))
                                ->schema([
                                    $this->furnitureForms(),
                                    $this->technicalForms(),
                                ]),
                        ]),
                        Tab::make(__('service.section.logistics'))->schema([
                            Section::make(__('service.section.logistics'))
                                ->columns(3)
                                ->description(__('service.section.logistics.description'))
                                ->schema([
                                    $this->staffForms(),
                                    $this->installationForms(),
                                    $this->foodForms()
                                ]),
                        ]),
                        Tab::make(__('service.section.service'))->schema([
                            Section::make(__('service.section.event'))
                                ->columns()
                                ->description(__('service.section.service.description'))
                                ->schema([
                                    $this->eventServiceForms()->inlineLabel(),
                                ])
                        ]),
                    ]),

                Tabs::make()
                    ->tabs([
                        Tab::make(__('service.section.capacity'))
                            ->schema([
                                $this->capacitySection(),
                            ]),
                        Tab::make(__('service.section.event.rooms'))
                            ->schema([
                                Section::make(__('service.section.event.rooms'))
                                    ->description(__('service.section.event.rooms.description'))
                                    ->schema([
                                        Repeater::make('rooms')
                                            ->hiddenLabel()
                                            ->schema([
                                                TextInput::make('name')
                                                    ->label(__('form.name')),
                                                TextInput::make('capacity')
                                                    ->label(__('service.section.capacity'))
                                                    ->type('number')
                                            ])->columns(),
                                    ]),
                            ]),
                        Tab::make(__('service.section.event.caterers'))
                            ->schema([
                                Section::make(__('service.section.event.caterers'))
                                    ->description(__('service.section.event.caterers.description'))
                                    ->schema([
                                        Repeater::make('caterers')
                                            ->hiddenLabel()
                                            ->schema([
                                                TextInput::make('name')
                                                    ->label(__('form.name')),
                                                TextInput::make('url')
                                                    ->label(__('form.url'))
                                                    ->type('number')
                                            ])->columns(),
                                    ]),
                            ]),
                    ]),
            ]);
    }

    private function eventServiceForms(): CheckboxList
    {
        return CheckboxList::make('event_forms')
            ->options($this->getFormOptions(FormType::SERVICE_EVENT))
            ->label(__('service.checklist.service'))
            ->bulkToggleable();
    }


}
