<x-accordion.item
    name="gallery"
    :accordion="$accordion"
    :padding="false"
>

    <x-slot:title>
        {{__('advert.gallery')}}
    </x-slot:title>

    <x-slot:content>
        @include('app.partner.partials.adverts.gallery.create')
        @include('app.partner.partials.adverts.gallery.show', ['advert' => $advert])
    </x-slot:content>
</x-accordion.item>
