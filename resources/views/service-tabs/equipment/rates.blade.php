<x-service.list>
    <h6 class="text-uppercase">{{__('service.rates')}}</h6>

    <x-service.list-item :title="__('partner.budget')">
        {{$partner->budget ? \App\Helpers\BudgetsHelper::getDescription($partner->budget) : "" }}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.booking_deposit')">
        {{$details->deposit ?? ''}}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.payment_methods')">
        @foreach ( json_decode($details->paymeny) ?? [] as $payment)
            @if (strlen($payment) > 0)
                {{\App\Helpers\PaymentMethodsTranslatorHelper::translate($payment)}}<span class="coma">,&nbsp;</span>
            @endif
        @endforeach
        {{$details->other_payment ?? ''}}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.delivery_charge')">
        {{$details->delivery}}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.additional_expenses')">
        {{$details->expences}}
    </x-service.list-item>
</x-service.list>

