@props([
    'title' => null,
    'badge' => null,
    'open' => false,
    'invertClose' => false,
    'canOpen' => true,
])

<div {{$attributes->merge(['class' => 'app-card'])}} x-data="{show: '{{!$canOpen ? true : $open}}'}">
    <div class="app-card-header" {{$canOpen ? '@click="show = !show"' : ''}}>
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

    <div x-show="show" class="app-card-content {{$canOpen ? 'app-card-content-border' : ''}}">
        {{$slot}}

        @if(isset($body))
            <div class="card-content-padded">
                {{$body}}
            </div>
        @endif

    </div>

    <div @class([
    'card-show',
    'justify-content-end' => $invertClose,
    'd-none' => !$canOpen,
])  @click="show = !show">
        <div>
            <a x-show="!show">{{__('card.show')}}</a>
            <a x-show="show">{{__('card.close')}}</a>
        </div>
    </div>

</div>


