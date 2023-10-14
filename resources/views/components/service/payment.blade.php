@php use App\Helpers\PaymentMethodsTranslatorHelper; @endphp
@props([
    'details',
])

<x-service.list-item :title="__('partner.payment_methods')">
    @if(isset($details->paymeny))
        <p>
            @foreach (json_decode($details->paymeny) as $payment)
                <span class="d-flex align-items-center">

                        <img src="{{Vite::image($payment . '.svg')}}" alt="{{$payment}}" class="payment-icon"/>

                        <span>
                            {{PaymentMethodsTranslatorHelper::translate($payment)}}
                        </span>
                    </span>
            @endforeach
        </p>
    @endif
</x-service.list-item>
