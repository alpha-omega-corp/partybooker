<x-tab.index :items="[
    'Description',
    'Concept',
    'Features'
]">
    <x-tab.item>
        @php($about = $content[AppContentType::APP_ABOUT->name])
        <x-slot:information>
            {{$about->locale->title}}
            @include('app.admin.content.about.partials.content.edit', ['item' => $about])
        </x-slot:information>

        {{$about->locale->content}}
    </x-tab.item>

    <x-tab.item>
        @php($about = $content[AppContentType::APP_CONCEPT->name])
        <x-slot:information>
            {{$about->locale->title}}
            @include('app.admin.content.about.partials.content.edit', ['item' => $about])
        </x-slot:information>

        {{$about->locale->content}}
    </x-tab.item>

    <x-tab.item :padding="false">
        <x-slot:information>
            @include('app.admin.content.about.partials.create', ['item' => $about])
        </x-slot:information>

        @include('app.admin.content.about.partials.abouts', ['items' => $abouts])
    </x-tab.item>
</x-tab.index>
