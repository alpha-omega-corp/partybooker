@if($user->partnerInfo->currentPlan && $user->partnerInfo->currentPlan->name == 'Exclusif')
	@if (!$user->partnerInfo->eventTypes)
		<ul class="event-types attention">
			<li block="event-types"><h4>{{__('partner.event_types')}}</h4></li>
			<li class="li">{{__('partner.choose_event_types')}}</li>
			<li class="li"><a href="#" class="button">{{__('partner.choose')}}</a></li>
		</ul>
	@else
		<ul class="event-types">
			<li block="event-types"><h4>{{__('partner.event_types')}}</h4></li>
			<li class="li"><span>#{{__('partner.event_types')}}</span></li>
			@foreach($user->partnerInfo->eventTypes as $et)
				<li class="li">{{app()->getLocale() == 'en' ? $et->en_name : $et->fr_name}}</li>
			@endforeach
			<li class="li"><a href="#" class="button">{{__('partner.edit')}}</a></li>
		</ul>
	@endif
@endif
