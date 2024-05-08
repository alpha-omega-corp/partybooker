@props([
    'value',
    'type' => null,
    'link' => true
])

<x-tab.item>
    <div class="contact-item">
        @if($link)
            <a href="{{$type ? $type . ':' . $value : $value}}">{{$value}}</a>
        @else
            <p>{{$value}}</p>
        @endif

    </div>
</x-tab.item>
