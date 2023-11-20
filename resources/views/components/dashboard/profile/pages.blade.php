@props([
    'galleryImages',
    'user',
])
<div class="profile-info advert-info advert-pages">
    <x-partner-category-tab
            :tabs="[
        __('partner.nav-gallery'),
        'Description',
        'Contact']">
        <x-slot name="title">
            <div>
                <div class="serviceDetails">
                    @include('web.partner.profile.category-images')
                </div>
            </div>
        </x-slot>

        <x-tab.item>
            <x-dashboard.profile.gallery :gallery="$galleryImages"/>
        </x-tab.item>

        <x-tab.item>
            <div class="description-card">
                <x-dashboard.profile.company-description :partner="$user->partnerInfo"/>
            </div>
        </x-tab.item>

        <x-tab.item>
            <x-dashboard.profile.contact/>
        </x-tab.item>

    </x-partner-category-tab>
</div>
