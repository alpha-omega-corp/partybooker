@props([
    'isLink' => true,
])

<a {{ $attributes->merge(['class' => 'app-logo']) }} href="{{$isLink ? route(__('route.home')) : '#'}}">
    <img src="{{Vite::app('logo.png')}}"
         alt="{{__('app.catch-phrase')}}"/>
</a>
