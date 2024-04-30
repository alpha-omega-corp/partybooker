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

        <div class="top-card-content">
            @if($image)
                @include('app.listing.partials.advert.other', [
                    'advert' => $advertPool->first(),
                    'company' => $advertPool->first()->company,
                    'showAll' => true
                ])
            @endif

            @if($partner->company->location)
                <span>{{$partner->company->location->state}}</span>
                <span>{{$partner->company->address}}</span>
            @endif

        </div>
    </div>
@endif
