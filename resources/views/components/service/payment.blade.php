@php use App\Helpers\PaymentMethodsTranslatorHelper; @endphp
@props([
    'details',
])


<x-service.list-item :title="__('partner.payment_methods')">
    @if($details->paymeny)

        <div class="d-flex flex-wrap">
            @foreach (json_decode($details->paymeny) as $payment)
                @if($payment !== 'other')
                    <div class="advert-payment-method-item">
                        <img src="{{Vite::image(strtolower($payment) . '.svg')}}" alt="{{$payment}}"
                             class="payment-icon"/>
                        <div>
                            <p class="m-0">
                                {{PaymentMethodsTranslatorHelper::translate($payment)}}
                            </p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    @endif
    @if($details->other_payment)
        @foreach (json_decode($details->other_payment) as $payment)
            <p>{{$payment}}</p>
        @endforeach
    @endif
</x-service.list-item>

