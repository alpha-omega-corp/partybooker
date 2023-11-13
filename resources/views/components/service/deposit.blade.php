<x-service.list-item :title="__('partner.booking_deposit')">
    @if($details === 'Non')
        <x-service.list-bool :value="false"/>
    @else
        <p>{{$details}}</p>
    @endif
</x-service.list-item>
