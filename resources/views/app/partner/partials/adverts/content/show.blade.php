<x-tab.index
    :isIcon="true"
    :isVertical="true"
    :items="[
             $boxIcon,
             'heroicon-o-clock',
             'heroicon-o-currency-dollar',
         ]"
    :tooltips="[
            __('advert.service'),
            __('service.section.schedule'),
            __('service.section.price'),
        ]"
>
    <x-tab.item :padding="false">
        @include('app.listing.partials.advert.service')
    </x-tab.item>

    <x-tab.item :padding="false">
        @include('app.listing.partials.service.partials.schedule', [
            'center' => false,
            'canOpen' => false,
        ])
    </x-tab.item>

    <x-tab.item :padding="false">
        @include('app.listing.partials.service.partials.payments', [
            'center' => false,
            'canOpen' => false,
        ])
    </x-tab.item>
</x-tab.index>

