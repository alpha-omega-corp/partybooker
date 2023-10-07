<h6 class="text-uppercase">{{__('service.general')}}</h6>

<p><span>{{__('partner.geographical_limit')}}:</span> {{$details->geo ?? "" }}</p>
<p><span>{{__('partner.min_max_guests')}}:</span>{{__('partner.from')}} {{$details->min_guests ?? 0 }} @if(isset($details->max_guests)) {{__('partner.to')}} {{$details->max_guests ?? 0}}@endif</p>
<p><span>{{__('partner.smood_ch_link')}}:</span> <a href="{{$details->smood ?? ''}}" target="_blank">{{$details->smood ?? 0}}</a></p>

<h6>{{__('partner.specialties')}}</h6>
<p><span>{{__('partner.specialties')}}:</span> {{$details->specialities ?? ''}}</p>
<p><span>{{__('partner.menus')}}:</span> </p>
@if (isset($details) && $details->menu)
	@foreach (json_decode($details->menu) ?? [] as $menu)
		<p><a href="{{ asset('storage/menus/'.$menu)}}" target="blank">{{$menu}}</a></p>
	@endforeach
@endif

<h6>{{__('partner.other_services')}}</h6>
<p><span>{{__('partner.logistics_service')}}:</span>
	@if(isset($details))
		@foreach (json_decode($details->logistic)??[] as $logistic)
			@if (strlen($logistic) > 0)
				{{\App\Helpers\LogisticsTranslatorHelper::translate($logistic)}}<span class="coma">,&nbsp;</span>
			@endif
		@endforeach
	@endif
</p>
<p><span>{{__('partner.staff')}}:</span>
	@if(isset($details))
		@foreach (json_decode($details->staff)??[] as $staff)
			@if (strlen($staff) > 0)
				{{\App\Helpers\StaffTranslatorHelper::translate($staff)}}<span class="coma">,&nbsp;</span>
			@endif
		@endforeach
	@endif
</p>
<p><span>{{__('partner.tableware')}}:</span>
	@foreach (json_decode($details->tableware)??[] as $tableware)
		@if (strlen($tableware) > 0)
			{{\App\Helpers\TablewareTranslatorHelper::translate($tableware)}}<span class="coma">,&nbsp;</span>
		@endif
	@endforeach
</p>
<p><span>{{__('partner.furnishing_equipment')}}:</span>
	@foreach (json_decode($details->furnishing) ?? [] as $furnishing)
		@if (strlen($furnishing) > 0)
			{{\App\Helpers\FurnishingTranslatorHelper::translate($furnishing)}}<span class="coma">,&nbsp;</span>
		@endif
	@endforeach
</p>
<p><span>{{__('partner.decoration_elements')}}:</span>
	@foreach (json_decode($details->decoration) ?? [] as $decoration)
		@if (strlen($decoration) > 0)
			{{\App\Helpers\DecorationsTranslatorHelper::translate($decoration)}}<span class="coma">,&nbsp;</span>
		@endif
	@endforeach
</p>
<p><span>{{__('partner.office_equipment')}}:</span>
	@foreach (json_decode($details->office) ?? [] as $office)
		@if (strlen($office) > 0)
			{{\App\Helpers\OfficeEquipmentTranslatorHelper::translate($office)}}<span class="coma">,&nbsp;</span>
		@endif
	@endforeach
</p>
<p><span>{{__('partner.other_service_facilities')}}:</span> {{$details ? $details->other_services : ""}}</p>

<h6>{{__('partner.comment')}}</h6>
<p>{{$details ? $details->comment : "" }}</p>

