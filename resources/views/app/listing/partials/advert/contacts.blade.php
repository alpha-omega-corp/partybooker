<x-card :title="__('advert.contacts')" :can-open="false" :center="true" class="app-advert-contacts">

    <div class="pt-4">
        <x-tab
            justify="center"
            :is-icon="true"
            :tooltips="[
            __('advert.website'),
            __('advert.address'),
            'socials'
        ]"
            :items="[
            $linkIcon,
            $pinIcon,
            $linkIcon
        ]">

            <x-advert.contact :value="$advert->company->social->www"/>

            @if($advert->company->location)
                <x-advert.contact :link="false" :value="$advert->company->location->address"/>
            @endif

            <x-tab.item>
                @include('app.listing.partials.advert.socials')
            </x-tab.item>

        </x-tab>

    </div>
</x-card>



