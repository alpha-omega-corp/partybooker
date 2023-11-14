@php
    $partnerInfo = auth()->user()->partnerInfo;
@endphp

@include('web.partner.popup.edit-company-description')


<div class="company-description-card d-flex justify-content-around">
    <x-dashboard.company-description-item
        :title="__('become_partner.french')"
        :item="$partnerInfo->fr_slogan"/>

    <!-- English -->
    <x-dashboard.company-description-item
        :title="__('become_partner.english')"
        :item="$partnerInfo->en_slogan"/>

</div>
