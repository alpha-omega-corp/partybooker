<!-- Create Advert -->
@if($plan->advert_count > count($partner->company->adverts))
    @include('app.partner.partials.adverts.create')
@endif

@foreach($partner->company->adverts as $advert)
    <div x-data="{show: false}" class="partner-advert" x-bind:class="show ? 'border border-accent' : ''">
        <div class="partner-advert-header">
            <h6 class="partner-advert-title">
                @if($advert->locale)
                    {{$advert->locale->title}}
                @else
                    {{$advert->slug}}
                @endif
            </h6>

            <!-- Actions -->
            <div class="partner-advert-actions">
                @include('app.partner.partials.adverts.status')
                @include('app.partner.partials.adverts.delete')
            </div>
        </div>

        <hr>

        <!-- Advert Content -->
        <div x-show="show">
            <div class="partner-advert-content">
                <x-tab :items="[
                    __('advert.content'),
                    __('advert.description'),
                    __('advert.gallery'),
                    __('advert.access'),
                    __('advert.meta'),
                    __('advert.statistics')
                    ]">
                    <!-- Content -->
                    <x-tab.item :information="__('advert.information.content')">
                        <x-slot:header>
                            @include('app.partner.partials.adverts.content.edit')
                        </x-slot:header>

                        @include('app.partner.partials.adverts.content.show', ['advert' => $advert])
                    </x-tab.item>

                    <!-- Description -->
                    <x-tab.item :information="__('advert.information.description')" :padding="false">
                        <x-slot:header>
                            @include('app.partner.partials.adverts.description.edit')
                        </x-slot:header>

                        @include('app.partner.partials.adverts.description.show', ['advert' => $advert])
                    </x-tab.item>

                    <!-- Gallery -->
                    <x-tab.item :information="__('advert.information.gallery')">
                        <x-slot:header>
                            @include('app.partner.partials.adverts.gallery.create')
                        </x-slot:header>

                        @include('app.partner.partials.adverts.gallery.show', ['advert' => $advert])
                    </x-tab.item>

                    <!-- Access -->
                    <x-tab.item :information="__('advert.information.access')">
                        <x-slot:header>
                            @include('app.partner.partials.adverts.access.edit')
                        </x-slot:header>

                        @include('app.partner.partials.adverts.access.show', ['advert' => $advert])
                    </x-tab.item>

                    <!-- Meta -->
                    <x-tab.item :information="__('advert.information.meta')" :padding="false">
                        <x-slot:header>
                            @include('app.partner.partials.adverts.meta.edit')
                        </x-slot:header>

                        @include('app.partner.partials.adverts.meta.show', ['advert' => $advert])
                    </x-tab.item>

                    <!-- Statistics -->
                    <x-tab.item :information="__('advert.information.statistics')">
                        @include('app.partner.partials.adverts.statistics')
                    </x-tab.item>
                </x-tab>
            </div>
        </div>

        <div class="card-show" @click="show = !show">
            <div>
                <a x-show="!show">{{__('card.show')}}</a>
                <a x-show="show">{{__('card.close')}}</a>
            </div>

            <x-advert.category :advert="$advert"/>
        </div>
    </div>
@endforeach

