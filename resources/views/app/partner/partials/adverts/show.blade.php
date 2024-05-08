<x-card.index
    :title="__('partner.adverts')"
    :can-open="false"
    class="partner-dashboard-card"
>

    @if($plan->advert_count > count($partner->company->adverts))

        <!-- Create Advert -->
        @include('app.partner.partials.adverts.create')
    @endif

    <x-accordion.index name="partnerAdverts">
        @foreach($partner->company->adverts as $advert)
            <x-accordion.item
                :name="$advert->category->id"
                accordion="partnerAdverts"
                :padding="false"
            >
                <x-slot:actions>
                    @include('app.partner.partials.adverts.status')
                    @include('app.partner.partials.adverts.delete')
                    @include('app.partner.partials.adverts.edit')
                </x-slot:actions>

                <x-slot:title>
                    <div class="partner-advert-header">
                        <x-advert.category :advert="$advert"/>
                        <h6 class="partner-advert-title">
                            {{$advert->locale->title}}
                        </h6>
                    </div>
                </x-slot:title>

                <x-slot:content>
                    <div class="partner-advert">
                        @php($advertLink = route(__('route.advert'), [
                            'company' => $advert->company,
                            'category' => $advert->category->locale,
                        ]))

                        @include('app.partner.partials.adverts.service')

                        <a href="{{$advertLink}}">
                            <x-icon.text :text="$advertLink" :icon="$linkIcon"/>
                        </a>

                    </div>
                </x-slot:content>
            </x-accordion.item>
        @endforeach
    </x-accordion.index>

</x-card.index>

