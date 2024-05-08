@php use Illuminate\Support\Carbon; @endphp

@if($advert->service->schedule->days)
    <x-card :title="__('service.section.schedule')" :center="$center" :can-open="$canOpen" :radius="true">


        <x-accordion.index
            name="scheduleAccordion{{$advert->id}}"
        >
            @foreach($advert->service->schedule->days as $item)

                <x-accordion.item
                    :name="$item->id"
                    accordion="scheduleAccordion{{$advert->id}}"
                >

                    <x-slot:title>
                        <div class="d-flex gap-4">
                            @if($item->is_open)
                                @svg('heroicon-o-lock-open', 'text-primary')
                            @else
                                @svg('heroicon-o-lock-closed', 'text-danger')
                            @endif

                            <h6 class="service-schedule-day">{{__('service.day.' .$item->day)}}</h6>
                        </div>
                    </x-slot:title>

                    <x-slot:content>
                        @if($item->is_open)
                            <ul class="service-schedule-timetable">
                                @foreach($item->timetable as $daySchedule)
                                    <li>
                                        {{$daySchedule['open']}} - {{$daySchedule['close']}}
                                    </li>
                                @endforeach
                            </ul>

                        @else
                            <p>{{__('advert.schedule.closed')}}</p>
                        @endif
                    </x-slot:content>
                </x-accordion.item>
            @endforeach
        </x-accordion.index>

        <div class="service-schedule-extension">
            @if($advert->service->schedule->has_extension)
                <p>{{$advert->service->schedule->extension_description}}</p>
            @else
                <p>{{__('advert.no_extension')}}</p>
            @endif
        </div>

        <x-accordion.index
            name="scheduleHolidaysAccordion{{$advert->id}}"
        >
            <x-accordion.item
                :name="$advert->id"
                accordion="scheduleHolidaysAccordion"
            >
                <x-slot:title>
                    <h6>
                        {{__('service.section.schedule.holidays')}}
                    </h6>
                </x-slot:title>

                <x-slot:content>
                    @if($advert->service->schedule->holidays)
                        <ul class="service-schedule-holidays">
                            @foreach($advert->service->schedule->holidays as $item)
                                <li>
                                    <span>{{Carbon::parse($item['start'])->locale(app()->getLocale())->isoFormat('LL')}}</span>
                                    <span> - </span>
                                    <span>{{Carbon::parse($item['end'])->locale(app()->getLocale())->isoFormat('LL')}}</span>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </x-slot:content>
            </x-accordion.item>
        </x-accordion.index>
    </x-card>
@endif
