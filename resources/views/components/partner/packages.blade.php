@props([
    'plans'
])

@php
    $priceId = null;
@endphp

<div class="d-flex justify-content-around flex-wrap">
    @foreach($plans as $plan)
        @if(!in_array(strtolower($plan->name), ['commission', 'basic']))
            <div class="become-partner">
                <div class="packages">

                    <x-partner.package :plan="$plan"/>

                </div>
            </div>
        @endif
    @endforeach
</div>

