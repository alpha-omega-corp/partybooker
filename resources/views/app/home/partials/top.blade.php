@if (count($top))
    <x-carousel name="tops" :per-view="5">
        <x-slot:title>
            <h2>Top Services</h2>
        </x-slot:title>

        <x-slot:items>
            @foreach ($top as $partner)
                @php($advert = $partner->company->adverts()->main()->first())

                <x-carousel.item>
                    <a class="top-card" href="{{route('guest.listing.advert', [
                        'company' => $partner->company,
                        'advert' => $advert
                    ])}}">
                        <img src="{{$advert->images()->thumbnail()->first()->path}}"
                             alt="{{$partner->company->name}}"/>

                        <h6 class="p-4 fw-bold">{{$partner->company->name}}</h6>
                        <div class="top-card-content">
                            <span>{{$partner->company->address->address}}</span>
                            <span>{{$partner->company->loc}}</span>
                        </div>
                    </a>
                </x-carousel.item>
            @endforeach
        </x-slot:items>
    </x-carousel>
@endif
