<x-card
    :title="$advert->category->locale->title"
    :can-open="false"
    :color="AppColor::PINK"
>
    <div class="mt-4">
        <x-tab
            justify="center"
            :items="[
                __('advert.service'),
                __('advert.gallery'),
                __('advert.meta'),
            ]"
        >
            <!-- Content -->
            <x-tab.item :information="__('advert.service.content')" :padding="false">
                <x-slot:header>
                    @include('app.partner.partials.adverts.content.edit')
                </x-slot:header>

                <div class="partner-advert-content">
                    @include('app.partner.partials.adverts.content.show', ['advert' => $advert])
                </div>
            </x-tab.item>

            <!-- Gallery -->
            <x-tab.item :information="__('advert.service.gallery')">
                <x-slot:header>
                    @include('app.partner.partials.adverts.gallery.create')
                </x-slot:header>

                @include('app.partner.partials.adverts.gallery.show', ['advert' => $advert])
            </x-tab.item>

            <!-- Meta -->
            <x-tab.item :information="__('advert.service.meta')" :padding="false">
                <x-slot:header>
                    @include('app.partner.partials.adverts.meta.edit')
                </x-slot:header>

                @include('app.partner.partials.adverts.meta.show', ['advert' => $advert])
            </x-tab.item>
        </x-tab>
    </div>
</x-card>
