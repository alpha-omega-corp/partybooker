@props([
    'title',
])

<li>
    <span class="text-uppercase fw-bold">
        {{$title}}
    </span>
    <br>
    {{$slot}}

    <hr>
</li>
