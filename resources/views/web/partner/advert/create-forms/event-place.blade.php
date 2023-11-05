@php use App\Helpers\BudgetsHelper; @endphp
@php use App\Helpers\PaymentMethodsTranslatorHelper; @endphp
@php use App\Helpers\ConveniencesTranslatorHelper; @endphp
@php use App\Helpers\BarDanceFloorTranslatorHelper; @endphp
@php use App\Helpers\FurnitureTranslatorHelper; @endphp
@php use App\Helpers\TechnicalEquipmentTranslatorHelper; @endphp
@php use App\Helpers\EventsStaffTranslatorHelper; @endphp
@php use App\Helpers\OtherServicesTranslatorHelper; @endphp


@if(Auth::user()->type == 'admin')
    <input type="text" name="id_partner" value="{{$user->id_partner}}" hidden/>
@endif


<x-dashboard.card :title="__('partner.working_schedule')">
    <div>
        <div class="row">
            <div class="col-md-2">
                <div class="row">
                    <div class="event-schedule">
                        <label class="text-center">{{__('partner.working_days')}}<span>*</span>
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

            </div>
            <div class="col-md-10">
                <div class="row mt-10" id="opening-time">
                    <div class="row opening-record">
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

                        <div class="col-md-8">
                            <label>{{__('become_partner.short_descr')}}</label>
                            <input type="text" class="desc" name="opening[0][description]"/>
                        </div>
                    </div>

                </div>
                <div class="row mt-4">
                    <hr>
                    <div
                        class="add-opening-time-create btn btn-primary text-uppercase">{{__('partner.add_one_more')}}</div>
                </div>


            </div>
        </div>

        <hr>

        <div class="row" x-data="{ extension: '' }">
            <div class="col-md-6">
                <label for="holidays">{{__('partner.annual_holidays')}}
                    <div class="explanation top">{{__('partner.indicate_annual_closings')}}</div>
                </label>
                <input name="holidays" maxlength="350" id="holidays">
            </div>

            <div class="col-md-6">
                <div class="d-flex">
                    <div class="d-flex flex-column mb-4">
                        <div>
                            <label for="ext">{{__('partner.possibility_extend_time')}}<span>*</span>
                                <div class="explanation">{{__('partner.possibility_extend_time_expl')}}</div>
                            </label>
                            <div class="radio-item">
                                <input
                                    x-model="extension"
                                    type="radio"
                                    name="extansion"
                                    class="has-field"
                                    field="extansion"
                                    value="yes"
                                    id="ext"
                                    required>
                                <span>{{__('partner.yes')}}</span>
                            </div>
                        </div>

                        <div class="radio-item">
                            <input
                                type="radio"
                                name="extansion"
                                class="has-field"
                                field="extansion"
                                id="ext"
                                x-model="extension"
                                value="no">
                            <span>{{__('partner.no')}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <label x-show="extension === 'yes'">
                <span>{{__('partner.extansion')}}</span>
            </label>
            <div class="for-extansion additional-field"></div>
        </div>
    </div>
</x-dashboard.card>

@push('footer')
    <script>
        var i = 1;
        $('div.add-opening-time-create').on('click', function (e) {
            e.preventDefault();
            var row = $('#opening-time .opening-record:first').clone();
            row.find('input.open').val('').attr('name', 'opening[' + i + '][open]');
            row.find('input.closing').val('').attr('name', 'opening[' + i + '][close]');
            row.find('input.desc').val('').attr('name', 'opening[' + i + '][description]');
            $("#opening-time").append('<div class="row opening-record">' + row.html() + '</div>');

            $('.time').mask('00:00', {
                placeholder: "00:00"
            });
            i++;
            return false;
        });
    </script>
@endpush


<x-dashboard.card :title="__('partner.rates_conditions')">
    <div class="row">
        <div class="col-md-8">
            <div class="row" x-data="{ item: '' }">
                <div class="col-6">
                    <label>{{__('partner.price')}}<span>*</span>
                        <div class="explanation top">{{__('partner.price_expl')}}</div>
                    </label>
                    <input type="number" name="price" min="0" required/>
                </div>
                <div class="col-6">
                    <div>
                        <label>for</label>
                        <select class="form-select" name="price_for" required x-model="item">
                            <option
                                value="space_rental_price_per_hour">{{__('partner.space_rental_price_per_hour')}}</option>
                            <option
                                value="fixed_price_per_person">{{__('partner.fixed_price_per_person')}}</option>
                            <option
                                value="flat_rate_for_service">{{__('partner.flat_rate_for_service')}}</option>
                            <option value="other"
                                    class="other-price">{{strtolower(__('become_partner.other'))}}</option>
                        </select>
                    </div>
                </div>
                <label x-show="item === 'other'">Description</label>
                <div class="for-price additional-field"></div>
            </div>

            <hr>
            <label>{{__('partner.budget')}}<span>*</span>
                <div class="explanation top">{{__('partner.budget_per_service')}}</div>
            </label>
            <select class="form-select" name="budget" required>
                @foreach(BudgetsHelper::$_budgets as $k => $v)
                    <option value="{{$k}}">{{__($v)}}</option>
                @endforeach
            </select>

            <hr>
            <label class="">{{__('partner.booking_deposit')}}<span>*</span>
                <div class="explanation top">{{__('partner.booking_deposit_expl')}}</div>
            </label>
            <input type="text" name="deposit" required/>
        </div>

        <div class="col-md-4 payment-options">
            <label>{{__('partner.payment_methods')}}<span>*</span>
                <div class="explanation top">{{__('partner.payment_methods_expl')}}</div>
            </label>
            @foreach(PaymentMethodsTranslatorHelper::$_methods as $method)
                <span class="checkbox-item wide">
							<input type="checkbox" name="pay_methods[]" value="{{$method}}" required>
							<span>{{PaymentMethodsTranslatorHelper::translate($method)}}</span>
						</span>
            @endforeach
            <span class="checkbox-item wide">
					<input type="checkbox" name="pay_methods[]" class="other-field" field="payment" value="other">
					<span>{{__('become_partner.other')}}</span>
				</span>
            <div class="for-payment additional-field mt-10"></div>
        </div>
    </div>
</x-dashboard.card>

<x-dashboard.card :title="__('partner.service_general_info')">
    <div class="row">
        <div class="col-md-6">
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

            <label>{{__('partner.car_park')}}
                <div class="explanation">{{__('partner.car_park_expl')}}</div>
            </label>
            <input type="number" name="car_park" min="0"/>
        </div>
        <div class="col-md-6">

            <div class="row">
                <div>
                    <label class="wide">{{__('partner.reduced_mobility_access')}}<span>*</span>
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
            </div>
            <hr>
            <div>
                <label>{{__('partner.conference_room')}}
                    <div class="explanation">{{__('partner.conference_room-expl')}}</div>
                </label>
                <div class="set">
                    <div class="set-conference-room">
                        <input type="text" value="1" name="set_num" hidden/>
                        <div class="conference-room">
                            <div class="row">
                                <div class="col-sm-8">
                                    <input type="text" name="room_name_1"
                                           placeholder="{{__('partner.name')}}"/>
                                </div>
                                <div class="col-sm-4">
                                    <input type="number" name="room_cap_1" min="0"
                                           placeholder="{{__('partner.capacity')}}"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <a class="btn btn-primary btn-room" set="conference-room">
                        {{__('partner.add_more_room')}}
                    </a>
                </div>
            </div>

        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-5">
            <div class="bar-options">
                <label class="mt-10">{{__('partner.Bar_dance_floor_stage')}}<span>*</span>
                    <div class="explanation">{{__('partner.Bar_dance_floor_stage_expl')}}</div>
                </label>
                @foreach(BarDanceFloorTranslatorHelper::$_items as $item)
                    <span class="checkbox-item wide">
						<input type="checkbox" name="facilities[]" value="{{$item}}" required/>
						<span>{{BarDanceFloorTranslatorHelper::translate($item)}}</span>
					</span>
                @endforeach
                <span class="checkbox-item wide">
					<input type="checkbox" name="facilities[]" class="other-field" field="facilities" value="other"/>
					<span>{{__('become_partner.other')}}</span>
				</span>
                <div class="for-facilities additional-field mt-10"></div>
            </div>
        </div>

        <div class="convence-options col-md-2">
            <label class="mt-10">{{__('partner.conveniences')}}<span>*</span>
                <div class="explanation">{{__('partner.conveniences_expl')}}</div>
            </label>
            @foreach(ConveniencesTranslatorHelper::$_items as $item)
                <span class="checkbox-item wide">
						<input type="checkbox" name="conveniences[]" value="{{$item}} required"/>
						<span>{{ConveniencesTranslatorHelper::translate($item)}}</span>
                        </span>
            @endforeach
        </div>


        <div class="col-md-3">
            <label>
                    <span class="text-nowrap text-gray">
                        {{__('partner.bring_alcohol')}}
                        <span>*</span>
                    </span>

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
</x-dashboard.card>

<x-dashboard.card :title="__('partner.catering-stewardship')">
    <div class="row">
        <div class="col-md-6">
            <label class="wide">{{__('partner.external_food_allowed')}}<span>*</span></label>
            <span class="radio-item">
                    <input type="radio" name="external_food" value="yes" required/>
                    <span>{{__('partner.yes')}}</span>
                </span>
            <span class="radio-item">
                    <input type="radio" name="external_food" value="no"/>
                    <span>{{__('partner.no')}}</span>
                </span>
        </div>

        <div class="col-md-6">
            <label class="wide">{{__('partner.property_prepare_meals')}}<span>*</span></label>
            <span class="radio-item">
                <input type="radio" id="prepare_meal_yes" name="prepare_meal" value="yes" required/>
                <span>{{__('partner.yes')}}</span>
                </span>
            <span class="radio-item">
                    <input type="radio" id="prepare_meal_no" name="prepare_meal" value="no"/>
                    <span>{{__('partner.no')}}</span>
                </span>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="furniture-options">
                <label class="wide">{{__('partner.available_furniture_equipment')}}<span>*</span>
                    <div class="explanation">{{__('partner.available_furniture_equipment_expl')}}</div>
                </label>
                @foreach(FurnitureTranslatorHelper::$_items as $item)
                    <span class="checkbox-item wide">
						<input type="checkbox" name="furniture_eq[]" value="{{$item}}" required/>
						<span>{{FurnitureTranslatorHelper::translate($item)}}</span>
					</span>
                @endforeach
            </div>
        </div>

        <div class="col-md-6">
            <div class="te-options">
                <label class="wide">{{__('partner.technical_equipment')}}<span>*</span>
                    <div class="explanation">{{__('partner.technical_equipment_expl')}}</div>
                </label>
                @foreach(TechnicalEquipmentTranslatorHelper::$_items as $item)
                    <span class="checkbox-item wide">
						<input type="checkbox" name="tech_eq[]" value="{{$item}}" required/>
						<span>{{TechnicalEquipmentTranslatorHelper::translate($item)}}</span>
					</span>
                @endforeach
                <span class="checkbox-item wide">
					<input type="checkbox" name="tech_eq[]" class="other-field" field="tech_eq" value="other"/>
					<span>{{__('become_partner.other')}}</span>
				</span>
                <div class="for-tech_eq additional-field mt-10"></div>
            </div>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-6">
            <label class="wide">{{__('partner.works_with_affiliated_partners')}}<span
                    class="aff_req">*</span></label>
            <span class="radio-item">
                <input type="radio" id="aff_caterers" name="aff_caterers" class="has-field" field="aff_caterers"
                       value="yes" required/>
                <span>{{__('partner.yes')}}</span>
                 </span>
            <span class="radio-item">
                <input type="radio" name="aff_caterers" class="has-field" field="aff_caterers" value="no"/>
                <span>{{__('partner.no')}}</span>
            </span>
            <div class="for-aff_caterers additional-field"></div>
            <div class="for-aff_caterers-select"></div>
        </div>

        <div class="col-md-6">
            <label class="wide">{{__('partner.free_choice_of_caterer')}}<span>*</span></label>
            <span class="radio-item">
                <input type="radio" name="free_caterers" class="has-field" field="free_caterers" value="yes"
                       required/>
                <span>{{__('partner.yes')}}</span>
            </span>
            <span class="radio-item">
                <input type="radio" name="free_caterers" class="has-field" field="free_caterers" value="no"/>
                <span>{{__('partner.no')}}</span>
            </span>
            <div class="for-free_caterers additional-field mt-10"></div>
        </div>
    </div>
</x-dashboard.card>

<x-dashboard.card :title="__('partner.other_services')">
    <div class="row">
        <div class="col-md-6 staff-options">
            <label class="wide">{{__('partner.staff')}}<span>*</span>
                <div class="explanation">{{__('partner.staff_expl')}}</div>
            </label>
            @foreach(EventsStaffTranslatorHelper::$_items as $item)
                <span class="checkbox-item wide">
						<input type="checkbox" name="staff[]" value="{{$item}}" required/>
						<span>{{EventsStaffTranslatorHelper::translate($item)}}</span>
					</span>
            @endforeach

            <span class="checkbox-item wide">
					<input type="checkbox" name="staff[]" class="other-field" field="staff" value="other"/>
					<span>{{__('become_partner.other')}}</span>
				</span>
            <div class="for-staff additional-field mt-10"></div>
        </div>
        <div class="col-md-6">
            <label class="wide">{{__('partner.other_services')}}
                <div class="explanation">{{__('partner.staf_expl')}}</div>
            </label>
            @foreach(OtherServicesTranslatorHelper::$_items as $item)
                <span class="checkbox-item wide">
						<input type="checkbox" name="other[]" value="{{$item}}"/>
						<span>{{OtherServicesTranslatorHelper::translate($item)}}</span>
                    <br>
                </span>
            @endforeach
            <span class="checkbox-item wide">
					<input type="checkbox" name="other[]" class="other-field" field="other-service" value="other"/>
					<span>{{__('become_partner.other')}}</span>
				</span>
            <div class="for-other-service additional-field mt-10"></div>
        </div>
    </div>

    <hr>

    <div class="row">
        <div>
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
</x-dashboard.card>

<x-dashboard.card :title="__('partner.want_to_add_something')">
    <div>
        <label>{{__('partner.your_comment')}}
            <div class="explanation">{{__('partner.want_to_add_something_expl')}}</div>
        </label>
        <textarea maxlength="500" name="comment"></textarea>
    </div>
</x-dashboard.card>

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
