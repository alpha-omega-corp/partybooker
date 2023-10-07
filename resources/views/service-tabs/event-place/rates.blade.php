<x-service.list>
    <h6 class="text-uppercase">{{__('service.rates')}}</h6>

    <x-service.list-item :title="__('partner.price')">
        {{$partner->price}} CHF  @if($details->price_for == 'other') {{$details->other_price}} @else {{__('partner.'.$details->price_for)}} @endif
    </x-service.list-item>

    <x-service.list-item :title="__('partner.budget')">
        {{$partner->budget ? \App\Helpers\BudgetsHelper::getDescription($partner->budget) : "" }}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.booking_deposit')">
        {{$details->deposit ?? ''}}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.payment_methods')">
        {{$details->other_payment ?? ''}}
        @foreach ( json_decode($details->paymeny) ?? [] as $payment)
            @if (strlen($payment) > 0)
                {{\App\Helpers\PaymentMethodsTranslatorHelper::translate($payment)}}<span class="coma">,&nbsp;</span>
            @endif
        @endforeach
    </x-service.list-item>
</x-service.list>

