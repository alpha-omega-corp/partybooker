@php use App\Helpers\BudgetsHelper; @endphp
@php use App\Helpers\PaymentMethodsTranslatorHelper; @endphp
@php use App\Helpers\LogisticsTranslatorHelper; @endphp
@php use App\Helpers\StaffTranslatorHelper; @endphp
@php use App\Helpers\TablewareTranslatorHelper; @endphp
@php use App\Helpers\FurnishingTranslatorHelper; @endphp
@php use App\Helpers\DecorationsTranslatorHelper; @endphp
@php use App\Helpers\OfficeEquipmentTranslatorHelper; @endphp


@if(Auth::user()->type == 'admin')
    <input type="text" name="id_partner" value="{{$user->id_partner}}" hidden/>
@endif

<div class="row">
    <div class="col-10 offset-1">
        <h6>{{__('partner.working_schedule')}}</h6>
    </div>
</div>
<div class="row">
    <div class="offset-lg-1 col-lg-6 col-md-7">
        <label>{{__('partner.annual_holidays')}}
            <div class="explanation">{{__('partner.indicate_annual_closings')}}</div>
        </label>
        <input name="holidays" maxlength="350" required></textarea>
    </div>
</div>

<div class="row mt-30">
    <div class="col-10 offset-1">
        <h6>{{__('partner.rates_conditions')}}</h6>
    </div>
</div>
<div class="row mt-10">
    <div class="col-lg-5 offset-lg-1 col-md-6">
        <label>{{__('partner.budget_per_person')}}<span>*</span>
            <div class="explanation">{{__('partner.budget_per_person_required')}}</div>
        </label>
        <input type="number" name="price" min="0" required/>
        <input type="text" name="price_for" value="fixed_price_per_person" hidden/>

        <label class="mt-10">{{__('partner.budget')}}<span>*</span>
            <div class="explanation">{{__('partner.budget_per_service')}}</div>
        </label>
        <select name="budget" required>
            @foreach(BudgetsHelper::$_budgets as $k => $v)
                <option value="{{$k}}">{{__($v)}}</option>
            @endforeach
        </select>

        <label class="mt-10">{{__('partner.booking_deposit')}}<span>*</span>
            <div class="explanation">{{__('partner.in_expl')}}</div>
        </label>
        <input type="text" name="deposit" required/>

        <label class="mt-10">{{__('partner.payment_terms')}}
            <div class="explanation">{{__('partner.payment_terms_expl')}}</div>
        </label>
        <input type="text" name="payment_terms" required/>
    </div>
    <div class="col-lg-5 col-md-6">
        <label>{{__('partner.payment_methods')}}<span>*</span>
            <div class="explanation">{{__('partner.payment_methods_expl')}}</div>
        </label>
        @foreach(PaymentMethodsTranslatorHelper::$_methods as $method)
            <span class="checkbox-item wide">
					<input type="checkbox" name="pay_methods[]" value="{{$method}}">
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
        <textarea name="geo" maxlength="350" rows="3" required/></textarea>
    </div>
    <div class="col-lg-5 col-md-6">
        <label class="mt-10">{{__('partner.min_max_guests')}}<span>*</span>
            <div class="explanation">{{__('partner.min_max_guests_expl')}}</div>
        </label>
        <div class="row">
            <div class="col-sm-6">
                <input type="number" name="min guests" placeholder="min" min="0" required/>
            </div>
            <div class="col-sm-6">
                <input type="number" name="max guests" placeholder="max" min="0"/>
            </div>
        </div>
        <label class="mt-10">{{__('partner.smood_ch_link')}}
            <div class="explanation">{{__('partner.smood_ch_link_expl')}}</div>
        </label>
        <input type="url" name="smood"/>
    </div>
</div>

<div class="row mt-30">
    <div class="col-10 offset-1">
        <h6>{{__('partner.specialties')}}</h6>
    </div>
