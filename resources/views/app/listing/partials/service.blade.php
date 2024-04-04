<x-card
    :title="$advert->locale->title"
    :open="true"
    :invert-close="true"
>
    <x-tab.index
        :isIcon="true"
        :isVertical="true"
        :items="[
             $infoIcon,
             $boxIcon,
             'heroicon-o-clock',
             'heroicon-o-currency-dollar',
         ]"
        :tooltips="[
            __('advert.description'),
            __('advert.service'),
            __('service.section.schedule'),
            __('service.section.price'),
        ]"
    >
        <x-tab.item>
            @include('app.listing.partials.service-description', ['advert' => $advert])
        </x-tab.item>

        <x-tab.item :padding="false">
            @include('app.listing.partials.service-content', ['content' => $advert->service->serviceable])
        </x-tab.item>

        <x-tab.item :padding="false">
            @include('app.listing.partials.service-schedule', ['schedule' => $advert->service->schedule])
        </x-tab.item>

        <x-tab.item :padding="false">
            @include('app.listing.partials.service-price', ['price' => $advert->service->price])
        </x-tab.item>

    </x-tab.index>
</x-card>
