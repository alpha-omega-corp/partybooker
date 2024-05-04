@props([
    'title' => null,
    'color' => AppColor::BLUE,
    'badge' => null,
    'open' => false,
    'invertClose' => false,
    'canOpen' => true,
    'center' => false,
    'actionable' => false,
    'radius' => false,
])

<div {{$attributes->merge(['class' => 'app-card ' . ($radius ? 'app-card-radius' : '')])}}
     x-data="{show: '{{!$canOpen ? true : $open}}'}">

    @if($title)
        <div class="app-card-header">
            <h2 @class([
            'app-card-title',
            'text-center' => $center,
            'text-'.$color->value
            ])>
                {{$title}}
            </h2>

            @if(isset($actions) && $actionable)
                <div class="app-card-actions">
                    {{$actions}}
                </div>
            @endif
        </div>
    @endif

    @if($badge)
        <div class="d-flex align-items-start justify-content-start">
            <div class="app-card-badge">
                {{$badge}}
            </div>
        </div>
    @endif

    <div x-show="show" class="app-card-content bg-white {{$canOpen ? 'app-card-content-border' : ''}}">
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
    'd-flex justify-content-center' => $center,
])  @click="show = !show">
        <div>
            <a x-show="!show">{{__('card.show')}}</a>
            <a x-show="show">{{__('card.close')}}</a>
        </div>
    </div>

</div>


