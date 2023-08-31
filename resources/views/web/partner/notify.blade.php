<div class="notifications" style="display: block">
	<ul>
		@if (is_null($user->partnerInfo->plan))
			<li class="blue">{{__('partner.choose_yearly_plan')}}
				<div class="del">x</div>
			</li>
		@else
			@if ($user->partnerInfo->payment_status == 0)
				<li class="red">{{__('partner.pay_for_plan')}}
					<div class="del">x</div>
				</li>
			@else
				@if ($user->partnerInfo->public == 0)
					<li class="red">{{__('partner.you_not_published')}}
						<div class="del">x</div>
					</li>
				@endif
				@if ($user->partnerInfo->planExpirationDays < 30)
					<li class="orange-d">{{__('partner.plan_expire', ['count' => $user->partnerInfo->planExpirationDays])}}
						<div class="del">x</div>
					</li>
				@endif
			@endif
		@endif
	</ul>
</div>
