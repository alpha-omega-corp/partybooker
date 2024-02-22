<a href="{{route('guest.listing.advert', [
    'advert' => $advert,
    'company' => $advert->company,
])}}">
    {{$slot}}
</a>
