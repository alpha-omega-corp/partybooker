<x-card.index :title="__('dashboard.adverts')">

    @foreach($partner->company->adverts as $advert)
        <div x-data="{show: false}" class="partner-advert">
            <div class="partner-advert-header">
                <h6 class="partner-advert-title">{{$advert->locale->title}}</h6>

                <div class="partner-advert-actions">
                    @include('app.partner.partials.adverts.status')
                    @include('app.partner.partials.adverts.delete')
                </div>
            </div>

            <hr>

            <div x-show="show">
                <div class="partner-advert-content">
                    <x-tab :items="[
                    __('advert.access'),
                    __('advert.content'),
                    __('advert.gallery'),
                    __('advert.description'),
                    __('advert.meta')
                    ]">
                        <x-tab.item :information="__('advert.information.access')">
                            <x-slot:header>
                                @include('app.partner.partials.adverts.access.edit')
                            </x-slot:header>
                            @include('app.partner.partials.adverts.access.show', ['advert' => $advert])
                        </x-tab.item>

                        <x-tab.item :information="__('advert.information.content')">
                            <x-slot:header>
                                @include('app.partner.partials.adverts.content.edit')
                            </x-slot:header>
                            @include('app.partner.partials.adverts.content.show', ['advert' => $advert])
                        </x-tab.item>

                        <x-tab.item :information="__('advert.information.gallery')">
                            <x-slot:header>
                                @include('app.partner.partials.adverts.gallery.create')
                            </x-slot:header>
                            @include('app.partner.partials.adverts.gallery.show', ['advert' => $advert])
                        </x-tab.item>

                        <x-tab.item :information="__('advert.information.description')">
                            <x-slot:header>
                                @include('app.partner.partials.adverts.description.edit')
                            </x-slot:header>
                            @include('app.partner.partials.adverts.description.show', ['advert' => $advert])
                        </x-tab.item>

                        <x-tab.item :information="__('advert.information.meta')">
                            <x-slot:header>
                                @include('app.partner.partials.adverts.meta.edit')
                            </x-slot:header>
                            @include('app.partner.partials.adverts.meta.show', ['advert' => $advert])
                        </x-tab.item>
                    </x-tab>
                </div>
                <hr>
            </div>

            <div class="partner-advert-show" @click="show = !show">
                <div>
                    <a x-show="!show">{{__('dashboard.show')}}</a>
                    <a x-show="show">{{__('dashboard.close')}}</a>
                </div>
                <x-adverts.category :advert="$advert"/>
            </div>
        </div>
    @endforeach

</x-card.index>


