@props([
    'galleryImages',
    'eventTypes',
    'partnerEt',
    'user',
])
<div class="profile-info advert-info advert-pages">
    <x-partner-category-tab
        :tabs="[
        __('partner.nav-gallery'),
        'Description',
        'Tags',
        'Contact']">
        <x-slot name="title">
            <div>
                <div class="serviceDetails">
                    @include('web.partner.profile.categories-images')
                </div>
            </div>
        </x-slot>

        <x-tab.item>
            <x-dashboard.profile.gallery :gallery="$galleryImages" :user="$user"/>
        </x-tab.item>

        <x-tab.item>
            <div class="description-card">
                <x-dashboard.profile.company-description :partner="$user->partnerInfo"/>
            </div>
        </x-tab.item>

        <x-tab.item>

            <div class="event-types-card">
                <x-dashboard.card :title="__('partner.event_types')">
                    <x-dashboard.profile.event-types
                        :user="$user"
                        :partner-et="$partnerEt"
                        :event-types="$eventTypes"/>
                </x-dashboard.card>
            </div>

        </x-tab.item>

        <x-tab.item>
            <x-dashboard.profile.contact/>
        </x-tab.item>

    </x-partner-category-tab>
</div>
