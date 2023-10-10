@php use App\Helpers\BudgetsHelper; @endphp
@php use App\Helpers\PaymentMethodsTranslatorHelper; @endphp
<x-service.list>
    <h6 class="text-uppercase">{{__('service.rates')}}</h6>

    @if(isset($partner->price))
        @if($partner->price)
            <x-service.list-item :title="''">
                <p>
                    @if($details->price_for == 'other')
                        {{$details->other_price}}
                    @else
                        {{__('partner.'.$details->price_for)}}
                    @endif
                </p>
            </x-service.list-item>
        @endif
    @endif


    <x-service.list-item :title="__('partner.payment_methods')">
        {{$details->other_payment ?? ''}}
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

    @if(isset($partner->budget))
        @if($partner->budget)
            <x-service.list-item :title="__('partner.budget')">
                <p>{{substr(BudgetsHelper::getDescription($partner->budget), 1, -1)}}F</p>
            </x-service.list-item>
        @endif

    @endif

    @if(isset($details->deposit)) @endif
    <x-service.list-item :title="__('partner.booking_deposit')">
        <p> {{$details->deposit}}</p>
    </x-service.list-item>


</x-service.list>

