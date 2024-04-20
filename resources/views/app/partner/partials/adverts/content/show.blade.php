<x-card
    :open="true"
    :center="true"
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
            @include('app.listing.partials.service.partials.description')
        </x-tab.item>

        <x-tab.item :padding="false">
            @include('app.listing.partials.advert.service', ['content' => $advert->service->serviceable])
        </x-tab.item>

        <x-tab.item :padding="false">
            @include('app.listing.partials.service.partials.schedule', ['schedule' => $advert->service->schedule])
        </x-tab.item>

        <x-tab.item :padding="false">
            @include('app.listing.partials.service.partials.payments')
        </x-tab.item>

    </x-tab.index>
</x-card>
