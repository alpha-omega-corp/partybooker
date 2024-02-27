@php($route = route('guest.listing.advert', [
        'company' => $advert->company,
        'advert' => $advert
]))
<a href="{{$route}}">
    {{$route}}
</a>


