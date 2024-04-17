<a href="{{route(__('route.advert'), [
    'advert' => $advert,
    'company' => $advert->company,
])}}"
    {{$blank ? 'target="_blank"' : ''}}>
    {{$slot}}
</a>
