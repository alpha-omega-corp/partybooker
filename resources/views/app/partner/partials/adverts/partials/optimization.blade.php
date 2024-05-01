<x-accordion.item
    name="optimization"
    :accordion="$accordion"
    :padding="false"
>
    <x-slot:title>
        {{__('advert.optimization')}}
    </x-slot:title>

    <x-slot:content>
        @include('app.partner.partials.adverts.meta.edit')
        @include('app.partner.partials.adverts.meta.show', ['advert' => $advert])
    </x-slot:content>
</x-accordion.item>
