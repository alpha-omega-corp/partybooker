@props([
    'items',
    'image'
])


<div class="partner-advantage d-flex align-items-start">
    <img src="{{Vite::image($image)}}" class="" alt="" />
    <ul class="d-flex flex-column">
        @foreach($items as $item)
            <li class="text-nowrap">{{$item}}</li>
        @endforeach
    </ul>
</div>
