<x-accordion.item
    name="description"
    :accordion="$accordion"
    :padding="false"
>
    <x-slot:title>
        {{__('advert.description')}}
    </x-slot:title>

    <x-slot:content>
        @include('app.partner.partials.adverts.description.edit')
        <div class="p-4">
            {!! $advert->locale->description !!}
        </div>
    </x-slot:content>
</x-accordion.item>
