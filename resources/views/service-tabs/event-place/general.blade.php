<h4>{{__('service.for_event_places')}}</h4>

<h6>{{strtoupper(__('service.general'))}}</h6>
<p><span>{{__('partner.cocktail_reception_capacity')}}:</span> {{$details->coctail ?? ''}}</p>
<p><span>{{__('partner.banquet_capacity')}}:</span> {{$details->banquet ?? ''}}</p>
<p><span>{{__('partner.outdoor_facility')}}:</span> {{$details->outdoor ?? ''}}</p>
<p><span>{{__('partner.sitting_schema')}}:</span></p>
<p>
	@if(isset($details->sitting))
		@foreach (json_decode($details->sitting) ?? [] as $sitting)
			@if (strlen($sitting) > 0)
				{{$sitting}}<span class="coma">,</span>
			@endif
		@endforeach
	@endif
</p>
<p><span>{{__('partner.conference_room')}}:</span></p>
<p>
	@foreach ($details->room ?? [] as $room)
		{{__('partner.name')}}: {{$room['name']}}, {{strtolower(__('partner.capacity'))}}: {{$room['capacity']}}<span class="coma"><br></span>
	@endforeach
</p>
@if (isset($details->oth_facilities) && !is_null($details->oth_facilities))
	<p><span>{{__('partner.other_facilities')}}:</span> {{$details->oth_facilities ?? ""}}</p>
@endif
<p><span>{{__('partner.reduced_mobility_access')}}:</span> {{\App\Helpers\SimpleTranslateHelper::translate($details->reduced_mob)}}</p>
<p><span>{{__('partner.car_park')}}:</span> {{$details->car ?? ''}}</p>
<p><span>{{__('partner.conveniences')}}:</span></p>
<p>
	@if(isset($details->convenience) && $details->convenience)
		@foreach (json_decode($details->convenience) ?? [] as $convenience)
			@if (strlen($convenience) > 0)
				{{\App\Helpers\ConveniencesTranslatorHelper::translate($convenience)}}<span class="coma">,&nbsp;</span>
			@endif
		@endforeach
	@endif
</p>
<p><span>{{__('partner.Bar_dance_floor_stage')}}:</span></p>
<p>
	@foreach ( isset($details->facilities) ? json_decode($details->facilities) : [] as $facilities)
		@if (strlen($facilities) > 0)
			{{\App\Helpers\BarDanceFloorTranslatorHelper::translate($facilities)}}<span class="coma">,&nbsp;</span>
		@endif
	@endforeach
</p>
<p><span>{{__('partner.bring_alcohol')}}:</span> {{\App\Helpers\SimpleTranslateHelper::translate($details->alcohole)}} {{$details->alcohole_yes}}</p>

<h6>{{__('partner.catering-stewardship')}}</h6>
<p><span>{{__('partner.property_prepare_meals')}}</span> {{\App\Helpers\SimpleTranslateHelper::translate($details->meals)}}</p>
<p><span>{{__('partner.works_with_affiliated_partners')}}</span> {{$details->affiliate_caterer ? \App\Helpers\SimpleTranslateHelper::translate($details->affiliate_caterer) : ""}}</p>
<p>
	@foreach (isset($details->yes_af_caterers) ? json_decode($details->yes_af_caterers) : [] as $yes_af_caterers)

		@if (strlen($yes_af_caterers->name) > 0 )
			<a href="{{$yes_af_caterers->url ?? "#"}}" target="_blank">{{$yes_af_caterers->name}}</a><br>
		@endif
	@endforeach
</p>
<p><span>{{__('partner.free_choice_of_caterer')}}:</span> {{\App\Helpers\SimpleTranslateHelper::translate($details->free_caterer)}}</p>
<p>
	@foreach (isset($details->yes_free_caterers) ? json_decode($details->yes_free_caterers) : [] as $yes_free_caterers)
		@if (strlen($yes_free_caterers) > 0)
			{{$yes_free_caterers}}<span class="coma"><br></span>
		@endif
	@endforeach
</p>
<p><span>{{__('partner.external_food_allowed')}}</span> {{\App\Helpers\SimpleTranslateHelper::translate($details->ext_food)}}</p>
<p><span>{{__('partner.available_furniture_equipment')}}:</span></p>
<p>
	@foreach (isset($details->furniture) ? json_decode($details->furniture) : [] as $furniture)
		@if (strlen($furniture) > 0)
			{{\App\Helpers\FurnitureTranslatorHelper::translate($furniture)}}<span class="coma">,&nbsp;</span>
		@endif
	@endforeach
</p>
<p><span>{{__('partner.technical_equipment')}}:</span></p>
<p>
	@foreach (isset($details->equipment) ? json_decode($details->equipment) : [] as $equipment)
		@if (strlen($equipment) > 0)
			{{\App\Helpers\TechnicalEquipmentTranslatorHelper::translate($equipment)}}<span class="coma">,&nbsp;</span>
		@endif
	@endforeach
</p>
<p>{{$details->other_eq ?? ''}}</p>

<h6>{{__('partner.other_services')}}</h6>
<p><span>{{__('partner.staff')}}:</span>
	@foreach (isset($details->staff) ? json_decode($details->staff) : [] as $staff)
		@if (strlen($staff) > 0)
			{{\App\Helpers\EventsStaffTranslatorHelper::translate($staff)}}<span class="coma">,&nbsp;</span>
		@endif
	@endforeach
	{{$details->other_staff ?? '' }}
</p>
<p><span>{{__('partner.accommodation')}}:</span> {{\App\Helpers\SimpleTranslateHelper::translate($details->accomodation)}}</p>
<p>{{$details->number_questrooms ?? ''}}</p>
<p><span>{{__('become_partner.other')}}:</span>
	@if(isset($details->other_services))
		@foreach (json_decode($details->other_services) ?? [] as $other_services)
			@if (strlen($other_services) > 0)
				{{\App\Helpers\OtherServicesTranslatorHelper::translate($other_services)}}<span class="coma">,&nbsp;</span>
			@endif
		@endforeach
	@endif
	{{$details->more_services ?? ''}}
</p>

<h6>{{__('partner.comment')}}:</h6>
<p>{{isset($details->comment) ? $details->comment : ''}}</p>
