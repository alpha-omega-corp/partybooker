@props([
    'plans'
])

@php
    $priceId = null;
@endphp

<div class="d-flex justify-content-around flex-wrap">
    @foreach($plans as $plan)
        <div class="become-partner">
            <div class="packages">
                <x-partner.package :plan="$plan"/>
            </div>
        </div>
    @endforeach
</div>

