<x-service.list>
    <div class="position-relative">
        @if(isset($editGeneral))
            {{$editGeneral}}
        @endif
        <h6 class="text-uppercase">{{__('service.general_info')}}</h6>


        <x-service.list-item :title="__('partner.list_of_your_services')">

            <x-service.ul>
                @foreach(json_decode($details->services) as $item)
                    <li>
                        {{$item}}
                    </li>
                @endforeach
            </x-service.ul>

        </x-service.list-item>

        <x-service.list-item :title="__('partner.equipment_provided')">
            <x-service.ul>
                @foreach(json_decode($details->equipment) as $item)
                    <li>
                        {{$item}}
                    </li>
                @endforeach
            </x-service.ul>
        </x-service.list-item>

        <x-service.list-item :title="__('partner.equipment_not_included')">
            <x-service.ul>
                @foreach(json_decode($details->eq_not_incl) as $item)
                    <li>
                        {{$item}}
                    </li>
                @endforeach
            </x-service.ul>
        </x-service.list-item>


        <x-service.list-item :title="__('partner.number_of_participants')">
            <p>
                {{$details->participants ?? "" }}
            </p>
        </x-service.list-item>

        <x-service.list-item :title="__('partner.biography')">
            {!! json_decode($details->biography) !!}
        </x-service.list-item>

        <x-service.list-item :title="__('partner.references')">
            <x-service.ul>
                @foreach(json_decode($details->reference) as $item)
                    <li>
                        {{$item}}
                    </li>
                @endforeach
            </x-service.ul>
        </x-service.list-item>

        <x-service.list-item :title="__('partner.geographical_limit')">
            <p>
                {{$details->geo ?? "" }}
            </p>
        </x-service.list-item>

        <x-service.comment :value="$details->comment"/>
    </div>


</x-service.list>



