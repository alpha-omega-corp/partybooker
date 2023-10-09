@php use App\Helpers\SimpleTranslateHelper; @endphp
<x-service.list>
    <h6 class="text-uppercase">{{__('service.schedule')}}</h6>

    <x-service.list-item :title="__('partner.working_days')">
        @php($days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'])

        <br>

        @foreach($days as $day)
            <div class="text-uppercase d-flex flex-column">
                <div class="d-flex">
                    @if(in_array(substr($day, 0, 3), json_decode($details->working_days)))
                        <x-service.list-bool :value="true"/>
                    @else
                        <x-service.list-bool :value="false"/>
                    @endif
                    <span class="p-1">
                        {{__('days.' . substr($day, 0, 3))}}
                    </span>
                </div>
            </div>
        @endforeach


    </x-service.list-item>

    <x-service.list-item :title="__('partner.opening_hours')">
        @if($details->working_time)
            @foreach(json_decode($details->working_time) as $time)
                <p>
                    {{$time->description}}
                </p>

                <p>
                    {{$time->open}} -
                    {{$time->close}}
                </p>

            @endforeach
        @endif
    </x-service.list-item>

    <x-service.list-item :title="__('partner.annual_holidays')">
        <p>{{$details->holidays}}</p>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.possibility_extend_time')">
        {{$details ? SimpleTranslateHelper::translate($details->extansion) : ''}}
        @if (isset($details) && !is_null($details->ext_true))
            <p>{{$details->ext_true}}</p>
        @endif
    </x-service.list-item>
</x-service.list>

