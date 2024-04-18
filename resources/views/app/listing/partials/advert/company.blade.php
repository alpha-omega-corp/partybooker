<div class="advert-company">
    <div class="advert-company-content">
        <p>{{$advert->company->locale->first()->slogan}}</p>
    </div>
    <div class="advert-company-logo">
        @if($company->logo)
            <img src="{{ asset($company->logo) }}"
                 alt="{{$company->slogan}}"/>
        @endif
    </div>


    <h4 class="d-none">
        {{ $advert->company->name }}
    </h4>
</div>
