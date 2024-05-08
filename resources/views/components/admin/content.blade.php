@props([
    'content',
])

<div class="p-4">
    <h6 class="p-2 text-center text-uppercase text-blue fw-semibold">{{$content->locale->title}}</h6>
    <p class="text-center">
        {{$content->locale->content}}
    </p>
</div>
