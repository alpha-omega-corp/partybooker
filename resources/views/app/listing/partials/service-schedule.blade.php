@php use Illuminate\Support\Carbon; @endphp
<div class="service-schedule">

    <div class="w-100">
        <x-card.service :title="__('service.section.schedule')">
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
        </x-card.service>
    </div>

    <div class="w-100">
        <x-card.service :title="__('service.section.schedule.holidays')">
            <ul class="service-schedule-holidays">
                @foreach($advert->service->schedule->holidays as $holiday)
                    <li>
                        <div class="d-flex justify-content-between">
                            <span>{{Carbon::parse($holiday['start'])->locale(app()->getLocale())->isoFormat('LL')}}</span>
                            <span>{{Carbon::parse($holiday['end'])->locale(app()->getLocale())->isoFormat('LL')}}</span>
                        </div>

                    </li>
                @endforeach
            </ul>
        </x-card.service>

        <x-card.service :title="__('service.section.schedule.extension')" :padding="true">
            @if($advert->service->schedule->has_extension)
                <p>{{$advert->service->schedule->extension_description}}</p>
            @else
                <p>{{__('advert.no_extension')}}</p>
            @endif
        </x-card.service>
    </div>
</div>
