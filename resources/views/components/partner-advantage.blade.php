@props([
    'items',
    'image'
])


<div class="partner-advantage shadow-sm">
    <div class="d-flex justify-content-start">
        <div class="d-flex align-items-start">
            <img src="{{Vite::image($image)}}" alt=""/>
        </div>

        <div class="partner-advantage-text">
            <ul class="d-flex flex-column">
                @foreach($items as $item)
                    <li>{{$item}}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
