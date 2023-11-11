@props(['details'])

<x-service.list-item :title="__('partner.price')">
    <p>
        @if($details->price_for == 'other')
            {{$details->other_price}}
        @else
            {{ucfirst(__('partner.'.$details->price_for))}}
        @endif

        <span>: {{$details->price}}</span>
    </p>
</x-service.list-item>
