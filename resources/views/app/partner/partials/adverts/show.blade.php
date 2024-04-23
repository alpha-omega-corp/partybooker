<!-- Create Advert -->
@if($plan->advert_count > count($partner->company->adverts))
    @include('app.partner.partials.adverts.create')
@endif


<x-accordion.index name="partnerAdverts">

    @foreach($partner->company->adverts as $advert)
        <x-accordion.item
            :name="$advert->slug"
            accordion="partnerAdverts"
            :padding="false"
        >
            <x-slot:actions>
                @include('app.partner.partials.adverts.status')
                @include('app.partner.partials.adverts.delete')
                @include('app.partner.partials.adverts.edit')
            </x-slot:actions>

            <x-slot:title>
                <h6 class="partner-advert-title">
                    {{$advert->slug}}
                </h6>
            </x-slot:title>

            <x-slot:content>
                <div class="partner-advert">
                    @include('app.partner.partials.adverts.service')
                    @include('app.listing.partials.advert.description')
                    @include('app.listing.partials.advert.statistics')
                </div>
            </x-slot:content>
        </x-accordion.item>

    @endforeach


</x-accordion.index>



