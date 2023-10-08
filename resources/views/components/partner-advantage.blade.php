@props([
    'items',
    'image'
])


<div class="partner-advantage">
    <div class="d-flex justify-content-center">
        <img src="{{Vite::image($image)}}"  alt="" />
    </div>

    <ul class="d-flex flex-column">
        @foreach($items as $item)
            <li class="text-nowrap">{{$item}}</li>
        @endforeach
    </ul>
</div>
