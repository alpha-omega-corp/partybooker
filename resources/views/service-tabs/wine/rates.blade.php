<h4>{{__('service.for')}} {{__('categories.cat4')}}</h4>
{{--<p><span>{{__('partner.price')}}:</span> {{$partner->price}} CHF @if($details->price_for == 'other') {{$details->other_price}} @else {{__('partner.'.$details->price_for)}} @endif</p>--}}
<p><span>{{__('partner.budget')}}:</span> {{$partner->budget ? \App\Helpers\BudgetsHelper::getDescription($partner->budget) : "" }}</p>
<p><span>{{__('partner.booking_deposit')}}:</span> {{$details->deposit ?? ''}}</p>
<p><span>{{__('partner.payment_methods')}}:</span>
		@foreach ( json_decode($details->paymeny) ?? [] as $payment)
			@if (strlen($payment) > 0)
				{{\App\Helpers\PaymentMethodsTranslatorHelper::translate($payment)}}<span class="coma">,&nbsp;</span>
			@endif
		@endforeach
	{{$details->other_payment ?? ''}}
</p>
