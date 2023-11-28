@props(['partner', 'advert', 'iterator'])

@if ($advert->status === 1)
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
                                <x-service.details.entertainment.general :details="$advert->service"/>
                                @break
                            @case('caterer')
                                <x-service.details.caterer.general :details="$advert->service"/>
                                @break
                            @case('equipment')
                                <x-service.details.equipment.general :details="$advert->service"/>
                                @break
                            @case('wine')
                                <x-service.details.wine.general :details="$advert->service"/>
                                @break
                        @endswitch

                    </div>
                </x-tab.item>

                <!-- Schedule -->
                <x-tab.item>
                    @switch($advert->view_name)
                        @case('event-place')
                            <x-service.details.event-place.schedule :details="$advert->service"/>
                            @break
                        @case('entertainment')
                            <x-service.details.entertainment.schedule :details="$advert->service"/>
                            @break
                        @case('caterer')
                            <x-service.details.caterer.schedule :details="$advert->service"/>
                            @break
                        @case('equipment')
                            <x-service.details.equipment.schedule :details="$advert->service"/>
                            @break
                        @case('wine')
                            <x-service.details.wine.schedule :details="$advert->service"/>
                            @break
                    @endswitch
                </x-tab.item>

                <!-- Rates -->
                <x-tab.item>
                    @switch($advert->view_name)
                        @case('event-place')
                            <x-service.details.event-place.rates :details="$advert->service"/>
                            @break
                        @case('entertainment')
                            <x-service.details.entertainment.rates :details="$advert->service"/>
                            @break
                        @case('caterer')
                            <x-service.details.caterer.rates :details="$advert->service"/>
                            @break
                        @case('equipment')
                            <x-service.details.equipment.rates :details="$advert->service"/>
                            @break
                        @case('wine')
                            <x-service.details.wine.rates :details="$advert->service"/>
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
@endif
