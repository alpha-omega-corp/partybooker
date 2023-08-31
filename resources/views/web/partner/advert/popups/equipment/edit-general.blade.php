<div class="edit-general-{{$iterator}} popup popup-form editdetails partnerdetails popup-form-xl">
@if (Auth::user()->type == 'admin')
	<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/edit-general')}}" method="POST" enctype="multipart/form-data">
@else
	<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/edit-general')}}" method="POST">
@endif
	
		@csrf
		<div class="close"></div>
		<div class="form">
			<h3>{{__('partner.edit_service_general_info')}}</h3>
			@if (Auth::user()->type == 'admin')
				<input type="text" name="id_partner" value="{{$user->id_partner}}" hidden />
			@else
				<input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden />
			@endif

			<label>{{__('partner.geographical_limit')}}<span>*</span></label>
			<textarea name="geo" rows="2" required>{{$advert->service->geo}}</textarea>

			<label class="mt-10">{{__('partner.complimentary_services')}}<span>*</span></label>
			<textarea name="complim_services" rows="2" required>{{$advert->service->complim_services}}</textarea>

			<label class="mt-10">{{__('partner.proposed_equipment')}}<span>*</span></label>
			<textarea name="proposed" rows="2" required>{{$advert->service->proposed}}</textarea>

			<label class="mt-10">{{__('partner.references')}}</label>
			<textarea name="references" rows="2">{{$advert->service->references}}</textarea>

			<button type="submit" class="button">{{__('partner.save')}}</button>
		</div>
	</form>	
</div>
