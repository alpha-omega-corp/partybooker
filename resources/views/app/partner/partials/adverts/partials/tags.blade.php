<x-accordion.item
    name="tags"
    :accordion="$accordion"
    :padding="false"
>

    <x-slot:title>
        {{__('advert.tags')}}
    </x-slot:title>

    <x-slot:content>
        @include('app.partner.partials.adverts.tags.create')
        @include('app.partner.partials.adverts.tags.show')
    </x-slot:content>
</x-accordion.item>
