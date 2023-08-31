<div class="edit-comment-{{$iterator}} popup popup-form editdetails partnerdetails">
@if (Auth::user()->type == 'admin')
	<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/edit-comment/' .$advert->id)}}" method="POST" enctype="multipart/form-data">
@else
	<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/edit-comment/'.$advert->id)}}" method="POST">
@endif
		@csrf
		<div class="close"></div>
		<div class="form">
			<h3>{{__('partner.comment')}}</h3>
			@if (Auth::user()->type == 'admin')
				<input type="text" name="id_partner" value="{{$user->id_partner}}" hidden />
			@else
				<input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden />
			@endif

			<label>{{__('partner.your_comment')}}</label>
			<textarea name="comment" maxlength="500">{{$advert->service->comment}}</textarea>

			<button type="submit" class="button">{{__('partner.save')}}</button>
		</div>
	</form>
</div>
