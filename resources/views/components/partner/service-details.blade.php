@props(['partner', 'advert', 'iterator'])

<div class="partner-advert">
    <div class="partner-advert-card">
        <x-tab.index :tabs="[
                __('service.general_info'),
                __('service.schedule'),
                __('service.rates'),
                __('service.video')]" :icons="[
                'heroicon-o-information-circle',
                'heroicon-o-clock',
                'heroicon-o-currency-dollar',
                'heroicon-o-video-camera',
            ]">

            <!-- Information -->
            <x-tab.item>
                <div class="position-relative">
                    @switch($advert->view_name)
                        @case('event-place')
                            <x-service.event-place.general :details="$advert->service">
                                <x-slot:editGeneral>
                                    @include('web.partner.advert.popups.event-places.edit-general', [
                                    'iterator' => $iterator,
                                    'advert' => $advert
                                    ])
                                </x-slot:editGeneral>

                                <x-slot:editCatering>
                                    @include('web.partner.advert.popups.event-places.edit-catering', ['advert' => $advert])
                                </x-slot:editCatering>

                                <x-slot:editOther>
                                    @include('web.partner.advert.popups.event-places.edit-other', ['iterator' => $iterator])
                                </x-slot:editOther>
                            </x-service.event-place.general>
                            @break
                        @case('entertainment')
                            <x-service.entertainment.general :details="$advert->service">
                                <x-slot:editGeneral>
                                    @include('web.partner.advert.popups.entertainment.edit-general', [
                                    'iterator' => $iterator,
                                    'advert' => $advert
                                    ])
                                </x-slot:editGeneral>
                            </x-service.entertainment.general>
                            @break
                        @case('caterer')
                            <x-service.caterer.general :details="$advert->service">
                                <x-slot:editGeneral>
                                    @include('web.partner.advert.popups.caterer.edit-general', [
                                    'iterator' => $iterator,
                                    'advert' => $advert
                                    ])
                                </x-slot:editGeneral>

                                <x-slot:editSpecialties>
                                    @include('web.partner.advert.popups.caterer.edit-specialties', [
                                    'iterator' => $iterator,
                                    'advert' => $advert
                                    ])
                                </x-slot:editSpecialties>

                                <x-slot:editOther>
                                    @include('web.partner.advert.popups.caterer.edit-other', [
                                    'iterator' => $iterator,
                                    'advert' => $advert
                                    ])
                                </x-slot:editOther>
                            </x-service.caterer.general>
                            @break
                        @case('equipment')
                            <x-service.equipment.general :details="$advert->service">
                                @include('web.partner.advert.popups.equipment.edit-general', [
                                'iterator' => $iterator,
                                'advert' => $advert
                                ])
                            </x-service.equipment.general>
                            @break
                        @case('wine')
                            <x-service.wine.general :details="$advert->service">
                                @include('web.partner.advert.popups.wine.edit-general', [
                                'iterator' => $iterator,
                                'advert' => $advert
                                ])
                            </x-service.wine.general>
                            @break
                    @endswitch

                </div>
            </x-tab.item>

            <!-- Schedule -->
            <x-tab.item>
                @switch($advert->view_name)
                    @case('event-place')
                        <x-service.event-place.schedule :details="$advert->service">
                            @include('web.partner.advert.popups.event-places.edit-schedule', ['advert' => $advert])
                        </x-service.event-place.schedule>
                        @break
                    @case('entertainment')
                        <x-service.entertainment.schedule :details="$advert->service">
                            @include('web.partner.advert.popups.entertainment.edit-schedule', ['advert' => $advert])
                        </x-service.entertainment.schedule>
                        @break
                    @case('caterer')
                        <x-service.caterer.schedule :details="$advert->service">
                            @include('web.partner.advert.popups.caterer.edit-schedule', ['advert' => $advert])
                        </x-service.caterer.schedule>
                        @break
                    @case('equipment')
                        <x-service.equipment.schedule :details="$advert->service">
                            @include('web.partner.advert.popups.equipment.edit-schedule', ['advert' => $advert])
                        </x-service.equipment.schedule>
                        @break
                    @case('wine')
                        <x-service.wine.schedule :details="$advert->service">
                            @include('web.partner.advert.popups.wine.edit-schedule', [
                            'iterator' => $iterator,
                            'advert' => $advert
                            ])
                        </x-service.wine.schedule>
                        @break
                @endswitch
            </x-tab.item>

            <!-- Rates -->
            <x-tab.item>
                @switch($advert->view_name)
                    @case('event-place')
                        <x-service.event-place.rates :details="$advert->service">
                            @include('web.partner.advert.popups.event-places.edit-rates', ['advert' => $advert])
                        </x-service.event-place.rates>
                        @break
                    @case('entertainment')
                        <x-service.entertainment.rates :details="$advert->service">
                            @include('web.partner.advert.popups.entertainment.edit-rates', ['advert' => $advert])
                        </x-service.entertainment.rates>
                        @break
                    @case('caterer')
                        <x-service.caterer.rates :details="$advert->service">
                            @include('web.partner.advert.popups.caterer.edit-rates', ['advert' => $advert])
                        </x-service.caterer.rates>
                        @break
                    @case('equipment')
                        <x-service.equipment.rates :details="$advert->service">
                            @include('web.partner.advert.popups.equipment.edit-rates', ['advert' => $advert])
                        </x-service.equipment.rates>
                        @break
                    @case('wine')
                        <x-service.wine.rates :details="$advert->service">
                            @include('web.partner.advert.popups.wine.edit-rates', [
                            'iterator' => $iterator,
                            'advert' => $advert
                            ])
                        </x-service.wine.rates>
                        @break
                @endswitch
            </x-tab.item>

            <!-- Video -->
            <x-tab.item>
                <div class="p-4">
                    @if ($partner->youtube)
                        <iframe
                            src="{{ 'https://www.youtube.com/embed/' . $partner->youtube }}"
                            style="width: 100%; height: 400px"></iframe>
                    @endif
                    @if ($partner->vimeo)
                        <iframe
                            src="{{ str_replace('https://vimeo.com/', 'https://player.vimeo.com/video/', $partner->vimeo) }}"
                            style="width: 100%; height: 400px">
                        </iframe>
                    @endif
                </div>

            </x-tab.item>
        </x-tab.index>
    </div>
</div>
