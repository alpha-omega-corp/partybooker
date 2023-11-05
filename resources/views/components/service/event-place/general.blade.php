<x-service.list>
    <x-service.event-place.general-information :details="$details">
        @if(isset($editGeneral))
            {{$editGeneral}}
        @endif
    </x-service.event-place.general-information>
    <x-service.event-place.general-catering :details="$details">
        @if(isset($editCatering))
            {{$editCatering}}
        @endif
    </x-service.event-place.general-catering>
    <x-service.event-place.general-other :details="$details">
        @if(isset($editOther))
            {{$editOther}}
        @endif
    </x-service.event-place.general-other>

    <x-service.comment :value="$details->comment"/>
</x-service.list>


