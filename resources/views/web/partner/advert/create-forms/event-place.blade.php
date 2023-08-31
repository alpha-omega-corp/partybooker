<div class="partner-details-form popup popup-form partnerdetails popup-form-xl">
	@if (Auth::user()->type == 'admin')
		<form class="reg container" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/event-places')}}" method="POST" enctype="multipart/form-data">
		<input type="text" name="id_partner" value="{{$user->id_partner}}" hidden/>
	@else
		<form id="rv{{$advert->id}}" class="reg container" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/event-places')}}" method="POST" enctype="multipart/form-data">
			@endif
			{{ csrf_field() }}
			<div class="close"></div>
			<h3>{{__('partner.service_details')}}</h3>
			<div class="row">
				<div class="col-10 offset-1">
					<h6>{{__('partner.working_schedule')}}</h6>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1 col-md-12 event-schedule">
					<label>{{__('partner.working_days')}}<span>*</span>
						<div class="explanation">{{__('partner.working_days_expl')}}</div>
					</label>
					@foreach(['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'] as $day)
						<span class="checkbox-item">
							<input type="checkbox" name="working_days[]" value="{{$day}}" required>
							<span>{{__('days.'.$day)}}</span>
						</span>
					@endforeach
				</div>
			</div>
			<div class="row mt-10" id="opening-time">
				<div class="row offset-lg-1 opening-record">
					<div class="col-md-2">
						<label>{{__('partner.opening_time')}}
							<div class="explanation top">{{__('partner.opening_time_expl')}}</div>
						</label>
						<input type="text" class="open time" name="opening[0][open]"/>
					</div>
					<div class="col-md-2">
						<label>{{__('partner.closing_time')}}</label>
						<input type="text" class="closing time" name="opening[0][close]"/>
					</div>

					<div class="col-md-6">
						<label>{{__('become_partner.short_descr')}}</label>
						<input type="text" class="desc" name="opening[0][description]"/>
					</div>
				</div>
			</div>
			<div class="row mt-10 offset-lg-5">
				<div class="button add-opening-time-create">Add one more</div>
			</div>

			@push('footer')
				<script>
					var i = 1;
					$('div.add-opening-time-create').on('click', function(e){
						e.preventDefault();
						console.log(1);
						var row = $('#opening-time .opening-record:first').clone();
						row.find('input.open').val('').attr('name', 'opening[' + i + '][open]');
						row.find('input.closing').val('').attr('name', 'opening[' + i + '][close]');
						row.find('input.desc').val('').attr('name', 'opening[' + i + '][description]');
						$("#opening-time").append('<div class="row offset-lg-1 opening-record">' +  row.html() + '</div>');

						$('.time').mask('00:00', {
							placeholder: "00:00"
						});
						i++;
						return false;
					});
				</script>
			@endpush

			<div class="row">
				<div class="col-lg-10 offset-lg-1 col-md-12 ">
					<label>{{__('partner.annual_holidays')}}
						<div class="explanation top">{{__('partner.indicate_annual_closings')}}</div>
					</label>
					<input name="holidays" maxlength="350">
				</div>
			</div>

			<div class="row mt-10">
				<div class="col-lg-10 offset-lg-1 col-md-12">
					<label>{{__('partner.possibility_extend_time')}}<span>*</span>
						<div class="explanation">{{__('partner.possibility_extend_time_expl')}}</div>
					</label>
					<span class="radio-item">
					<input type="radio" name="extansion" class="has-field" field="extansion" value="yes" required>
					<span>{{__('partner.yes')}}</span>
				</span>
					<span class="radio-item">
					<input type="radio" name="extansion" class="has-field" field="extansion" value="no">
					<span>{{__('partner.no')}}</span>
				</span>
				</div>
				<div class="col-lg-5 offset-lg-1 col-md-6 for-extansion additional-field"></div>
			</div>

			<div class="row mt-30">
				<div class="col-10 offset-1">
					<h6>{{__('partner.rates_conditions')}}</h6>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-5 offset-lg-1 col-md-6">
					<div class="row">
						<div class="col-6">
							<label>{{__('partner.price')}}<span>*</span>
								<div class="explanation top">{{__('partner.price_expl')}}</div>
							</label>
							<input type="number" name="price" min="0" required/>
						</div>
						<div class="col-6">
							<label>for</label>
							<select name="price_for" required>
								<option value="space_rental_price_per_hour">{{__('partner.space_rental_price_per_hour')}}</option>
								<option value="fixed_price_per_person">{{__('partner.fixed_price_per_person')}}</option>
								<option value="flat_rate_for_service">{{__('partner.flat_rate_for_service')}}</option>
								<option value="other" class="other-price">{{strtolower(__('become_partner.other'))}}</option>
							</select>
							<div class="for-price additional-field mt-10"></div>
						</div>
					</div>
					<label class="mt-10">{{__('partner.budget')}}<span>*</span>
						<div class="explanation top">{{__('partner.budget_per_service')}}</div>
					</label>
					<select name="budget" required>
						@foreach(\App\Helpers\BudgetsHelper::$_budgets as $k => $v)
							<option value="{{$k}}">{{__($v)}}</option>
						@endforeach
					</select>

					<label class="mt-10">{{__('partner.booking_deposit')}}<span>*</span>
						<div class="explanation top">{{__('partner.booking_deposit_expl')}}</div>
					</label>
					<input type="text" name="deposit" required/>

				</div>
				<div class="col-lg-5 col-md-6 payment-options">
					<label>{{__('partner.payment_methods')}}<span>*</span>
						<div class="explanation top">{{__('partner.payment_methods_expl')}}</div>
					</label>
					@foreach(\App\Helpers\PaymentMethodsTranslatorHelper::$_methods as $method)
						<span class="checkbox-item wide">
							<input type="checkbox" name="pay_methods[]" value="{{$method}}" required>
							<span>{{\App\Helpers\PaymentMethodsTranslatorHelper::translate($method)}}</span>
						</span>
					@endforeach
					<span class="checkbox-item wide">
					<input type="checkbox" name="pay_methods[]" class="other-field" field="payment" value="other">
					<span>{{__('become_partner.other')}}</span>
				</span>
					<div class="for-payment additional-field mt-10"></div>
				</div>
			</div>

			<div class="row mt-30">
				<div class="col-10 offset-1">
					<h6>{{__('partner.service_general_info')}}</h6>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-5 offset-lg-1 col-md-6">
					<label>{{__('partner.cocktail_reception_capacity')}}
						<div class="explanation">{{__('partner.cocktail_reception_capacity_expl')}}</div>
					</label>
					<input type="number" name="cocktail_capacity" min="0" value="0"/>

					<label class="mt-10">{{__('partner.banquet_capacity')}}
						<div class="explanation">{{__('partner.banquet_capacity_expl')}}</div>
					</label>
					<input type="number" name="banquet_capacity" min="0" value="0"/>

					<label class="mt-10">{{__('partner.outdoor_facility')}}
						<div class="explanation">{{__('partner.other_service_facilities_expl')}}</div>
					</label>
					<input type="number" name="outdor_capacity" min="0" value="0"/>

				</div>
				<div class="col-lg-5 col-md-6">
					{{--			SCHEMAS				--}}
				</div>
			</div>
			<div class="row mt-10">
				<div class="col-lg-4 offset-lg-1 col-md-4">
					<label>{{__('partner.conference_room')}}
						<div class="explanation">{{__('partner.conference_room-expl')}}</div>
					</label>
					<div class="set">
						<div class="set-conference-room">
							<input type="text" value="1" name="set_num" hidden/>
							<div class="conference-room">
								<div class="row">
									<div class="col-sm-8">
										<input type="text" name="room_name_1" placeholder="{{__('partner.name')}}"/>
									</div>
									<div class="col-sm-4">
										<input type="number" name="room_cap_1" min="0" placeholder="{{__('partner.capacity')}}"/>
									</div>
								</div>
							</div>
						</div>
						<div class="button" set="conference-room">{{__('partner.add_more_room')}}</div>
					</div>

					<label class="mt-10 wide">{{__('partner.reduced_mobility_access')}}<span>*</span>
						<div class="explanation">{{__('partner.reduced_mobility_access_expl')}}</div>
					</label>
					<span class="radio-item">
					<input type="radio" name="reduced_mobility" value="yes" required/>
					<span>{{__('partner.yes')}}</span>
				</span>
					<span class="radio-item">
					<input type="radio" name="reduced_mobility" value="no"/>
					<span>{{__('partner.no')}}</span>
				</span>
					<span class="radio-item">
					<input type="radio" name="reduced_mobility" value="partial"/>
					<span>{{__('partner.partial')}}</span>
				</span>
				</div>
				<div class="col-lg-3 col-md-4 convence-options">
					<label>{{__('partner.car_park')}}
						<div class="explanation">{{__('partner.car_park_expl')}}</div>
					</label>
					<input type="number" name="car_park" min="0"/>

					<label class="mt-10">{{__('partner.conveniences')}}<span>*</span>
						<div class="explanation">{{__('partner.conveniences_expl')}}</div>
					</label>
					@foreach(\App\Helpers\ConveniencesTranslatorHelper::$_items as $item)
					<span class="checkbox-item wide">
						<input type="checkbox" name="conveniences[]" value="{{$item}} required"/>
						<span>{{\App\Helpers\ConveniencesTranslatorHelper::translate($item)}}</span>
					</span>
					@endforeach
				</div>

				<div class="col-lg-3 col-md-4 bar-options">
					<label class="mt-10">{{__('partner.Bar_dance_floor_stage')}}<span>*</span>
						<div class="explanation">{{__('partner.Bar_dance_floor_stage_expl')}}</div>
					</label>
					@foreach(\App\Helpers\BarDanceFloorTranslatorHelper::$_items as $item)
					<span class="checkbox-item wide">
						<input type="checkbox" name="facilities[]" value="{{$item}}" required/>
						<span>{{\App\Helpers\BarDanceFloorTranslatorHelper::translate($item)}}</span>
					</span>
					@endforeach
					<span class="checkbox-item wide">
					<input type="checkbox" name="facilities[]" class="other-field" field="facilities" value="other"/>
					<span>{{__('become_partner.other')}}</span>
				</span>
					<div class="for-facilities additional-field mt-10"></div>
				</div>
			</div>

			<div class="row mt-10">
				<div class="col-lg-10 offset-lg-1 col-md-6">
					<label class="mt-10">{{__('partner.bring_alcohol')}}<span>*</span>
						<div class="explanation">{{__('partner.bring_alcohol_expl')}}</div>
					</label>
					<span class="radio-item">
					<input type="radio" name="alcohol" class="has-field" field="alcohol" value="yes" required/>
					<span>{{__('partner.yes')}}</span>
				</span>
					<span class="radio-item">
					<input type="radio" name="alcohol" class="has-field" field="alcohol" value="no"/>
					<span>{{__('partner.no')}}</span>
				</span>
					<div class="for-alcohol additional-field mt-10"></div>
				</div>
			</div>

			<div class="row mt-30">
				<div class="col-10 offset-1">
					<h6>{{__('partner.catering-stewardship')}}</h6>
				</div>
			</div>

			<div class="row mt-10">
				<div class="col-lg-5 offset-lg-1 col-md-6">
					<label class="wide">{{__('partner.property_prepare_meals')}}<span>*</span></label>
					<span class="radio-item">
					<input type="radio" id="prepare_meal_yes" name="prepare_meal" value="yes" required/>
					<span>{{__('partner.yes')}}</span>
				</span>
					<span class="radio-item">
					<input type="radio" id="prepare_meal_no" name="prepare_meal" value="no"/>
					<span>{{__('partner.no')}}</span>
				</span>

					<label class="mt-10 wide">{{__('partner.works_with_affiliated_partners')}}<span class="aff_req">*</span></label>
					<span class="radio-item">
					<input type="radio"  id="aff_caterers" name="aff_caterers" class="has-field" field="aff_caterers" value="yes"  required/>
					<span>{{__('partner.yes')}}</span>
				</span>
					<span class="radio-item">
					<input type="radio" name="aff_caterers" class="has-field" field="aff_caterers" value="no"/>
					<span>{{__('partner.no')}}</span>
				</span>
					<div class="for-aff_caterers additional-field mt-10"></div>
					<div class="for-aff_caterers-select mt-10">
{{--						<select name="aff_caterers_partybooker">--}}
{{--							<option>Partybooker</option>--}}
{{--							<option>Lionwood</option>--}}
{{--						</select>--}}
					</div>
				</div>

				<div class="col-lg-5 offset-lg-1 col-md-6">
					<label class="wide">{{__('partner.external_food_allowed')}}<span>*</span></label>
					<span class="radio-item">
					<input type="radio" name="external_food" value="yes" required/>
					<span>{{__('partner.yes')}}</span>
				</span>
					<span class="radio-item">
					<input type="radio" name="external_food" value="no"/>
					<span>{{__('partner.no')}}</span>
				</span>

					<label class="mt-10 wide">{{__('partner.free_choice_of_caterer')}}<span>*</span></label>
					<span class="radio-item">
					<input type="radio" name="free_caterers" class="has-field" field="free_caterers" value="yes" required />
					<span>{{__('partner.yes')}}</span>
				</span>
					<span class="radio-item">
					<input type="radio" name="free_caterers" class="has-field" field="free_caterers" value="no" />
					<span>{{__('partner.no')}}</span>
				</span>
					<div class="for-free_caterers additional-field mt-10"></div>
				</div>
			</div>

			<div class="row mt-10">
				<div class="col-lg-5 offset-lg-1 col-md-6 furniture-options">
					<label class="wide">{{__('partner.available_furniture_equipment')}}<span>*</span>
						<div class="explanation">{{__('partner.available_furniture_equipment_expl')}}</div>
					</label>
					@foreach(\App\Helpers\FurnitureTranslatorHelper::$_items as $item)
					<span class="checkbox-item wide">
						<input type="checkbox" name="furniture_eq[]" value="{{$item}}" required />
						<span>{{\App\Helpers\FurnitureTranslatorHelper::translate($item)}}</span>
					</span>
					@endforeach
				</div>
				<div class="col-lg-5 offset-lg-1 col-md-6 te-options">
					<label class="wide">{{__('partner.technical_equipment')}}<span>*</span>
						<div class="explanation">{{__('partner.technical_equipment_expl')}}</div>
					</label>
					@foreach(\App\Helpers\TechnicalEquipmentTranslatorHelper::$_items as $item)
					<span class="checkbox-item wide">
						<input type="checkbox" name="tech_eq[]" value="{{$item}}" required/>
						<span>{{\App\Helpers\TechnicalEquipmentTranslatorHelper::translate($item)}}</span>
					</span>
					@endforeach
					<span class="checkbox-item wide">
					<input type="checkbox" name="tech_eq[]" class="other-field" field="tech_eq" value="other"/>
					<span>{{__('become_partner.other')}}</span>
				</span>
					<div class="for-tech_eq additional-field mt-10"></div>
				</div>
			</div>

			<div class="row mt-30">
				<div class="col-10 offset-1">
					<h6>{{__('partner.other_services')}}</h6>
				</div>
			</div>

			<div class="row mt-10">
				<div class="col-lg-3 offset-lg-1 col-md-4 staff-options">
					<label class="wide">{{__('partner.staff')}}<span>*</span>
						<div class="explanation">{{__('partner.staff_expl')}}</div>
					</label>
					@foreach(\App\Helpers\EventsStaffTranslatorHelper::$_items as $item)
					<span class="checkbox-item wide">
						<input type="checkbox" name="staff[]" value="{{$item}}" required/>
						<span>{{\App\Helpers\EventsStaffTranslatorHelper::translate($item)}}</span>
					</span>
					@endforeach
					<span class="checkbox-item wide">
					<input type="checkbox" name="staff[]" class="other-field" field="staff" value="other"/>
					<span>{{__('become_partner.other')}}</span>
				</span>
					<div class="for-staff additional-field mt-10"></div>
				</div>
				<div class="col-lg-3 col-md-4">
					<label class="wide">{{__('partner.other_services')}}
						<div class="explanation">{{__('partner.staf_expl')}}</div>
					</label>
					@foreach(\App\Helpers\OtherServicesTranslatorHelper::$_items as $item)
					<span class="checkbox-item wide">
						<input type="checkbox" name="other[]" value="{{$item}}"/>
						<span>{{\App\Helpers\OtherServicesTranslatorHelper::translate($item)}}</span>
					</span>
					@endforeach
					<span class="checkbox-item wide">
					<input type="checkbox" name="other[]" class="other-field" field="other-service" value="other"/>
					<span>{{__('become_partner.other')}}</span>
				</span>
					<div class="for-other-service additional-field mt-10"></div>
				</div>

				<div class="col-lg-3 col-md-4">
					<label class="wide">{{__('partner.accomodation')}}<span>*</span>
						<div class="explanation">{{__('partner.accomodation_expl')}}</div>
					</label>
					<span class="radio-item wide">
					<input type="radio" name="accomodation" class="has-field" field="accomodation" value="yes"
					       required/>
					<span>{{__('partner.yes')}}</span>
				</span>
					<span class="radio-item wide">
					<input type="radio" name="accomodation" class="has-field" field="accomodation" value="yes-nearby"/>
					<span>{{__('partner.YES_nearby')}}</span>
				</span>
					<span class="radio-item wide">
					<input type="radio" name="accomodation" class="has-field" field="accomodation"
					       value="not-available"/>
					<span>{{__('partner.not_available')}}</span>
				</span>
					<div class="for-accomodation additional-field mt-10"></div>
				</div>
			</div>

			<div class="row mt-30">
				<div class="col-10 offset-1">
					<h6>{{__('partner.want_to_add_something')}}</h6>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<label>{{__('partner.your_comment')}}
						<div class="explanation">{{__('partner.want_to_add_something_expl')}}</div>
					</label>
					<textarea maxlength="500" name="comment"></textarea>
				</div>
			</div>
			<button type="submit" class="button btn-reg">{{__('partner.save')}}</button>
	@if(true)</form>@else</form>@endif
