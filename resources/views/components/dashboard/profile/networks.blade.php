@props([
'partner'
])


@include('web.partner.popup.edit-www')
<div class="dashboard-socials">
    <div class="cp-socials-item d-flex align-items-center">
        <a href="{{$partner->www}}" target="_blank" class="company-website">
            {{$partner->www}}
        </a>
    </div>
    <br>
    <div class="d-flex justify-content-around align-items-center">
        <x-dashboard.social-network
                network="instagram" :value="$partner->instagram"/>

        <x-dashboard.social-network
                network="facebook" :value="$partner->facebook"/>

        <x-dashboard.social-network
                network="youtube" :value="$partner->youtube"/>

        <x-dashboard.social-network
                network="twitter" :value="$partner->twitter"/>

        <x-dashboard.social-network
                network="linkedin" :value="$partner->linkedin"/>

        <x-dashboard.social-network
                network="vimeo" :value="$partner->vimeo"/>
    </div>
</div>



