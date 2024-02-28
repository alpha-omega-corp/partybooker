@props([
    'items',
    'image'
])


<div>
    <div class="d-flex justify-content-start partner-advantage shadow-sm">
        <div class="d-flex align-items-start advantage-img-container">
            <img src="{{Vite::app($image)}}" alt=""/>
        </div>

        <div class="partner-advantage-text">
            <ul>
                @foreach($items as $item)
                    <li>{{$item}}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
