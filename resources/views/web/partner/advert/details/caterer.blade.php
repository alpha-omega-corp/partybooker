<ul class="serviceDetails{{$iterator}}">
	<li block="serviceDetails{{$iterator}}"><h4>{{__('partner.service_details')}} #{{$iterator}}</h4> {{__('service.for')}} {{__('service.'.$advert->view_name)}}</li>
	<li class="li"><span>{{__('partner.annual_holidays')}}:</span></li>
	<li class="li">{{$advert->service->holidays}}</li>
	<li class="li schedule"><a href="#" class="button" data-db="{{$iterator}}">{{__('partner.edit')}}</a></li>
	
	<li class="li"><h6>{{__('partner.rates_conditions')}}</h6></li>
{{--	<li class="li"><span>{{__('partner.price')}}:</span> {{$user->partnerInfo->price}} @if($advert->service->price_for == 'other'){{$advert->service->other_price}}@else {{__('partner.'.$advert->service->price_for)}}@endif</li>--}}
	<li class="li"><span>{{__('partner.budget')}}:</span> {{\App\Helpers\BudgetsHelper::getDescription($user->partnerInfo->budget)}}</li>
	<li class="li"><span>{{__('partner.booking_deposit')}}:</span> {{$advert->service->deposit}}</li>
	<li class="li"><span>{{__('partner.payment_methods')}}:</span></li>
	<li class="li">
		@foreach (json_decode($advert->service->paymeny) ?? [] as $payment)
			@if (strlen($payment) > 0)
				{{\App\Helpers\PaymentMethodsTranslatorHelper::translate($payment)}}<span class="coma">,&nbsp;</span>
			@endif
		@endforeach
	</li>
	<li class="li">{{$advert->service->other_payment}}</li>
	<li class="li"><span>{{__('partner.payment_terms')}}</span></li>
	<li class="li">{{$advert->service->p_terms}}</li>
	<li class="li rates"><a href="#" class="button" data-db="{{$iterator}}">{{__('partner.edit')}}</a></li>
	
	<li class="li"><h6>{{__('partner.edit_service_general_info')}}</h6></li>
	<li class="li"><span>{{__('partner.geographical_limit')}}: </span> {{$advert->service->geo}}</li>
	<li class="li"><span>{{__('partner.min_max_guests')}}:</span> {{__('partner.from')}} {{$advert->service->min_guests}} @if($advert->service->max_guests) {{__('partner.to')}} {{$advert->service->max_guests}} @endif</li>
	<li class="li"><span>{{__('partner.smood_ch_link')}}:</span> <a href="{{$advert->service->smood}}" target="_blank">{{$advert->service->smood}}</a></li>
	<li class="li general"><a href="#" class="button" data-db="{{$iterator}}">{{__('partner.edit')}}</a></li>

	<li class="li"><h6>{{__('partner.specialties')}}</h6></li>
	<li class="li"><span>{{__('partner.specialties')}}:</span> {{$advert->service->specialities}}</li>
	<li class="li"><span>{{__('partner.menus')}}:</span></li>
	@if ($advert->service->menu)
		@foreach (json_decode($advert->service->menu) ?? [] as $menu)
			<li class="li files">
				<div class="del" data-file="{{$menu}}" data-id="{{$advert->service->id}}" data-type="menu">x</div>
				<a href="{{ asset('storage/menus/'.$menu)}}" target="blank">{{$menu}}</a>
			</li>
		@endforeach
	@endif
	<li class="li specialties"><a href="#" class="button" data-db="{{$iterator}}">{{__('partner.edit')}}</a></li>

	<li class="li"><h6>{{__('partner.other_services')}}</h6></li>
	<li class="li"><span>{{__('partner.logistics_service')}}:</span>
		@foreach (json_decode($advert->service->logistic) ?? [] as $logistic)
			@if (strlen($logistic) > 0)
				{{\App\Helpers\LogisticsTranslatorHelper::translate($logistic)}}<span class="coma">,&nbsp;</span>
			@endif
		@endforeach
	</li>
	<li class="li"><span>{{__('partner.staff')}}:</span>
		@foreach (json_decode($advert->service->staff) ?? [] as $staff)
			@if (strlen($staff) > 0)
				{{\App\Helpers\StaffTranslatorHelper::translate($staff)}}<span class="coma">,&nbsp;</span>
			@endif
		@endforeach
	</li>
	<li class="li"><span>{{__('partner.tableware')}}:</span>
		@foreach (json_decode($advert->service->tableware) ?? [] as $tableware)
			@if (strlen($tableware) > 0)
				{{\App\Helpers\TablewareTranslatorHelper::translate($tableware)}}<span class="coma">,&nbsp;</span>
			@endif
		@endforeach
	</li>
	<li class="li"><span>{{__('partner.furnishing_equipment')}}:</span>
		@foreach (json_decode($advert->service->furnishing) ?? [] as $furnishing)
			@if (strlen($furnishing) > 0)
				{{\App\Helpers\FurnishingTranslatorHelper::translate($furnishing)}}<span class="coma">,&nbsp;</span>
			@endif
		@endforeach
	</li>
	<li class="li"><span>{{__('partner.decoration_elements')}}:</span>
		@foreach (json_decode($advert->service->decoration)??[] as $decoration)
			@if (strlen($decoration) > 0)
				{{\App\Helpers\DecorationsTranslatorHelper::translate($decoration)}}<span class="coma">,&nbsp;</span>
			@endif
		@endforeach
	</li>
	<li class="li"><span>{{__('partner.office_equipment')}}:</span>
		@foreach (json_decode($advert->service->office)??[] as $office)
			@if (strlen($office) > 0)
				{{\App\Helpers\OfficeEquipmentTranslatorHelper::translate($office)}}<span class="coma">,&nbsp;</span>
			@endif
		@endforeach
	</li>
	<li class="li"><span>{{__('partner.other_service_facilities')}}:</span> {{$advert->service->other_services}}</li>
	<li class="li otherservice"><a href="#" class="button" data-db="{{$iterator}}">{{__('partner.edit')}}</a></li>
	
	<li class="li"><h6>{{__('partner.want_to_add_something')}}</h6></li>
	<li class="li"><span>{{__('partner.comments')}}:</span></li>
	<li class="li">{{$advert->service->comment}}</li>
	<li class="li comment"><a href="#" class="button" data-db="{{$iterator}}">{{__('partner.edit')}}</a></li>
</ul>
@include('web.partner.advert.popups.caterer.edit-schedule')
@include('web.partner.advert.popups.caterer.edit-rates')
@include('web.partner.advert.popups.caterer.edit-general')
@include('web.partner.advert.popups.caterer.edit-specialties')
@include('web.partner.advert.popups.caterer.edit-other')
@include('web.partner.advert.popups.edit-comment')
