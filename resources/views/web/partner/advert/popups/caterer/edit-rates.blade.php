@php use App\Helpers\BudgetsHelper; @endphp
@php use App\Helpers\PaymentMethodsTranslatorHelper; @endphp
@php($user = auth()->user())
<x-dashboard.modal
    id="editCateringRates{{$iterator}}"
    :title="__('partner.edit_rates_conditions')"
    :button="__('partner.edit')"
    :action="Auth::user()->type == 'admin'
        ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/edit-rates')
        : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/edit-rates')"
    :hasFiles="Auth::user()->type == 'admin'"
    method="POST">

    @if (Auth::user()->type == 'admin')
        <input type="text" name="id_partner" value="{{$user->id_partner}}" hidden/>
    @else
        <input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden/>
    @endif

    {{--<label>{{__('partner.price')}}<span>*</span></label>
    <div class="row">
        <div class="col-6">
            <input type="number" name="price" min="0" value="{{$user->partnerInfo->price}}" required />
        </div>
        <div class="col-6">
            <select name="price_for" required >
                <option value="fixed_price_per_person" selected>{{__('partner.fixed_price_per_person')}}</option>
            </select>
        </div>
    </div>--}}

    <label class="mt-10">{{__('partner.budget')}}<span>*</span></label>
    <select name="budget" required>
        @foreach(BudgetsHelper::$_budgets as $k => $v)
            <option @if($user->partnerInfo->budget == $k) selected @endif value="{{$k}}">{{__($v)}}</option>
        @endforeach
    </select>

    <label class="mt-10">{{__('partner.booking_deposit')}}<span>*</span></label>
    <input type="text" name="deposit" value="{{$advert->service->deposit}}" required/>

    <label>{{__('partner.payment_methods')}}<span>*</span></label>
    @foreach(PaymentMethodsTranslatorHelper::$_methods as $item)
        <span class="checkbox-item wide">
					<input type="checkbox" name="pay_methods[]" value="{{$item}}"
                           @if(strpos($advert->service->paymeny, $item) != false) checked @endif>
					<span>{{PaymentMethodsTranslatorHelper::translate($item)}}</span>
				</span>
    @endforeach

    <span class="checkbox-item wide">
				@if(strpos($advert->service->paymeny, 'other') != false)
            <input type="checkbox" name="pay_methods[]" class="other-field additional" field="payment" value="other"
                   checked>
        @else
            <input type="checkbox" name="pay_methods[]" class="other-field" field="payment" value="other">
        @endif

				<span>{{__('become_partner.other')}}</span>
			</span>

    @if(strpos($advert->service->paymeny, 'other') != false)
        <div class="for-payment additional-field mt-10 visible">
            <input type="text" name="otherpayment" maxlength="100" class="add-input-payment"
                   value="{{$advert->service->other_payment}}" required="">
        </div>
    @else
        <div class="for-payment additional-field mt-10"></div>
    @endif

    <label class="mt-10">{{__('partner.payment_terms')}}</label>
    <textarea name="p_terms" required/>{{$advert->service->p_terms}}</textarea>

</x-dashboard.modal>
