<x-card
    :title="__('advert.company')"
    :can-open="false"
    :center="true"
    class="advert-company"

>
    <div class="advert-company-logo">
        @if($company->logo)
            <img src="{{ asset($company->logo) }}"
                 alt="{{$company->slogan}}"/>
        @endif
    </div>
    
    <div class="advert-company-content">
        <h4 class="advert-company-title">
            {{ $advert->company->name }}
        </h4>
        <p>{{$advert->company->locale->first()->slogan}}</p>
    </div>

    @include('app.listing.partials.advert.contacts')


</x-card>
