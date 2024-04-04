<x-card :title="__('advert.contacts')" class="advert-contacts" :can-open="false">
    <x-tab
        :is-icon="true"
        :tooltips="[
            __('advert.company'),
            __('advert.phone'),
            __('advert.email'),
            __('advert.website'),
            __('advert.address')
        ]"
        :items="[
            $companyIcon,
            $phoneIcon,
            $emailIcon,
            $linkIcon,
            $pinIcon
        ]">

        <x-tab.item>
            <div class="contact-item">
                {{$advert->company->name}}
            </div>
        </x-tab.item>

        <x-tab.item>
            <div class="contact-item">
                {{$advert->company->contact->phone}}
            </div>
        </x-tab.item>

        <x-tab.item>
            <div class="contact-item">
                {{$advert->company->contact->email}}
            </div>
        </x-tab.item>

        <x-tab.item>
            <div class="contact-item">
                {{$advert->company->social->www}}
            </div>
        </x-tab.item>

        <x-tab.item>
            <div class="contact-item">
                {{$advert->company->address->address}}
            </div>
        </x-tab.item>
    </x-tab>
</x-card>
