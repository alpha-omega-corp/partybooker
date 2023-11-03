@props([
    'plans'
])

@php
    $priceId = null;
@endphp
<x-dashboard.payment-methods/>

<div class="d-flex justify-content-between">
    @foreach($plans as $plan)
        <div class="become-partner">
            <div class="packages">
                <x-partner.package :plan="$plan"/>
            </div>
        </div>
    @endforeach
</div>