</div>


@push('footer')
<script>
	$(function () {
		var requiredCheckboxes = $('.event-schedule :checkbox[required]');
		requiredCheckboxes.change(function () {
			if (requiredCheckboxes.is(':checked')) {
				requiredCheckboxes.removeAttr('required');
			} else {
				requiredCheckboxes.attr('required', 'required');
			}
		});


		var requiredpayment = $('.payment-options :checkbox[required]');
		requiredpayment.change(function () {
			if (requiredpayment.is(':checked')) {
				requiredpayment.removeAttr('required');
			} else {
				requiredpayment.attr('required', 'required');
			}
		});

		var requiredconvence = $('.convence-options :checkbox[required]');
		requiredconvence.change(function () {
			if (requiredconvence.is(':checked')) {
				requiredconvence.removeAttr('required');
			} else {
				requiredconvence.attr('required', 'required');
			}
		});

		var requiredBar = $('.bar-options :checkbox[required]');
		requiredBar.change(function () {
			if (requiredBar.is(':checked')) {
				requiredBar.removeAttr('required');
			} else {
				requiredBar.attr('required', 'required');
			}
		});

		var requiredTe = $('.te-options :checkbox[required]');
		requiredTe.change(function () {
			if (requiredTe.is(':checked')) {
				requiredTe.removeAttr('required');
			} else {
				requiredTe.attr('required', 'required');
			}
		});

		var requiredfurniture = $('.furniture-options :checkbox[required]');
		requiredfurniture.change(function () {
			if (requiredfurniture.is(':checked')) {
				requiredfurniture.removeAttr('required');
			} else {
				requiredfurniture.attr('required', 'required');
			}
		});

		var requiredstaff = $('.staff-options :checkbox[required]');
		requiredstaff.change(function () {
			if (requiredstaff.is(':checked')) {
				requiredstaff.removeAttr('required');
			} else {
				requiredstaff.attr('required', 'required');
			}
		});

	});

	$('#prepare_meal_yes').on('click', function (e) {
		$("#aff_caterers").removeAttr('required');
		$(".aff_req").hide();
	});

	$('#prepare_meal_no').on('click', function (e) {
		$("#aff_caterers").attr('required', 'required');
		$(".aff_req").show();
	});
</script>
@endpush
