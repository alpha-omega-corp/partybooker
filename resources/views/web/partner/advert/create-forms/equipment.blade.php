@php use App\Helpers\BudgetsHelper; @endphp
@php use App\Helpers\PaymentMethodsTranslatorHelper; @endphp

<div class="row">
    <div class="col-10 offset-1">
        <h6>{{__('partner.working_schedule')}}</h6>
    </div>
</div>
<div class="row">
    <div class="col-lg-10 offset-lg-1 col-md-12 equipment-schedule">
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
<div class="row mt-10">
    <div class="col-lg-2 offset-lg-1 col-md-3">
        <label>{{__('partner.opening_time')}}<span>*</span>
            <div class="explanation top">{{__('partner.opening_time_expl')}}</div>
        </label>
        <input type="text" name="open" class="time" required/>
    </div>
    <div class="col-lg-2 col-md-3">
        <label>{{__('partner.closing_time')}}<span>*</span></label>
        <input type="text" name="close" class="time" required/>
    </div>

    <div class="col-lg-6 col-md-6">
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
                    <option
                        value="space_rental_price_per_hour">{{__('partner.space_rental_price_per_hour')}}</option>
                    <option
                        value="space_rental_price_per_day">{{__('partner.space_rental_price_per_day')}}</option>
                    <option
                        value="flat_rate_for_service">{{__('partner.flat_rate_for_service')}}</option>
                    <option value="other"
                            class="other-price">{{strtolower(__('become_partner.other'))}}</option>
                </select>
                <div class="for-price additional-field mt-10"></div>
            </div>
        </div>
        <label class="mt-10">{{__('partner.budget')}}<span>*</span>
            <div class="explanation top">{{__('partner.indicate_budget_for_service')}}</div>
        </label>
        <select name="budget" required>
            @foreach(BudgetsHelper::$_budgets as $k => $v)
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
            <div class="explanation top">{{__('partner.payment_methods_expl2')}}</div>
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
<div class="row mt-10">
    <div class="col-lg-5 offset-lg-1 col-md-6">
        <label>{{__('partner.delivery_charge')}}<span>*</span>
            <div class="explanation">{{__('partner.delivery_charge_expl')}}</div>
        </label>
        <textarea name="delivery" rows="2" required></textarea>
    </div>
    <div class="col-lg-5 col-md-6">
        <label>{{__('partner.additional_expenses')}}<span>*</span>
            <div class="explanation">{{__('partner.additional_expenses_expl2')}}</div>
        </label>
        <textarea name="expences" rows="2" required></textarea>
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
        <textarea name="geo" rows="2" required></textarea>

        <label>{{__('partner.complimentary_services')}}<span>*</span>
            <div class="explanation">{{__('partner.complimentary_services_expl')}}</div>
        </label>
        <textarea name="complim_services" rows="2" required></textarea>

    </div>
    <div class="col-lg-5 col-md-6">
        <label>{{__('partner.proposed_equipment')}}<span>*</span>
            <div class="explanation">{{__('partner.proposed_equipment_expl')}}</div>
        </label>
        <textarea name="proposed" rows="2" required></textarea>

        <label>{{__('partner.references')}}
            <div class="explanation">{{__('partner.references_expl')}}</div>
        </label>
        <textarea name="references" rows="2"></textarea>
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

@push('footer')
    <script>
        $(function () {
            var requiredCheckboxes = $('.equipment-schedule :checkbox[required]');
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
