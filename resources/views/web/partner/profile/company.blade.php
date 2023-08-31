<ul class="companyDetails">
	<li block="companyDetails"><h4>{{__('become_partner.company_info')}}</h4></li>
	@if (!is_null($user->partnerInfo->logo) || strlen($user->partnerInfo->logo) > 0)
		<li class="li"><img src="{{ asset('storage/logos/'.$user->partnerInfo->logo)}}" alt="logo"></li>
	@endif
	<li class="li"><span>{{__('become_partner.company_name')}}:</span>
		@if (app()->getLocale() == 'en')
			{{$user->partnerInfo->en_company_name}}
		@else 
			{{$user->partnerInfo->fr_company_name}}
		@endif
	</li>
	<li class="li"><span>{{__('partner.link')}}: </span>{{$user->partnerInfo->slug}}</li>
	<li class="li"><span>{{__('become_partner.location')}}:</span> {{__('cantons.'.strtolower($user->partnerInfo->location_code).'_loc')}}</li>
	<li class="li"><span>{{__('become_partner.address')}}:</span> {{$user->partnerInfo->address}}</li>
	<li class="li"><span>{{__('become_partner.phone')}}:</span> {{$user->partnerInfo->company_phone}}</li>
	<li class="li"><span>{{__('become_partner.fax')}}:</span> {{$user->partnerInfo->fax}}</li>
	<li class="li"><span>{{__('become_partner.slogan')}}:</span></li>
	<li class="li">
		@if (app()->getLocale() == 'en')
			{{$user->partnerInfo->en_company_name}}
		@else 
			{{$user->partnerInfo->fr_company_name}}
		@endif
	</li>
	<li class="li"><span>{{__('become_partner.short_descr')}}:</span></li>
	<li class="li">
		@if (app()->getLocale() == 'en')
			{!!$user->partnerInfo->en_short_descr!!}
		@else 
			{!!$user->partnerInfo->fr_short_descr!!}
		@endif
	</li>
	<li class="li"><span>{{__('partybooker-cp.full_description')}}:</span></li>
	<li class="li">
		@if (app()->getLocale() == 'en')
			{!!$user->partnerInfo->en_full_descr!!}

		@else 
			{!!$user->partnerInfo->fr_full_descr!!}
		@endif
	</li>
	<li class="li"><span>{{__('become_partner.languages')}}:</span> {{preg_replace('/[^a-zA-Z]/', ' ', $user->partnerInfo->language)}} {{$user->partnerInfo->other_lang}}</li>
	<li class="li"><a href="#" class="button">{{__('partner.edit')}}</a></li>
</ul>
