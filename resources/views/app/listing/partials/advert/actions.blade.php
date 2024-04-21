<x-app.action>
    <x-modal.open
        :background="true"
        :name="ModalName::PARTNER_ADVERT_REQUEST"
        :custom-color="AppColor::PINK"
        :singleton="true"
        :fit="true"
        :radius="false"
        :center="false"
        :text="__('advert.request')"
    />

    <div>
        @if(Auth::user() && Auth::user()->isAdmin())
            <a href="{{route(__('route.profile'), [
            'company' => $advert->company
        ])}}" target="_blank" class="btn btn-orange text-white w-100">
                Profile
            </a>
        @endif
    </div>
</x-app.action>

@include('app.listing.partials.request', [
    'advert' => $advert,
])



