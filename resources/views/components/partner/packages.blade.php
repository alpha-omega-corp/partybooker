@props([
    'plans'
])

@php
    $priceId = null;
@endphp
<x-dashboard.payment-methods/>

<div class="d-flex justify-content-between">
    @foreach($plans as $plan)
        @if (!in_array(strtolower($plan->name), ['basic', 'commission', 'vip']))
            <div class="become-partner">
                <div class="packages">
                    @switch($plan->name)
                        @case('standart')
                            @php($priceId = 'price_1O55sIFdJurpbLhhQitFnSRD')
                            @break
                        @case('premium')
                            @php($priceId = 'price_1O55sIFdJurpbLhhXRnnW9v5')
                            @break
                        @case('exclusif')
                            @php($priceId = 'price_1O55sIFdJurpbLhhCczgkpbt')
                            @break
                    @endswitch
                 
                    <x-partner.package :plan="$plan" :price-id="$priceId"/>
                </div>
            </div>
        @endif
    @endforeach
</div>

