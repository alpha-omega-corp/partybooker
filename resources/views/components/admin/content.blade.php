@props([
    'content',
    'isHtml' => false
])

<div class="p-4">
    <h6 class="p-2 text-center text-uppercase text-blue fw-semibold">{{$content->locale->title}}</h6>
    <p class="text-center">
        @if($isHtml)
            {!! $content->locale->content !!}
        @else
            {{$content->locale->content}}
        @endif
    </p>
</div>
