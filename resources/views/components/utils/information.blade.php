@props([
    'information'
])

<div class="information-card">
    <div class="information-card-title">
        <h6>
            {{$information->locale->title}}
        </h6>
    </div>


    <p>
        {!! $information->locale->content !!}
    </p>
</div>
