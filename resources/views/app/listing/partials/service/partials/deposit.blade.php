@if($advert->service->rate->has_deposit)
    {{$advert->service->rate->deposit_description}}
@else
    {{__('advert.no_deposit')}}
@endif
