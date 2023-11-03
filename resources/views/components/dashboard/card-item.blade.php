@props([
    'title',
])

<li>
    <h6 class="text-uppercase fw-bold">
        {{$title}}
    </h6>

    {{$slot}}

    <hr>
</li>
