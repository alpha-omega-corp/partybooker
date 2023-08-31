@if(isset($user->partnerInfo->currentPlan))
	@if (!($user->partnerInfo->plan_option_group) )
		<ul class="optionPlan attention">
			<li block="optionPlan"><h4>{{__('partner.plan_options')}}</h4></li>
			<li class="li"><span>{{__('partner.plan')}}:</span> {{isset($user->partnerInfo->currentPlan) ? $user->partnerInfo->currentPlan->name : ''}}   </li>
			<li class="li title"><span>{{__('partner.choose_plan_option')}}</span></li>
			@foreach($planOptions as $item)
				<li class="li" ><span>#</span> {{$item['name']}} </li>
			@endforeach
			<li class="li"><a href="#" class="button">{{__('partner.choose')}}</a></li>
		</ul>
	@else
		<ul class="optionPlan">
			<li block="optionPlan"><h4>{{__('partner.plan_options')}}</h4></li>
			<li class="li title"><span>{{__('partner.plan')}}: </span> {{$user->partnerInfo->currentPlan->name}}</li>
			@foreach($planOptions as $item)
				@if($item['group'] == $user->partnerInfo->plan_option_group)
					<li class="li" ><span>#</span> {{$item['name']}} </li>
				@endif
			@endforeach
			<li class="li"><a href="#" class="button">{{__('partner.edit')}}</a></li>
		</ul>
	@endif
@endif
@push('footer')

	<script>
		var groupCurrent = '{{$user->partnerInfo->plan_option_group}}';
		$('ul.optionPlan li a.button').on('click', function(e){
			$('.radio-item').append('<span class="checkmark"></span>');
			$('div.options #option_' + groupCurrent).click();
		});
	</script>
@endpush
