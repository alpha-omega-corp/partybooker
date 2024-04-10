<div class="d-flex gap-2">
    @include('app.listing.partials.request', [
    'advert' => $advert,
])

    @if(Auth::user() && Auth::user()->isAdmin())
        <a class="btn btn-orange text-white"
           href="{{route('partner.dashboard', ['partner' => $advert->company->partner])}}">
            {{__('partner.dashboard')}}
        </a>
    @endif
</div>
