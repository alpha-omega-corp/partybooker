@props(['days'])

<x-service.list-item :title="__('partner.working_days')">
    <div class="d-flex">
        @foreach (json_decode($days)??[] as $day)
            <p class="p-1">

                @if (strlen($day) > 0)
                    {{__('days.'.$day)}}
                @endif

            </p>
        @endforeach
    </div>
</x-service.list-item>
