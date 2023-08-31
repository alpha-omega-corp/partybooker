<div class="edit-option popup popup-form">
	@if (Auth::user()->type == 'admin')
		<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/edit-option')}}" method="POST">
			<input type="text" name="id_partner" value="{{$user->partnerInfo->id_partner}}" hidden />
	@else
		<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/edit-option')}}" method="POST">
			<input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden />
	@endif
		@csrf
		<div class="close"></div>
		<div class="form">
			<h3>{{__('partner.choose_option_of_your_plan')}}</h3>

			<div class="options">
				@foreach($planOptions as $option)
					<span class="radio-item"><input id="option_{{$option['group']}}" type="radio" name="option" value="{{$option['group']}}"> <span>{{$option['name']}}</span></span>
				@endforeach
			</div>
			<button type="submit" class="button">{{__('partner.choose')}}</button>
		</div>
	</form>
</div>

