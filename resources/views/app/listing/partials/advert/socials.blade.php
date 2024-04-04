<div class="d-flex gap-2">
    @foreach (NetworkType::values() as $network)
        <div class="tippy" data-tippy-content="{{ucfirst($network)}}">
            <a href="{{ $advert->company->social[$network] }}" target="_blank">
                <img src="{{Vite::social($network)}}"
                     alt="{{ $network }}"
                     width="24" height="24" class="star-img">
            </a>
        </div>
    @endforeach
</div>
