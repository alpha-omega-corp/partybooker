@php use App\Helpers\LogisticsTranslatorHelper; @endphp
@php use App\Helpers\StaffTranslatorHelper; @endphp
@php use App\Helpers\TablewareTranslatorHelper; @endphp
@php use App\Helpers\FurnishingTranslatorHelper; @endphp
@php use App\Helpers\DecorationsTranslatorHelper; @endphp
@php use App\Helpers\OfficeEquipmentTranslatorHelper; @endphp
<x-dashboard.modal
    id="editCateringGeneralOther{{$iterator}}"
    :title="__('partner.other_services')"
    :button="__('partner.edit')"
    :action="Auth::user()->type == 'admin'
        ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/edit-other')
        : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/edit-other')"
    :hasFiles="Auth::user()->type == 'admin'"
    method="POST">


    @if (Auth::user()->type == 'admin')
        <input type="text" name="id_partner" value="{{$user->id_partner}}" hidden/>
    @else
        <input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden/>
    @endif

    <label>{{__('partner.logistics_service')}}</label>
    @foreach(LogisticsTranslatorHelper::$_methods as $item)
        <span class="checkbox-item wide">
					<input type="checkbox" name="logistic[]" value="{{$item}}"
                           @if(strpos($advert->service->logistic, $item) != false) checked @endif />
					<span>{{LogisticsTranslatorHelper::translate($item)}}</span>
				</span>
    @endforeach


    <label class="mt-10">{{__('partner.staff')}}</label>
    @foreach(StaffTranslatorHelper::$_methods as $item)
        <span class="checkbox-item wide">
					<input type="checkbox" name="staff[]" value="{{$item}}"
                           @if(strpos($advert->service->staff, $item) != false) checked @endif />
					<span>{{StaffTranslatorHelper::translate($item)}}</span>
				</span>
    @endforeach

    <label class="mt-10">{{__('partner.tableware')}}</label>
    @foreach(TablewareTranslatorHelper::$_items as $item)
        <span class="checkbox-item wide">
					<input type="checkbox" name="tableware[]" value="{{$item}}"
                           @if(strpos($advert->service->tableware, $item) != false) checked @endif />
					<span>{{TablewareTranslatorHelper::translate($item)}}</span>
				</span>
    @endforeach

    <label class="mt-10">{{__('partner.furnishing_equipment')}}</label>
    @foreach(FurnishingTranslatorHelper::$_items as $item)
        <span class="checkbox-item wide">
					<input type="checkbox" name="furnishing[]" value="{{$item}}"
                           @if(strpos($advert->service->furnishing, $item) != false) checked @endif />
					<span>{{FurnishingTranslatorHelper::translate($item)}}</span>
				</span>
    @endforeach

    <label class="mt-10">{{__('partner.decoration_elements')}}</label>
    @foreach(DecorationsTranslatorHelper::$_items as $item)
        <span class="checkbox-item wide">
					<input type="checkbox" name="decoration_el[]" value="{{$item}}"
                           @if(strpos($advert->service->decoration, $item) != false) checked @endif />
					<span>{{DecorationsTranslatorHelper::translate($item)}}</span>
				</span>
    @endforeach

    <label class="mt-10">{{__('partner.office_equipment')}}</label>
    @foreach(OfficeEquipmentTranslatorHelper::$_items as $item)
        <span class="checkbox-item wide">
					<input type="checkbox" name="office_eq[]" value="{{$item}}"
                           @if(strpos($advert->service->office, $item) != false) checked @endif />
					<span>{{OfficeEquipmentTranslatorHelper::translate($item)}}</span>
				</span>
    @endforeach

    @if(strpos($advert->service->office, 'coffee-machine') != false)
        <span class="checkbox-item wide">
					<input type="checkbox" name="office_eq[]" class="other-field additional" field="office_eq"
                           value="other" checked/>
					<span>{{__('become_partner.other')}}</span>
				</span>
        <div class="for-office_eq additional-field mt-10 visible">
            <input type="text" name="otheroffice_eq" maxlength="100" class="add-input-office_eq"
                   required="">
        </div>
    @else
        <span class="checkbox-item wide">
					<input type="checkbox" name="office_eq[]" class="other-field" field="office_eq" value="other"/>
					<span>{{__('become_partner.other')}}</span>
				</span>
        <div class="for-office_eq additional-field mt-10"></div>
    @endif

</x-dashboard.modal>

