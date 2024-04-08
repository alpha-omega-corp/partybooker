@php use App\Enums\TitleSize; @endphp
@props([
    'information'
])

<div class="information-card">
    <div class="information-card-header">
        <h6 class="information-card-title">
            {{$information->locale->title}}
        </h6>
    </div>

    <p>
        {!! $information->locale->content !!}
    </p>
</div>

