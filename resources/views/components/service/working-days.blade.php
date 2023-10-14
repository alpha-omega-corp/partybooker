@props(['days'])

<x-service.list-item :title="__('partner.working_days')">
    <p>
        @foreach (json_decode($days)??[] as $day)
            @if (strlen($day) > 0)
                {{__('days.'.$day)}}
            @endif
        @endforeach
    </p>
</x-service.list-item>
