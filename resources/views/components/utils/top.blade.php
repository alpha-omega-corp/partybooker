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

        <div class="top-card-header">
            <h6 class="top-card-title">{{$partner->company->name}}</h6>
        </div>

        <div class="top-card-content">
            @if($image)
                @php($location = $partner->company->location->state . ', ' . ucfirst($partner->company->location->city))
                @include('app.listing.partials.advert.other', [
                    'advert' => $advertPool->first(),
                    'company' => $advertPool->first()->company,
                    'showAll' => true,
                    'center' => true,
                    'otherTitle' => $location,
                    'radius' => false
                ])
            @endif
        </div>
    </div>
@endif
