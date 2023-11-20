@php use App\Helpers\PaymentMethodsTranslatorHelper; @endphp
@props([
    'details',
])


<x-service.list-item :title="__('partner.payment_methods')">

    <div class="d-flex flex-wrap mb-1">
        @if(json_decode($details->paymeny))
            @foreach (json_decode($details->paymeny) as $payment)
                @if($payment !== 'other' && strlen($payment) > 0)
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
        @endif
        @if(json_decode($details->other_payment))
            @foreach (json_decode($details->other_payment) as $payment)
                <div class="advert-payment-method-item">
                    <div>
                        <p class="m-0">
                            {{$payment}}
                        </p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</x-service.list-item>

