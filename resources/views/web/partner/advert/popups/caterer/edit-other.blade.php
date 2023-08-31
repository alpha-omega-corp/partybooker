<div class="edit-otherservice-{{$iterator}} popup popup-form editdetails partnerdetails popup-form-xl">
	@if (Auth::user()->type == 'admin')
		<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/edit-other')}}" method="POST" enctype="multipart/form-data">
		@else
			<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/edit-other')}}" method="POST">
		@endif

		@csrf
		<div class="close"></div>
		<div class="form">
			<h3>{{__('partner.other_services')}}</h3>
			@if (Auth::user()->type == 'admin')
				<input type="text" name="id_partner" value="{{$user->id_partner}}" hidden/>
			@else
				<input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden/>
			@endif

			<label>{{__('partner.logistics_service')}}</label>
			@foreach(\App\Helpers\LogisticsTranslatorHelper::$_methods as $item)
				<span class="checkbox-item wide">
					<input type="checkbox" name="logistic[]" value="{{$item}}"
					       @if(strpos($advert->service->logistic, $item) != false) checked @endif />
					<span>{{\App\Helpers\LogisticsTranslatorHelper::translate($item)}}</span>
				</span>
			@endforeach


			<label class="mt-10">{{__('partner.staff')}}</label>
			@foreach(\App\Helpers\StaffTranslatorHelper::$_methods as $item)
				<span class="checkbox-item wide">
					<input type="checkbox" name="staff[]" value="{{$item}}"
					       @if(strpos($advert->service->staff, $item) != false) checked @endif />
					<span>{{\App\Helpers\StaffTranslatorHelper::translate($item)}}</span>
				</span>
			@endforeach

			<label class="mt-10">{{__('partner.tableware')}}</label>
			@foreach(\App\Helpers\TablewareTranslatorHelper::$_items as $item)
				<span class="checkbox-item wide">
					<input type="checkbox" name="tableware[]" value="{{$item}}"
					       @if(strpos($advert->service->tableware, $item) != false) checked @endif />
					<span>{{\App\Helpers\TablewareTranslatorHelper::translate($item)}}</span>
				</span>
			@endforeach

			<label class="mt-10">{{__('partner.furnishing_equipment')}}</label>
			@foreach(\App\Helpers\FurnishingTranslatorHelper::$_items as $item)
				<span class="checkbox-item wide">
					<input type="checkbox" name="furnishing[]" value="{{$item}}"
					       @if(strpos($advert->service->furnishing, $item) != false) checked @endif />
					<span>{{\App\Helpers\FurnishingTranslatorHelper::translate($item)}}</span>
				</span>
			@endforeach

			<label class="mt-10">{{__('partner.decoration_elements')}}</label>
			@foreach(\App\Helpers\DecorationsTranslatorHelper::$_items as $item)
				<span class="checkbox-item wide">
					<input type="checkbox" name="decoration_el[]" value="{{$item}}"
					       @if(strpos($advert->service->decoration, $item) != false) checked @endif />
					<span>{{\App\Helpers\DecorationsTranslatorHelper::translate($item)}}</span>
				</span>
			@endforeach

			<label class="mt-10">{{__('partner.office_equipment')}}</label>
			@foreach(\App\Helpers\OfficeEquipmentTranslatorHelper::$_items as $item)
				<span class="checkbox-item wide">
					<input type="checkbox" name="office_eq[]" value="{{$item}}"
					       @if(strpos($advert->service->office, $item) != false) checked @endif />
					<span>{{\App\Helpers\OfficeEquipmentTranslatorHelper::translate($item)}}</span>
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
			<button type="submit" class="button">{{__('partner.save')}}</button>
		</div>
	</form>
</div>
