<h4>{{__('service.for_event_places')}}</h4>

<p><span>{{__('partner.working_days')}}:</span>
	@if(isset($details))
		@foreach (json_decode($details->working_days) ?? [] as $day)
			@if (strlen($day) > 0)
				{{__('days.'.$day)}}<span class="coma">,</span>
			@endif
		@endforeach
	@endif
</p>
<li class="li"><span>{{__('partner.opening_hours')}}:</span>
	@foreach($details->working_time as $time)
		<p>{!! "<b>{$time->open} - {$time->close}</b> : {$time->description}"!!}</p>
	@endforeach
</li>
<p><span>{{__('partner.annual_holidays')}}:</span> {{$details ? $details->holidays : ''}}</p>
<p>
	<span>{{__('partner.possibility_extend_time')}}:</span> {{$details ? \App\Helpers\SimpleTranslateHelper::translate($details->extansion) : ''}}
	@if (isset($details) && !is_null($details->ext_true))
		, {{$details->ext_true}}
	@endif
</p>
