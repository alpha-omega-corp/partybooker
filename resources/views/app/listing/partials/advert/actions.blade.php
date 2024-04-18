<div class="advert-actions">
    @include('app.listing.partials.request', [
'advert' => $advert,
])

    <a href="{{route(__('route.profile'), [
    'company' => $advert->company
])}}" target="_blank" class="btn btn-orange text-white">
        Profile
    </a>

</div>
