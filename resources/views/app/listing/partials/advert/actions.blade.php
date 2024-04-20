<div class="advert-actions">
    <x-modal.open
        :background="true"
        :name="ModalName::PARTNER_ADVERT_REQUEST"
        :custom-color="AppColor::SECONDARY"
        :singleton="true"
        :fit="true"
        :text="__('advert.request')"
    />


    @if(Auth::user() && Auth::user()->isAdmin())
        <a href="{{route(__('route.profile'), [
    'company' => $advert->company
])}}" target="_blank" class="btn btn-orange text-white w-100">
            Profile
        </a>
    @endif
</div>

@include('app.listing.partials.request', [
    'advert' => $advert,
])



