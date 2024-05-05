@php($social = $partner->company->social)

<x-card.index :title="__('partner.socials')" :can-open="false" class="partner-dashboard-card">
    @include('app.partner.partials.socials.edit')


    <x-icon.text :text="$social->www" :icon="$linkIcon"/>
    <x-icon.link :link="$social->instagram">
        <img src="{{Vite::social('instagram')}}" alt="instagram">
    </x-icon.link>

    <x-icon.link :link="$social->facebook">
        <img src="{{Vite::social('facebook')}}" alt="facebook">
    </x-icon.link>

    <x-icon.link :link="$social->twitter">
        <img src="{{Vite::social('twitter')}}" alt="twitter">
    </x-icon.link>

    <x-icon.link :link="$social->linkedin">
        <img src="{{Vite::social('linkedin')}}" alt="linkedin">
    </x-icon.link>
</x-card.index>






