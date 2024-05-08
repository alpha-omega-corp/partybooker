@php($route = route(__('route.advert'), [
        'company' => $advert->company,
        'advert' => $advert
]))

<a href="{{$route}}" target="_blank">
    {{$route}}
</a>





