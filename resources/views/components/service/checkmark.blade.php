@props([
    'title',
    'data'
])


<div class="service-item service-checkmark">
    <h6>{{$title}}</h6>

    <span class="service-checkmark-content">
        @if($data)
            {{$data}}
        @else
            @svg('heroicon-o-no-symbol')
        @endif
    </span>
</div>