</div>
<div class="row mt-10">
    <div class="col-lg-5 offset-lg-1 col-md-6">
        <label>{{__('partner.specialties')}}<span>*</span>
            <div class="explanation">{{__('partner.indicate_specialties')}}</div>
        </label>
        <textarea name="specialties" maxlength="350" rows="2" required/></textarea>
    </div>
    <div class="col-lg-5 col-md-6">
        <label for="menu" class="label">
            <div class="button">{{__('partner.browse')}}</div>
            <div class="zone">{{__('partner.drop_files')}}</div>
            <input type="file" id="menu" name="menu[]" class="multiple filesUpload" multiple
                   accept="image/*, .doc,.docx, .xls, .xlsx, .pdf">
        </label>
        <div id="menus"></div>
    </div>
</div>

<div class="row mt-30">
    <div class="col-10 offset-1">
        <h6>{{__('partner.other_services')}}</h6>
    </div>
</div>
<div class="row">
    <div class="col-lg-3 offset-lg-1 col-md-4">
        <label>{{__('partner.logistics_service')}}</label>
        @foreach(LogisticsTranslatorHelper::$_methods as $key)
            <span class="checkbox-item wide">
						<input type="checkbox" name="logistic[]" value="{{$key}}"/>
						<span>{{LogisticsTranslatorHelper::translate($key)}}</span>
					</span>
        @endforeach

        <label class="mt-10">{{__('partner.staff')}}</label>
        @foreach(StaffTranslatorHelper::$_methods as $key)
            <span class="checkbox-item wide">
						<input type="checkbox" name="staff[]" value="{{$key}}"/>
						<span>{{StaffTranslatorHelper::translate($key)}}</span>
					</span>
        @endforeach

        <label class="mt-10">{{__('partner.tableware')}}</label>
        @foreach(TablewareTranslatorHelper::$_items as $item)
            <span class="checkbox-item wide">
						<input type="checkbox" name="tableware[]" value="{{$item}}"/>
						<span>{{TablewareTranslatorHelper::translate($item)}}</span>
					</span>
        @endforeach
    </div>

    <div class="col-lg-3 col-md-4">
        <label>{{__('partner.furnishing_equipment')}}</label>
        @foreach(FurnishingTranslatorHelper::$_items as $item)
            <span class="checkbox-item wide">
						<input type="checkbox" name="furnishing[]" value="{{$item}}"/>
						<span>{{FurnishingTranslatorHelper::translate($item)}}</span>
					</span>
        @endforeach


        <label class="mt-10">{{__('partner.decoration_elements')}}</label>
        @foreach(DecorationsTranslatorHelper::$_items as $item)
            <span class="checkbox-item wide">
						<input type="checkbox" name="decoration_el[]" value="{{$item}}"/>
						<span>{{DecorationsTranslatorHelper::translate($item)}}</span>
					</span>
        @endforeach
    </div>

    <div class="col-lg-3 col-md-4">
        <label>{{__('partner.office_equipment')}}</label>
        @foreach(OfficeEquipmentTranslatorHelper::$_items as $item)
            <span class="checkbox-item wide">
						<input type="checkbox" name="office_eq[]" value="{{$item}}"/>
						<span>{{OfficeEquipmentTranslatorHelper::translate($item)}}</span>
					</span>
        @endforeach

        <span class="checkbox-item wide">
					<input type="checkbox" name="office_eq[]" class="other-field" field="office_eq" value="other"/>
					<span>{{__('become_partner.other')}}</span>
				</span>
        <div class="for-office_eq additional-field mt-10"></div>

        <label class="mt-10">{{__('partner.other_service_facilities')}}
            <div class="explanation">{{__('partner.other_service_facilities_expl')}}</div>
        </label>
        <textarea name="other_services" maxlength="500" rows="3"/></textarea>
    </div>
</div>

<div class="row mt-30">
    <div class="col-10 offset-1">
        <h6>{{__('partner.want_to_add_something')}}</h6>
    </div>
</div>

<div class="row">
    <div class="col-lg-10 offset-lg-1">
        <label>{{__('partner.your_comment')}}</label>
        <textarea maxlength="500" name="comment"></textarea>
    </div>
</div>


