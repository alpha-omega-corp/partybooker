@props([
    'partner',
])

@if($partner->company->adverts)
    @php
        $image = null;
        $advertPool = $partner->company->adverts;

        if(!$advertPool->isEmpty()) {
            $image = $advertPool->random()->images()->thumbnail()->first()->path;
        }
    @endphp
    <div class="top-card">
        <div class="top-card-image">
            <img src="{{asset($image)}}"
                 alt="placeholder">
        </div>

        <div class="top-card-title">
            <h6>{{$partner->company->name}}</h6>
        </div>

        @if($partner->company->location)
            <div class="top-card-location">
                <span class="text-uppercase">{{$partner->company->location->state}}, </span>
                <span>{{ucfirst($partner->company->location->city)}}</span>
            </div>
        @endif

        <div class="top-card-content">
            @if($image)
                @include('app.listing.partials.advert.other', [
                    'advert' => $advertPool->first(),
                    'company' => $advertPool->first()->company,
                    'showAll' => true
                ])
            @endif
        </div>
    </div>
@endif
