<a href="{{route(__('route.advert'), [
    'company' => $advert->company,
    'category' => $advert->category->locale,
])}}"
    {{$blank ? 'target="_blank"' : ''}}>
    {{$slot}}
</a>
