@props([
    'bg' => null,
])

<section class="{{$bg ? 'bg-'.$bg->value : ''}}">
    <div {{$attributes->merge(['class' => 'responsive-section'])}}>
        {{$slot}}
    </div>
</section>
