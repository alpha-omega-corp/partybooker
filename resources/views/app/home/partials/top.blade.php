@if (count($top))
    <div class="bg-pink">
        <x-carousel name="tops" :count="5">
            <x-slot:title>
                <h2 class="text-center text-uppercase fw-bold text-white">Top Partners</h2>
            </x-slot:title>

            <x-slot:items>
                @foreach ($top as $partner)
                    @php($advert = $partner->company->adverts->where('is_main', true)->first())
                    <x-carousel.item>
                        <a class="top-card" href="{{route('guest.listing.advert', [
                        'company' => $partner->company,
                        'advert' => $advert
                    ])}}">
                            <img src="{{$advert->images()->where('is_thumbnail', true)->first()->path}}"
                                 alt="{{$partner->company->name}}"/>

                            <h6 class="p-4 fw-bold">{{$partner->company->name}}</h6>
                            <div class="top-card-content">
                                <span>{{explode(',', $partner->company->address)[1]}},</span>
                                <span>{{$partner->company->loc}}</span>
                            </div>
                        </a>
                    </x-carousel.item>
                @endforeach
            </x-slot:items>
        </x-carousel>
    </div>
@endif
