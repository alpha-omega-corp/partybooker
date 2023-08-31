<div class="edit-general-{{$iterator}} popup popup-form editdetails partnerdetails popup-form-xl">
	@if (Auth::user()->type == 'admin')
		<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id . '/edit-general')}}" method="POST" enctype="multipart/form-data">
			@else
				<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id .'/edit-general')}}" method="POST">
					@endif

					@csrf
					<div class="close"></div>
					<div class="form">
						<h3>{{__('partner.edit_service_general_info')}}</h3>
						@if (Auth::user()->type == 'admin')
							<input type="text" name="id_partner" value="{{$user->id_partner}}" hidden />
						@else
							<input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden />
						@endif

						<label>{{__('partner.cocktail_reception_capacity')}}<span>*</span></label>
						<input type="number" name="cocktail_capacity" min="0" value="{{$advert->service->coctail}}" required />

						<label class="mt-10">{{__('partner.banquet_capacity')}}<span>*</span></label>
						<input type="number" name="banquet_capacity"  min="0" value="{{$advert->service->banquet}}" required />

						<label class="mt-10">{{__('partner.outdoor_facility')}}<span>*</span></label>
						<input type="number" name="outdor_capacity"  min="0" value="{{$advert->service->outdoor}}"required />

						<label class="mt-10">{{__('partner.conference_room')}}<span>*</span></label>
						<div class="set">
							<div class="set-conference-room">
								<input type="text" value="{{count($advert->service->room) ?? 1}}" name="set_num" hidden />
								<div class="conference-room">
									@if(count($advert->service->room))
										<div class="row">
											<div class="col-sm-8">
												<input type="text" name="room_name_1" placeholder="{{__('partner.name')}}" value="{{$advert->service->room[0]['name']}}"  />
											</div>
											<div class="col-sm-4">
												<input type="number" name="room_cap_1" min="0" placeholder="{{__('partner.capacity')}}" value="{{$advert->service->room[0]['capacity']}}"  />
											</div>
										</div>
									@else
										<div class="row">
											<div class="col-sm-8">
												<input type="text" name="room_name_1" placeholder="{{__('partner.name')}}" value="" />
											</div>
											<div class="col-sm-4">
												<input type="number" name="room_cap_1" min="0" placeholder="{{__('partner.capacity')}}" value=""/>
											</div>
										</div>
									@endif
								</div>
								@for ($i = 1; $i<count($advert->service->room); $i++)
									<div class="conference-room mt-10">
										<div class="row">
											<div class="col-sm-8">
												<input type="text" name="room_name_{{$i+1}}" placeholder="Name" value="{{$advert->service->room[$i]['name']}}" />
											</div>
											<div class="col-sm-4">
												<input type="number" name="room_cap_{{$i+1}}" min="0" placeholder="{{__('partner.capacity')}}" value="{{$advert->service->room[$i]['capacity']}}" />
											</div>
										</div>
									</div>
								@endfor
							</div>
							<div class="button" set="conference-room">{{__('partner.add_more_room')}}</div>
						</div>

						<label class="mt-10 wide">{{__('partner.reduced_mobility_access')}}<span>*</span></label>
						<span class="radio-item">
							<input type="radio" name="reduced_mobility" value="yes" @if($advert->service->reduced_mob == 'yes') checked @endif required />
							<span>{{__('partner.yes')}}</span>
						</span>
						<span class="radio-item">
							<input type="radio" name="reduced_mobility" value="no" @if($advert->service->reduced_mob == 'no') checked @endif />
							<span>{{__('partner.no')}}</span>
						</span>
						<span class="radio-item">
							<input type="radio" name="reduced_mobility" value="partial" @if($advert->service->reduced_mob == 'partial') checked @endif />
							<span>{{__('partner.partial')}}</span>
						</span>

						<label class="mt-10">{{__('partner.car_park')}}</label>
						<input type="number" name="car_park" min="0" value="{{$advert->service->car}}"/>

						<label class="mt-10">{{__('partner.conveniences')}}<span>*</span></label>
						@foreach(\App\Helpers\ConveniencesTranslatorHelper::$_items as $item)
							<span class="checkbox-item wide">
								<input type="checkbox" name="conveniences[]" value="{{$item}}" @if(strpos($advert->service->convenience, $item) != false) checked @endif/>
								<span>{{\App\Helpers\ConveniencesTranslatorHelper::translate($item)}}</span>
							</span>
						@endforeach

						<label class="mt-10">{{__('partner.Bar_dance_floor_stage')}}<span>*</span></label>
						@foreach(\App\Helpers\BarDanceFloorTranslatorHelper::$_items as $item)
							<span class="checkbox-item wide">
								<input type="checkbox" name="facilities[]" value="{{$item}}" @if(strpos($advert->service->facilities, $item) != false) checked @endif/>
								<span>{{\App\Helpers\BarDanceFloorTranslatorHelper::translate($item)}}</span>
							</span>
						@endforeach
						@if(strpos($advert->service->facilities, 'other') != false)
							<span class="checkbox-item wide">
								<input type="checkbox" name="facilities[]" class="other-field additional" field="facilities" value="other"  checked />
								<span>{{__('become_partner.other')}}</span>
							</span>
							<div class="for-facilities additional-field mt-10 visible">
								<input type="text" name="otherfacilities" maxlength="100" class="add-input-facilities" required="">
							</div>
						@else
							<span class="checkbox-item wide">
								<input type="checkbox" name="facilities[]" class="other-field" field="facilities" value="other" />
								<span>{{__('become_partner.other')}}</span>
							</span>
							<div class="for-facilities additional-field mt-10"></div>
						@endif

						<label class="mt-10">{{__('partner.bring_alcohol')}}<span>*</span></label>
						<span class="radio-item">
							<input type="radio" name="alcohol" class="has-field" field="alcohol" value="yes" @if($advert->service->alcohole == 'yes') checked @endif required />
							<span>{{__('partner.yes')}}</span>
						</span>
						<span class="radio-item">
							<input type="radio" name="alcohol" class="has-field" field="alcohol" value="no" @if($advert->service->alcohole == 'no') checked @endif/>
							<span>{{__('partner.no')}}</span>
						</span>
						@if($advert->service->alcohole == 'yes')
							<div class="for-alcohol additional-field mt-10 visible">
								<input type="text" name="yes_alcohol" maxlength="150" class="add-input-alcohol" value="{{$advert->service->alcohole_yes}}" required="">
							</div>
						@else
							<div class="for-alcohol additional-field mt-10"></div>
						@endif

						<button type="submit" class="button">{{__('partner.save')}}</button>
					</div>
				</form>
</div>
