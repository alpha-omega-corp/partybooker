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
                            <x-service.details.event-place.general :details="$advert->service"/>
                            @break
                        @case('entertainment')
                            <x-service.details.entertainment.general :details="$advert->service">
                                <x-slot:editGeneral>
                                    @include('web.partner.advert.popups.entertainment.edit-general', [
                                    'iterator' => $iterator,
                                    'advert' => $advert
                                    ])
                                </x-slot:editGeneral>
                            </x-service.details.entertainment.general>
                            @break
                        @case('caterer')
                            <x-service.details.caterer.general :details="$advert->service">
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
                            </x-service.details.caterer.general>
                            @break
                        @case('equipment')
                            <x-service.details.equipment.general :details="$advert->service">
                                @include('web.partner.advert.popups.equipment.edit-general', [
                                'iterator' => $iterator,
                                'advert' => $advert
                                ])
                            </x-service.details.equipment.general>
                            @break
                        @case('wine')
                            <x-service.details.wine.general :details="$advert->service">
                                @include('web.partner.advert.popups.wine.edit-general', [
                                'iterator' => $iterator,
                                'advert' => $advert
                                ])
                            </x-service.details.wine.general>
                            @break
                    @endswitch

                </div>
            </x-tab.item>

            <!-- Schedule -->
            <x-tab.item>
                @switch($advert->view_name)
                    @case('event-place')
                        <x-service.details.event-place.schedule :details="$advert->service">
                        </x-service.details.event-place.schedule>
                        @break
                    @case('entertainment')
                        <x-service.details.entertainment.schedule :details="$advert->service">
                            @include('web.partner.advert.popups.entertainment.edit-schedule', ['advert' => $advert])
                        </x-service.details.entertainment.schedule>
                        @break
                    @case('caterer')
                        <x-service.details.caterer.schedule :details="$advert->service">
                            @include('web.partner.advert.popups.caterer.edit-schedule', ['advert' => $advert])
                        </x-service.details.caterer.schedule>
                        @break
                    @case('equipment')
                        <x-service.details.equipment.schedule :details="$advert->service">
                            @include('web.partner.advert.popups.equipment.edit-schedule', ['advert' => $advert])
                        </x-service.details.equipment.schedule>
                        @break
                    @case('wine')
                        <x-service.details.wine.schedule :details="$advert->service">
                            @include('web.partner.advert.popups.wine.edit-schedule', [
                            'iterator' => $iterator,
                            'advert' => $advert
                            ])
                        </x-service.details.wine.schedule>
                        @break
                @endswitch
            </x-tab.item>

            <!-- Rates -->
            <x-tab.item>
                @switch($advert->view_name)
                    @case('event-place')
                        <x-service.details.event-place.rates :details="$advert->service">
                        </x-service.details.event-place.rates>
                        @break
                    @case('entertainment')
                        <x-service.details.entertainment.rates :details="$advert->service">
                            @include('web.partner.advert.popups.entertainment.edit-rates', ['advert' => $advert])
                        </x-service.details.entertainment.rates>
                        @break
                    @case('caterer')
                        <x-service.details.caterer.rates :details="$advert->service">
                            @include('web.partner.advert.popups.caterer.edit-rates', ['advert' => $advert])
                        </x-service.details.caterer.rates>
                        @break
                    @case('equipment')
                        <x-service.details.equipment.rates :details="$advert->service">
                            @include('web.partner.advert.popups.equipment.edit-rates', ['advert' => $advert])
                        </x-service.details.equipment.rates>
                        @break
                    @case('wine')
                        <x-service.details.wine.rates :details="$advert->service">
                            @include('web.partner.advert.popups.wine.edit-rates', [
                            'iterator' => $iterator,
                            'advert' => $advert
                            ])
                        </x-service.details.wine.rates>
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
