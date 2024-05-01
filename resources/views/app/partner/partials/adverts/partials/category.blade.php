<x-accordion.item
    name="category"
    :accordion="$accordion"
    :padding="false"
>

    <x-slot:title>
        {{__('advert.service')}}
    </x-slot:title>

    <x-slot:content>
        @include('app.partner.partials.adverts.content.edit')
        <div class="partner-advert-content">
            @include('app.partner.partials.adverts.content.show', ['advert' => $advert])
        </div>
    </x-slot:content>
</x-accordion.item>
