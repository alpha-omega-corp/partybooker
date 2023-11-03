@props([
    'tooltip',
    'icon'
])
<div class="company-info-item" data-tippy-content="{{$tooltip}}">
    @svg($icon)
    {{$slot}}
</div>
