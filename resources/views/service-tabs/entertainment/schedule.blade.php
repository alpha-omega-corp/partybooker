<h4>{{__('service.for')}} {{__('categories.cat6')}}</h4>

<p><span>{{__('partner.working_days')}}:</span>
	@if(isset($details))
		@foreach (json_decode($details->working_days)??[] as $day)
			@if (strlen($day) > 0)
				{{__('days.'.$day)}}<span class="coma">,</span>
			@endif
		@endforeach
	@endif
</p>
<p><span>{{__('partner.duration')}}:</span> {{isset($details) ? $details->duration : ''}}</p>
<p><span>{{__('partner.annual_holidays')}}:</span> {{$details ? $details->holidays : ''}}</p>
<p><span>{{__('partner.possibility_extend_time')}}:</span> {{$details ? \App\Helpers\SimpleTranslateHelper::translate($details->extansion) : ''}}
	@if (isset($details) && !is_null($details->ext_true))
		, {{$details->ext_true}}
	@endif
</p>
