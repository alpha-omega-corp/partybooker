<x-card :title="__('dashboard.adverts')">
    @include('app.partner.partials.adverts.create')

    @foreach($partner->company->adverts as $advert)
        <div x-data="{show: false}" class="partner-advert">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column">
                    <x-adverts.link :advert="$advert">
                        <h6 class="partner-advert-title">{{$advert->title}}</h6>
                    </x-adverts.link>

                    <x-adverts.category :advert="$advert"/>
                </div>

                <div class="partner-advert-actions">
                    @include('app.partner.partials.adverts.edit')
                    @include('app.partner.partials.adverts.delete')
                </div>
            </div>

            <hr>

            <div x-show="show">
                @include('app.listing.partials.advert', [
                   'advert' => $advert,
               ])
            </div>

            <div class="partner-advert-show" @click="show = !show">
                <a x-show="!show">{{__('dashboard.show')}}</a>
                <a x-show="show">{{__('dashboard.close')}}</a>
            </div>
        </div>
    @endforeach
</x-card>
