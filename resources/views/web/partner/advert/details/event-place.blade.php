<ul class="serviceDetails{{$iterator}}">
	<li block="serviceDetails{{$iterator}}"><h4>{{__('partner.service_details')}} #{{$iterator}}</h4> {{__('service.for')}} {{__('service.'.$advert->view_name)}} </li>
	<li class="li"><h6>{{__('partner.working_schedule')}}:</h6></li>
	<li class="li"><span>{{__('partner.working_days')}}:</span>
		@foreach (json_decode($advert->service->working_days)??[] as $day)
			@if (strlen($day) > 0)
				{{__('days.'.$day)}}<span class="coma">,&nbsp;</span>
			@endif
		@endforeach
	</li>
	@if($advert->service->opening || $advert->service->closing)
	<li class="li"><span>{{__('partner.opening_hours')}}:</span>
		{{$advert->service->opening}} - {{$advert->service->closing}}
	</li>
	@else
	<li class="li"><span>{{__('partner.opening_hours')}}:</span>
		@foreach(\json_decode($advert->service->working_time) ?? [] as $time)
		<p>{!! "<b>{$time->open} - {$time->close}</b> : {$time->description}"!!}</p>
		@endforeach
	</li>
	@endif
	<li class="li"><span>{{__('partner.annual_holidays')}}:</span></li>
	<li class="li">{{$advert->service->holidays}}</li>
	<li class="li"><span>{{__('partner.possibility_extend_time')}}:</span></li>
	<li class="li">{{$advert->service->extansion}}</li>
	<li class="li">{{$advert->service->ext_true}}</li>
	<li class="li schedule"><a href="#" class="button" data-db="{{$iterator}}">{{__('partner.edit')}}</a></li>

	<li class="li"><h6>{{__('partner.rates_conditions')}}</h6></li>
{{--	<li class="li"><span>{{__('partner.price')}}:</span> {{$user->partnerInfo->price}} CHF @if($advert->service->price_for == 'other') {{$advert->service->other_price}} @else {{__('partner.'.$advert->service->price_for)}} @endif</li>--}}
	<li class="li"><span>{{__('partner.budget')}}:</span>{{\App\Helpers\BudgetsHelper::getDescription($user->partnerInfo->budget)}}</li>
	<li class="li"><span>{{__('partner.booking_deposit')}}:</span> {{$advert->service->deposit}}</li>
	<li class="li"><span>{{__('partner.payment_methods')}}:</span></li>
	<li class="li">
		@foreach (json_decode($advert->service->paymeny)??[] as $payment)
			@if (strlen($payment) > 0)
				{{\App\Helpers\PaymentMethodsTranslatorHelper::translate($payment)}}<span class="coma">,&nbsp;</span>
			@endif
		@endforeach
	</li>
	<li class="li">{{$advert->service->other_payment}}</li>
	<li class="li rates"><a href="#" class="button" data-db="{{$iterator}}">{{__('partner.edit')}}</a></li>

	<li class="li"><h6>{{__('partner.edit_service_general_info')}}</h6></li>
	<li class="li"><span>{{__('partner.cocktail_reception_capacity')}}:</span> {{$advert->service->coctail}}</li>
	<li class="li"><span>{{__('partner.banquet_capacity')}}:</span> {{$advert->service->banquet}}</li>
	<li class="li"><span>{{__('partner.outdoor_facility')}}:</span> {{$advert->service->outdoor}}</li>
	<li class="li"><span>{{__('partner.sitting_schema')}}:</span>
		@foreach (json_decode($advert->service->sitting)??[] as $sitting)
			@if (strlen($sitting) > 0)
				{{$sitting}}<span class="coma">,&nbsp;</span>
			@endif
		@endforeach
	</li>
	<li class="li"><span>{{__('partner.conference_room')}}:</span></li>
	<li class="li">
		@foreach ($advert->service->room ?? [] as $room)
			{{__('partner.name')}}: {{$room['name']}}, {{strtolower(__('partner.capacity'))}}: {{$room['capacity']}}<span class="coma"><br></span>
		@endforeach
	</li>
	<li class="li"><span>{{__('partner.reduced_mobility_access')}}:</span> {{$advert->service->reduced_mob}}</li>
	<li class="li"><span>{{__('partner.car_park')}}:</span> {{$advert->service->car}}</li>
	<li class="li"><span>{{__('partner.Bar_dance_floor_stage')}}:</span></li>
	<li class="li">
		@foreach (json_decode($advert->service->facilities)??[] as $facilities)
			@if (strlen($facilities) > 0)
			{{\App\Helpers\BarDanceFloorTranslatorHelper::translate($facilities)}}<span class="coma">,&nbsp;</span>
			@endif
		@endforeach
	</li>
	<li class="li">{{$advert->service->oth_facilities}}</li>
	<li class="li"><span>{{__('partner.conveniences')}}:</span>
		@foreach (json_decode($advert->service->convenience)??[] as $convenience)
		@if (strlen($convenience) > 0)
		{{$convenience}}<span class="coma">,&nbsp;</span>
		@endif
		@endforeach
	</li>
	<li class="li"><span>{{__('partner.bring_alcohol')}}:</span> {{$advert->service->alcohole}}</li>
	<li class="li">{{$advert->service->alcohole_yes}}</li>
	<li class="li general"><a href="#" class="button" data-db="{{$iterator}}">{{__('partner.edit')}}</a></li>

	<li class="li"><h6>{{__('partner.catering-stewardship')}}</h6></li>
	<li class="li"><span>{{__('partner.property_prepare_meals')}}</span> {{$advert->service->meals}}</li>
	<li class="li"><span>{{__('partner.works_with_affiliated_partners')}}</span> {{$advert->service->affiliate_caterer}} </li>
	<li class="li">
		@if($advert->service->yes_af_caterers)
			@foreach (json_decode($advert->service->yes_af_caterers)??[] as $yes_af_caterers)
				@if (strlen($yes_af_caterers->name) > 0)
					<a href="{{$yes_af_caterers->url ?? '#'}}" target="_blank">{{$yes_af_caterers->name}}</a><span class="coma"><br></span>
				@endif
			@endforeach
		@endif
	</li>
	<li class="li"><span>{{__('partner.free_choice_of_caterer')}}:</span> {{$advert->service->free_caterer}}</li>
	<li class="li">
		@if($advert->service->yes_free_caterers)
			@foreach (json_decode($advert->service->yes_free_caterers) ?? [] as $yes_free_caterers)
				@if (strlen($yes_free_caterers) > 0)
					{{$yes_free_caterers}}<span class="coma"><br></span>
				@endif
			@endforeach
		@endif
	</li>
	<li class="li"><span>{{__('partner.external_food_allowed')}}</span> {{$advert->service->ext_food}}</li>
	<li class="li"><span>{{__('partner.available_furniture_equipment')}}:</span></li>
	<li class="li">
		@foreach (json_decode($advert->service->furniture)??[] as $furniture)
			@if (strlen($furniture) > 0)
				{{\App\Helpers\FurnitureTranslatorHelper::translate($furniture)}}<span class="coma">,&nbsp;</span>
			@endif
		@endforeach
	</li>
	<li class="li"><span>{{__('partner.technical_equipment')}}:</span></li>
	<li class="li">
		@foreach (json_decode($advert->service->equipment)??[] as $equipment)
			@if (strlen($equipment) > 0)
				{{\App\Helpers\TechnicalEquipmentTranslatorHelper::translate($equipment)}}<span class="coma">,&nbsp;</span>
			@endif
		@endforeach
	</li>
	<li class="li">{{$advert->service->other_eq}}</li>
	<li class="li catering"><a href="#" class="button" data-db="{{$iterator}}">{{__('partner.edit')}}</a></li>

	<li class="li"><h6>{{__('partner.other_services')}}</h6></li>
	<li class="li"><span>{{__('partner.staff')}}:</span></li>
	<li class="li">
		@foreach (json_decode($advert->service->staff)??[] as $staff)
			@if (strlen($staff) > 0)
				{{\App\Helpers\EventsStaffTranslatorHelper::translate($staff)}}<span class="coma">,&nbsp;</span>
			@endif
		@endforeach
	</li>
	<li class="li">{{$advert->service->other_staff}}</li>
	<li class="li"><span>{{__('partner.accommodation')}}:</span></li>
	<li class="li">{{$advert->service->accomodation}}</li>
	<li class="li">{{$advert->service->number_questrooms}}</li>
	<li class="li"><span>{{__('become_partner.other')}}:</span></li>
	<li class="li">
		@foreach (json_decode($advert->service->other_services)??[] as $other_services)
			@if (strlen($other_services) > 0)
				{{\App\Helpers\OtherServicesTranslatorHelper::translate($other_services)}}<span class="coma">,&nbsp;</span>
			@endif
		@endforeach
	</li>
	<li class="li">{{$advert->service->more_services}}</li>
	<li class="li otherservice"><a href="#" class="button" data-db="{{$iterator}}">{{__('partner.edit')}}</a></li>

	<li class="li"><h6>{{__('partner.want_to_add_something')}}</h6></li>
	<li class="li"><span>{{__('partner.comments')}}:</span></li>
	<li class="li">{{$advert->service->comment}}</li>
	<li class="li comment"><a href="#" class="button" data-db="{{$iterator}}">{{__('partner.edit')}}</a></li>
</ul>
@include('web.partner.advert.popups.event-places.edit-schedule', ['iterator' => $iterator])
@include('web.partner.advert.popups.event-places.edit-rates', ['advert' => $advert])
@include('web.partner.advert.popups.event-places.edit-general', ['iterator' => $iterator])
@include('web.partner.advert.popups.event-places.edit-catering', ['advert' => $advert])
@include('web.partner.advert.popups.event-places.edit-other', ['iterator' => $iterator])
@include('web.partner.advert.popups.edit-comment', ['iterator' => $iterator])
