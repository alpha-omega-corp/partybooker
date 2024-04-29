@props([
    'partner',
])

@if($partner->company->adverts)
    @php
        $image = null;
        $imagePool = $partner->company->adverts->map(function ($advert) {
            return $advert->images()->thumbnail()->first()->path;
        });

        if(!$imagePool->isEmpty()) {
            $image = $imagePool->random();
        }
    @endphp
    <div class="top-card">
        <div class="top-card-image">
            <img src="{{asset($image)}}"
                 alt="placeholder">

        </div>

        <h6 class="top-card-title">{{$partner->company->name}}</h6>

        <div class="top-card-content">
            <span>{{$partner->company->location->address}}</span>
            <span>{{$partner->company->loc}}</span>
        </div>
    </div>
@endif
