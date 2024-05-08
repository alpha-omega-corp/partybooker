@php use App\Services\ListingService; @endphp
<x-card
    :title="__('advert.description')"
    :actionable="(new ListingService())->grant($advert)"
    class="service-description"
    :radius="true"
    :can-open="false"
>
    <x-slot:actions>
        @include('app.partner.partials.adverts.description.edit')
    </x-slot:actions>

    <x-slot:body>
        {!! $advert->locale->description !!}
    </x-slot:body>
</x-card>

