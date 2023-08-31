<ul class="serviceDetails{{$iterator}}">
	<li block="serviceDetails{{$iterator}}"><h4>{{__('partner.service_details')}} #{{$iterator}}</h4>{{__('service.for')}} {{__('service.'.$advert->view_name)}} </li>
	<li class="li"><h6>{{__('partner.working_schedule')}}:</h6></li>
	<li class="li"><span>{{__('partner.working_days')}}:</span>
		@foreach (json_decode($advert->service->working_days) as $day)
			@if (strlen($day) > 0)
				{{__('days.'.$day)}}<span class="coma">,&nbsp;</span>
			@endif
		@endforeach
	</li>
	<li class="li"><span>{{__('partner.duration')}}:</span> {{$advert->service->duration}}</li>
	<li class="li"><span>{{__('partner.annual_holidays')}}:</span></li>
	<li class="li">{{$advert->service->holidays}}</li>
	<li class="li"><span>{{__('partner.possibility_extend_time')}}:</span></li>
	<li class="li">{{$advert->service->extansion}}</li>
	<li class="li">{{$advert->service->ext_true}}</li>
	<li class="li schedule"><a href="#" class="button" data-db="{{$iterator}}">{{__('partner.edit')}}</a></li>
	
	<li class="li"><h6>{{__('partner.rates_conditions')}}</h6></li>
{{--	<li class="li"><span>{{__('partner.price')}}:</span> {{$user->partnerInfo->price}} @if($advert->service->price_for == 'other'){{$advert->service->other_price}}@else {{__('partner.'.$advert->service->price_for)}} @endif</li>--}}
	<li class="li"><span>{{__('partner.budget')}}:</span>{{\App\Helpers\BudgetsHelper::getDescription($user->partnerInfo->budget)}}</li>
	<li class="li"><span>Deposit policy:</span> {{$advert->service->deposit}}</li>
	<li class="li"><span>{{__('partner.payment_methods')}}:</span></li>
	<li class="li">
		@foreach (json_decode($advert->service->paymeny) ?? [] as $payment)
			@if (strlen($payment) > 0)
				{{\App\Helpers\PaymentMethodsTranslatorHelper::translate($payment)}}<span class="coma">,&nbsp;</span>
			@endif
		@endforeach
	</li>
	<li class="li">{{$advert->service->other_payment}}</li>
	<li class="li"><span>{{__('partner.travelling_expenses')}}:</span> {{$advert->service->travelling_exp}}</li>
	<li class="li"><span>{{__('partner.additional_expenses')}}:</span> {{$advert->service->additional_exp}}</li>
	<li class="li rates"><a href="#" class="button" data-db="{{$iterator}}">{{__('partner.edit')}}</a></li>
	
	<li class="li"><h6>{{__('partner.edit_service_general_info')}}</h6></li>
	<li class="li"><span>{{__('partner.geographical_limit')}}:</span></li>
	<li class="li">{{$advert->service->geo}}</li>
	<li class="li"><span>{{__('partner.number_of_participants')}}:</span> {{$advert->service->participants}}</li>
	<li class="li"><span>{{__('partner.list_of_your_services')}}:</span></li>
	<li class="li">{{$advert->service->services}}</li>
	<li class="li"><span>{{__('partner.equipment_provided')}}:</span></li>
	<li class="li">{{$advert->service->equipment}}</li>
	<li class="li"><span>{{__('partner.equipment_not_included')}}:</span></li>
	<li class="li">{{$advert->service->eq_not_incl}}</li>
	<li class="li"><span>{{__('partner.biography')}}:</span></li>
	<li class="li">{{$advert->service->biography}}</li>
	<li class="li"><span>{{__('partner.references')}}:</span></li>
	<li class="li">{{$advert->service->reference}}</li>
	<li class="li general"><a href="#" class="button" data-db="{{$iterator}}">{{__('partner.edit')}}</a></li>
	
	<li class="li"><h6>{{__('partner.want_to_add_something')}}</h6></li>
	<li class="li"><span>{{__('partner.comments')}}:</span></li>
	<li class="li">{{$advert->service->comment}}</li>
	<li class="li comment"><a href="#" class="button" data-db="{{$iterator}}">{{__('partner.edit')}}</a></li>
</ul>
@include('web.partner.advert.popups.entertainment.edit-schedule')
@include('web.partner.advert.popups.entertainment.edit-rates')
@include('web.partner.advert.popups.entertainment.edit-general')
@include('web.partner.advert.popups.edit-comment')
