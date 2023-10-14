<x-service.list>
    <h6 class="text-uppercase">{{__('service.schedule')}}</h6>

    <x-service.holidays :details="$details->holidays"/>
    <x-service.extension :details="$details"/>

</x-service.list>

