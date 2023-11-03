@php use App\Helpers\BudgetsHelper; @endphp
@php use App\Helpers\PaymentMethodsTranslatorHelper; @endphp
<div class="partner-details-form popup popup-form partnerdetails popup-form-xl">

    <input type="text" name="id_partner" value="{{$user->id_partner}}" hidden/>
    <h3>{{__('partner.service_details')}}</h3>
    <div class="row">
        <div class="col-10 offset-1">
            <h6>{{__('partner.working_schedule')}}</h6>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 offset-lg-1 col-md-12 entertainment-schedule">
            <label>{{__('partner.working_days')}}<span>*</span>
                <div class="explanation">{{__('partner.working_days')}}</div>
            </label>
            @foreach(['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'] as $day)
                <span class="checkbox-item">
						<input type="checkbox" name="working_days[]" value="{{$day}}" required>
						<span>{{__('days.'.$day)}}</span>
					</span>
            @endforeach
        </div>
    </div>
    <div class="row mt-10">
        <div class="col-lg-5 offset-lg-1 col-md-6">
            <label>{{__('partner.duration')}}<span>*</span>
                <div class="explanation top">{{__('partner.duration_expl')}}</div>
            </label>
            <input type="text" name="duration" required/>
        </div>

        <div class="col-lg-5 col-md-6">
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
                    <label>{{__('partner.for')}}</label>
                    <select name="price_for" required>
                        <option value="price_per_hour">{{__('partner.price_per_hour')}}</option>
                        <option
                            value="fixed_price_per_person">{{__('partner.fixed_price_per_person')}}</option>
                        <option
                            value="flat_rate_for_service">{{__('partner.flat_rate_for_service')}}</option>
                        <option value="other"
                                class="other-price">{{strtolower(__('become_partner.other'))}}</option>
                    </select>
                    <div class="for-price additional-field mt-10"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label class="mt-10">{{__('partner.budget')}}<span>*</span>
                        <div class="explanation top">{{__('partner.budget_per_service')}}</div>
                    </label>
                    <select name="budget" required>
                        @foreach(BudgetsHelper::$_budgets as $k => $v)
                            <option value="{{$k}}">{{__($v)}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="mt-10">{{__('partner.deposit_policy')}}<span>*</span>
                        <div class="explanation top">{{__('partner.deposit_policy_expl')}}</div>
                    </label>
                    <input type="text" name="deposit" required/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>{{__('partner.travelling_expenses')}}
                        <div class="explanation top">{{__('partner.travelling_expenses_expl')}}</div>
                    </label>
                    <input type="text" name="travelling"/>
                </div>
                <div class="col-md-6">
                    <label>{{__('partner.additional_expenses')}}
                        <div class="explanation top">{{__('partner.additional_expenses_expl')}}</div>
                    </label>
                    <input type="text" name="additional"/>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-6 payment-options">
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

    <div class="row mt-30">
        <div class="col-10 offset-1">
            <h6>{{__('partner.service_general_info')}}</h6>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 offset-lg-1 col-md-6">
            <label>{{__('partner.geographical_limit')}}<span>*</span></label>
            <textarea name="geo" rows="2" required/></textarea>

            <label>{{__('partner.number_of_participants')}}<span>*</span>
                <div class="explanation top">{{__('partner.number_of_participants_expl')}}</div>
            </label>
            <input type="number" name="participants" min="1" required/>
        </div>

        <div class="col-lg-5 col-md-6">
            <label>{{__('partner.list_of_your_services')}}<span>*</span>
                <div class="explanation top">{{__('partner.list_of_your_services_expl')}}</div>
            </label>
            <textarea name="services" rows="3" required/></textarea>
        </div>
    </div>
    <div class="row mt-10">
        <div class="col-lg-5 offset-lg-1 col-md-6">
            <label>{{__('partner.equipment_provided')}}<span>*</span>
                <div class="explanation top">{{__('partner.equipment_provided_expl')}}</div>
            </label>
            <textarea name="equipment" rows="2" required/></textarea>

            <label>{{__('partner.equipment_not_included')}}</label>
            <textarea name="eq_not_incl" rows="2"/></textarea>
        </div>

        <div class="col-lg-5 col-md-6">
            <label>{{__('partner.biography')}}<span>*</span>
                <div class="explanation top">{{__('partner.biography_expl')}}</div>
            </label>
            <textarea name="biography" rows="2" required/></textarea>

            <label>{{__('partner.references')}}
                <div class="explanation top">{{__('partner.references_expl')}}</div>
            </label>
            <textarea name="references" rows="2"/></textarea>
        </div>
    </div>

    <div class="row mt-30">
        <div class="col-10 offset-1">
            <h6>{{__('partner.want_to_add_something')}}</h6>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <label>{{__('partner.want_to_add_something')}}
                <div class="explanation">{{__('partner.want_to_add_something_expl')}}</div>
            </label>
            <textarea maxlength="500" name="comment"></textarea>
        </div>
    </div>
</div>

@push('footer')
    <script>
        $(function () {
            var requiredCheckboxes = $('.entertainment-schedule :checkbox[required]');
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
        });
    </script>
@endpush
