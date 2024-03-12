@props([
    'title' => null,
    'badge' => null,
    'expandable' => false,
])

<div class="app-card" x-data="{show: false}">
    <div class="app-card-header">
        <h2 class="app-card-title">
            {{$title}}
        </h2>
    </div>


    @if($badge)
        <div class="d-flex align-items-start justify-content-start">
            <div class="app-card-badge">
                {{$badge}}
            </div>
        </div>
    @endif

    <div x-show="show" {{$attributes->merge(['class' => 'app-card-content'])}}>
        {{$slot}}
    </div>

    <div class="card-show" @click="show = !show">
        <div>
            <a x-show="!show">{{__('card.show')}}</a>
            <a x-show="show">{{__('card.close')}}</a>
        </div>
    </div>

</div>


