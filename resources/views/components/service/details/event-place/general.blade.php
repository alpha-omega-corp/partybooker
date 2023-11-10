<x-service.list>
    <x-service.details.event-place.general-information :details="$details"/>

    <x-service.details.event-place.general-catering :details="$details"/>

    <x-service.details.event-place.general-other :details="$details"/>
    
    <x-service.comment :value="$details->comment"/>

</x-service.list>


