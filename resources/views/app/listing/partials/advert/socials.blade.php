<x-card :title="__('advert.socials')" :can-open="false" :radius="true">

    <div class="app-advert-socials">
        @foreach (NetworkType::values() as $network)
            <div>
                <a href="{{ $advert->company->social[$network] }}" target="_blank" class="tippy"
                   data-tippy-content="{{ucfirst($network)}}">
                    <img src="{{Vite::social($network)}}" alt="{{ $network }}">
                </a>
            </div>
        @endforeach
    </div>
</x-card>
