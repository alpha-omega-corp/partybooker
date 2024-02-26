<a href="{{route('guest.listing.advert', [
    'advert' => $advert,
    'company' => $advert->company,
])}}"
    {{$blank ? 'target="_blank"' : ''}}>
    {{$slot}}
</a>
