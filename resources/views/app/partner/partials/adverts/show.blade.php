<x-card :title="__('dashboard.adverts')">

    @foreach($partner->company->adverts as $advert)
        <div x-data="{show: false}" class="partner-advert">
            <div class="partner-advert-header">
                <x-adverts.link :advert="$advert">
                    <h6 class="partner-advert-title">{{$advert->locale->title}}</h6>
                </x-adverts.link>

                <div class="partner-advert-actions">
                    @include('app.partner.partials.adverts.access')
                    @include('app.partner.partials.adverts.content')
                    @include('app.partner.partials.adverts.upload')
                    @include('app.partner.partials.adverts.edit')
                    @include('app.partner.partials.adverts.meta')
                    @include('app.partner.partials.adverts.status')
                    @include('app.partner.partials.adverts.delete')
                </div>
            </div>

            <hr>

            <div x-show="show">
                <div class="partner-advert-content">
                    <x-tab :pages="[
                    __('advert.content'),
                    __('advert.gallery'),
                    __('advert.description'),
                    __('advert.meta')
                    ]">
                        <x-tab.item>
                            @include('app.listing.partials.advert', ['advert' => $advert])
                        </x-tab.item>

                        <x-tab.item>
                            @include('app.partner.partials.adverts.gallery.show', ['advert' => $advert])
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

</x-card>


