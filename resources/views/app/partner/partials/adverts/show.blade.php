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
            <x-slot:title>
                <h6 class="partner-advert-title">
                    @if($advert->locale->title)
                        {{$advert->locale->title}}
                    @else
                        {{$advert->slug}}
                    @endif
                </h6>
            </x-slot:title>

            <x-slot:content>
                <div class="partner-advert">
                    <div class="partner-advert-actions">
                        @include('app.partner.partials.adverts.status')
                        @include('app.partner.partials.adverts.delete')
                        @include('app.partner.partials.adverts.edit')
                    </div>

                    @include('app.listing.partials.service.partials.description')
                    @include('app.partner.partials.adverts.statistics')
                    @include('app.partner.partials.adverts.service')
                </div>
            </x-slot:content>
        </x-accordion.item>

    @endforeach


</x-accordion.index>



