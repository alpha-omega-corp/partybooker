<div class="edit-event-types popup popup-form editdetails partnerdetails">
	@if (Auth::user()->type == 'admin')
		<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/edit-event-types')}}" method="POST">
	@else
		<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/edit-event-types')}}" method="POST">
	@endif
		@csrf
		<div class="close"></div>
		<div class="form">
			<h3>{{__('partner.choose_event_types')}}</h3>
			@if (Auth::user()->type == 'admin')
				<input type="text" name="id_partner" value="{{$user->partnerInfo->id_partner}}" hidden />
			@else
				<input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden />
			@endif

			@foreach($eventTypes as $e)
				<span class="checkbox-item">
					<input type="checkbox" name="event_type[]"  @if(in_array($e->id, $partnerEventTypes)) checked @endif value="{{$e->id}}">
					<span>{{$e->en_name}}</span>
					<span class="checkmark"></span>
				</span>
			@endforeach


			<button type="submit" class="button">{{__('partner.choose')}}</button>
		</div>
	</form>
</div>
