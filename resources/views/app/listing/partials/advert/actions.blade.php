<x-app.action>
    @if(Auth::user() && Auth::user()->isAdmin())
        <a href="{{route(__('route.profile'), [
            'company' => $advert->company
        ])}}" target="_blank" class="btn btn-secondary btn-rounded advert-action-btn">
            Profile
        </a>
    @endif

</x-app.action>

<a href="{{route(__('route.company'), ['company' => $advert->company])}}"
   class="btn btn-pink btn-rounded advert-action-btn">
    {{__('advert.company')}}
</a>

<x-modal.open
    :rounded="true"
    :background="true"
    :name="ModalName::PARTNER_ADVERT_REQUEST"
    :custom-color="AppColor::BLUE"
    :singleton="true"
    :fit="true"
    :center="true"
    :text="__('advert.request')"
/>


@include('app.listing.partials.request', [
    'advert' => $advert,
])




