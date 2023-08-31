<div class="edit-schedule-{{$iterator}} popup popup-form editdetails partnerdetails popup-form-xl">
	@if (Auth::user()->type == 'admin')
		<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/edit-schedule')}}" method="POST" enctype="multipart/form-data">
	@else
		<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/edit-schedule')}}" method="POST">
	@endif
	
		@csrf
		<div class="close"></div>
		<div class="form">
			<h3>{{__('partner.edit_schedule')}}</h3>
			@if (Auth::user()->type == 'admin')
				<input type="text" name="id_partner" value="{{$user->id_partner}}" hidden />
			@else
				<input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden />
			@endif
			
			<label class="mt-10">{{__('partner.annual_holidays')}}</label>
			<input name="holidays" maxlength="350" value="{{$advert->service->holidays}}">
			
			<button type="submit" class="button">{{__('partner.save')}}</button>
		</div>
	</form>	
</div>
