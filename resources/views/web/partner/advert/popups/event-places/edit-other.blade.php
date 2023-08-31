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
				<input type="text" name="id_partner" value="{{$user->id_partner}}" hidden />
			@else
				<input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden />
			@endif

			<label class="wide"><h3>{{__('partner.staff')}}</h3><span>*</span></label>
			@foreach(\App\Helpers\EventsStaffTranslatorHelper::$_items as $item)
				<span class="checkbox-item wide">
					<input type="checkbox" name="staff[]" value="{{$item}}" @if(strpos($advert->service->staff, $item) != false) checked @endif />
					<span>{{\App\Helpers\EventsStaffTranslatorHelper::translate($item)}}</span>
				</span>
			@endforeach
			@if(strpos($advert->service->staff, 'other') != false)
				<span class="checkbox-item wide">
					<input type="checkbox" name="staff[]" class="other-field additional" field="staff" value="other" checked />
					<span>{{__('become_partner.other')}}</span>
				</span>
				<div class="for-staff additional-field mt-10 visible">
					<input type="text" name="otherstaff" maxlength="100" class="add-input-staff" required="">
				</div>
			@else
				<span class="checkbox-item wide">
					<input type="checkbox" name="staff[]" class="other-field" field="staff" value="other" />
					<span>{{__('become_partner.other')}}</span>
				</span>
				<div class="for-staff additional-field mt-10"></div>
			@endif

			<label class="mt-10">{{__('partner.other_services')}}</label>
			@foreach(\App\Helpers\OtherServicesTranslatorHelper::$_items as $item)
				<span class="checkbox-item wide">
					<input type="checkbox" name="other[]" value="{{$item}}" @if(strpos($advert->service->other_services, $item) != false) checked @endif />
					<span>{{\App\Helpers\OtherServicesTranslatorHelper::translate($item)}}</span>
				</span>
			@endforeach
			@if(strpos($advert->service->other_services, 'other') != false)
				<span class="checkbox-item wide">
					<input type="checkbox" name="other[]" class="other-field additional" field="other-service" value="other" checked />
					<span>{{__('become_partner.other')}}</span>
				</span>
				<div class="for-other-service additional-field mt-10 visible">
					<input type="text" name="otherother-service" maxlength="100" class="add-input-other-service" required="">
				</div>
			@else
				<span class="checkbox-item wide">
					<input type="checkbox" name="other[]" class="other-field" field="other-service" value="other" />
					<span>{{__('become_partner.other')}}</span>
				</span>
				<div class="for-other-service additional-field mt-10"></div>
			@endif

			<label class="mt-10">{{__('partner.accomodation')}}<span>*</span></label>
			<span class="radio-item wide">
				<input type="radio" name="accomodation" class="has-field" field="accomodation" value="yes" @if($advert->service->accomodation == 'yes') checked @endif required />
				<span>{{__('partner.yes')}}</span>
			</span>
			<span class="radio-item wide">
				<input type="radio" name="accomodation" class="has-field" field="accomodation" value="yes-nearby" @if($advert->service->accomodation == 'yes-nearby') checked @endif />
				<span>{{__('partner.YES_nearby')}}</span>
			</span>
			<span class="radio-item wide">
				<input type="radio" name="accomodation" class="has-field" field="accomodation" value="not-available" @if($advert->service->accomodation == 'not-available') checked @endif />
				<span>{{__('partner.not_available')}}</span>
			</span>
			@if($advert->service->accomodation == 'yes')
				<div class="for-accomodation additional-field mt-10 visible">
					<input type="number" name="yes_accomodation" min="0" class="add-input-accomodation" placeholder="capacity" required="" value="{{$advert->service->number_questrooms}}">
				</div>
			@else
				<div class="for-accomodation additional-field mt-10"></div>
			@endif
			<button type="submit" class="button">{{__('partner.save')}}</button>
		</div>
	</form>
</div>
