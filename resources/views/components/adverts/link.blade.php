<a href="{{route('guest.listing.advert', [
    'advert' => $advert,
    'company' => $advert->company,
])}}"
   target="_blank">
    {{$slot}}
</a>
