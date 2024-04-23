<x-card :title="__('advert.contacts')" :center="true" class="advert-contacts">
    <x-tab
        justify="center"
        :is-icon="true"
        :tooltips="[
            __('advert.phone'),
            __('advert.email'),
             __('advert.website'),
            __('advert.socials'),
            __('advert.address')
        ]"
        :items="[
            $phoneIcon,
            $emailIcon,
            'heroicon-o-link',
            $linkIcon,
            $pinIcon
        ]">

        <x-advert.contact type="tel" :value="$advert->company->contact->phone"/>
        <x-advert.contact type="mailto" :value="$advert->company->contact->email"/>
        <x-advert.contact :value="$advert->company->social->www"/>

        <x-tab.item>

        </x-tab.item>
        <x-advert.contact :link="false" :value="$advert->company->address->address"/>
    </x-tab>
</x-card>

