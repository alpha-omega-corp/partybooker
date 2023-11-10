<div class="dashboard-socials" x-data="{modal: 'editSocials'}" @click="openModalPrevent(modal)">
    <div class="cp-socials-item d-flex">
        <div>
            <h6 class="text-uppercase fw-bold">{{__('partner.url_website')}}</h6>
        </div>
        <a href="{{$user->partnerInfo->www}}" target="_blank">
            {{$user->partnerInfo->www}}
        </a>
    </div>

    <hr>
    <div class="d-flex flex-wrap">

        <x-dashboard.social-network
            network="instagram" :value="$user->partnerInfo->instagram"/>

        <x-dashboard.social-network
            network="facebook" :value="$user->partnerInfo->facebook"/>

        <x-dashboard.social-network
            network="youtube" :value="$user->partnerInfo->youtube"/>

        <x-dashboard.social-network
            network="twitter" :value="$user->partnerInfo->twitter"/>

        <x-dashboard.social-network
            network="linkedin" :value="$user->partnerInfo->linkedin"/>

        <x-dashboard.social-network
            network="vimeo" :value="$user->partnerInfo->vimeo"/>

    </div>

    @include('web.partner.popup.edit-www')
</div>


