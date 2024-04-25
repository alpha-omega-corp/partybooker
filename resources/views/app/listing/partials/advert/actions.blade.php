<x-app.action>
    @if(Auth::user() && Auth::user()->isAdmin())
        <a href="{{route(__('route.profile'), [
            'company' => $advert->company
        ])}}" target="_blank" class="btn btn-secondary text-white text-center w-100">
            Profile
        </a>
    @endif
    <x-modal.open
        :background="true"
        :name="ModalName::PARTNER_ADVERT_REQUEST"
        :custom-color="AppColor::BLUE"
        :singleton="true"
        :fit="true"
        :radius="false"
        :text="__('advert.request')"
    />

</x-app.action>

@include('app.listing.partials.request', [
    'advert' => $advert,
])



