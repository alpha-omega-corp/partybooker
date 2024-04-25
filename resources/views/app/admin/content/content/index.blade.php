<x-tab.index :items="[
    'Home',
    'About Description',
    'About Concept',
    'About Features',
    'User Terms',
    'Service Terms',
]">
    <x-tab.item>
        @php($item = $content[AppContentType::APP_HOME->name])
        <x-slot:information>
            @include('app.admin.content.content.partials.edit')
        </x-slot:information>

        <h6>{{$item->locale->title}}</h6>
        {{$item->locale->content}}
    </x-tab.item>

    <x-tab.item>
        @php($item = $content[AppContentType::APP_ABOUT->name])
        <x-slot:information>
            @include('app.admin.content.content.partials.edit')
        </x-slot:information>

        {{$item->locale->title}}
        {{$item->locale->content}}
    </x-tab.item>

    <x-tab.item>
        @php($item = $content[AppContentType::APP_CONCEPT->name])
        <x-slot:information>
            @include('app.admin.content.content.partials.edit')
        </x-slot:information>

        {{$item->locale->title}}
        {{$item->locale->content}}
    </x-tab.item>


    <x-tab.item :padding="false">
        <x-slot:information>
            @include('app.admin.content.about.partials.create')
        </x-slot:information>

        @include('app.admin.content.about.partials.abouts', ['items' => $abouts])
    </x-tab.item>


    <x-tab.item>
        @php($item = $content[AppContentType::USER_TERMS->name])
        <x-slot:information>
            @include('app.admin.content.content.partials.edit')
        </x-slot:information>

        {{$item->locale->title}}
        {{$item->locale->content}}
    </x-tab.item>

    <x-tab.item>
        @php($item = $content[AppContentType::SERVICE_TERMS->name])
        <x-slot:information>
            @include('app.admin.content.content.partials.edit')
        </x-slot:information>
        {{$item->locale->title}}
        {{$item->locale->content}}
    </x-tab.item>
</x-tab.index>
