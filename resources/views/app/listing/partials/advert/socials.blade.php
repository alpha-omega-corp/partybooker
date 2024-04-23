<div class="service-socials">
    @foreach (NetworkType::values() as $network)
        <div class="tippy" data-tippy-content="{{ucfirst($network)}}">
            <a href="{{ $advert->company->social[$network] }}" target="_blank">
                <img src="{{Vite::social($network)}}" alt="{{ $network }}">
            </a>
        </div>
    @endforeach
</div>
