@props([
    'information'
])

<div class="app-information-item">
    <h6>
        {{$information->locale->title}}
    </h6>

    <p>
        {!! $information->locale->content !!}
    </p>
</div>
