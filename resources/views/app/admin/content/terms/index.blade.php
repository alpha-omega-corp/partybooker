<x-tab.index :items="[
    'User Terms',
    'Service Terms',
]">
    <x-tab.item>
        @php($term = $content[AppContentType::USER_TERMS->name])
        <x-slot:information>
            {{$term->locale->title}}
            @include('app.admin.content.terms.partials.edit', ['item' => $term])
        </x-slot:information>

        {{$term->locale->content}}
    </x-tab.item>

    <x-tab.item>
        @php($term = $content[AppContentType::SERVICE_TERMS->name])
        <x-slot:information>
            {{$term->locale->title}}
            @include('app.admin.content.terms.partials.edit', ['item' => $term])
        </x-slot:information>

        {{$term->locale->content}}
    </x-tab.item>
</x-tab.index>
