@props([
    'bg' => null,
    'padding' => true
])

<section {{$attributes->merge(['class' => 'responsive-section'])}} class="{{$bg ? 'bg-'. $bg->value : ''}}">
    {{$slot}}
</section>

