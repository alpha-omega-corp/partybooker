<x-card :title="__('advert.contacts')" :center="true" class="advert-contacts">
    <x-tab
        justify="center"
        :is-icon="true"
        :tooltips="[
            __('advert.phone'),
            __('advert.email'),
             __('advert.website'),
            __('advert.address')
        ]"
        :items="[
            $phoneIcon,
            $emailIcon,
            $linkIcon,
            $pinIcon
        ]">

        <x-advert.contact type="tel" :value="$advert->company->contact->phone"/>
        <x-advert.contact type="mailto" :value="$advert->company->contact->email"/>
        <x-advert.contact :value="$advert->company->social->www"/>

        @if($advert->company->location)
            <x-advert.contact :link="false" :value="$advert->company->location->address"/>
        @endif
    </x-tab>
</x-card>

