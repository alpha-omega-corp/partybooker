<x-utils.tab
    :icons="true"
    :tabs="[
         'heroicon-o-information-circle',
         'heroicon-o-clock',
         'heroicon-o-currency-dollar',
         'heroicon-o-video-camera'
     ]"
    :tooltips="[
        __('advert.information'),
        __('advert.schedule'),
        __('advert.price'),
        __('advert.video')
    ]">
    <x-utils.page>
        @include('app.listing.partials.service-detail', ['detail' => $advert->service->detail])
    </x-utils.page>

    <x-utils.page>
        @include('app.listing.partials.service-schedule', ['schedule' => $advert->service->schedule])
    </x-utils.page>

    <x-utils.page>
        @include('app.listing.partials.service-price', ['price' => $advert->service->price])
    </x-utils.page>
</x-utils.tab>
<hr>
