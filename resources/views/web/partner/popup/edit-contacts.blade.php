<div class="edit-contacts popup popup-form">
	@if (Auth::user()->type == 'admin')
		<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/edit-contacts')}}" method="POST">
	@else 
		<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/edit-contacts')}}" method="POST">
	@endif
		@csrf
		<div class="close"></div>
		<div class="form">
			<h3>{{__('partner.edit_contacts')}}</h3>
			<input type="text" name="id_partner" value="{{$user->partnerInfo->id_partner}}" hidden />
			<input type="email" name="current_email" value="{{$user->partnerInfo->email}}" hidden />
			<input type="tel" name="current_phone" value="{{$user->partnerInfo->phone}}" hidden />

			<input type="text" name="name" placeholder="{{__('partner.your_name')}}" value="{{$user->name}}" required />
			<input type="email" name="email" placeholder="{{__('partner.your_email')}}" value="{{$user->email}}" required />
			<input type="tel" name="phone" placeholder="{{__('partner.your_phone_number')}}" value="{{$user->partnerInfo->phone}}" required />

			<button type="submit" class="button">{{__('partner.save')}}</button>
		</div>
	</form>	
</div>
