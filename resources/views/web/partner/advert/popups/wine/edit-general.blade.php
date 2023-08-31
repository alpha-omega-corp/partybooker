<div class="edit-general-{{$iterator}} popup popup-form editdetails partnerdetails popup-form-xl">
	@if (Auth::user()->type == 'admin')
		<form class="login"
		      action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/edit-general')}}"
		      method="POST" enctype="multipart/form-data">
			@else
				<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/edit-general')}}" method="POST">
					@endif

					@csrf
					<div class="close"></div>
					<div class="form">
						<h3>{{__('partner.edit_service_general_info')}}</h3>
						@if (Auth::user()->type == 'admin')
							<input type="text" name="id_partner" value="{{$user->id_partner}}" hidden/>
						@else
							<input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden/>
						@endif

						<label>{{__('partner.service_or_activity_name')}}<span>*</span></label>
						<div class="set">
							<div class="set-service_activity">
								<input type="text" value="{{count($advert->service->service)}}" name="set_num_service" hidden/>
								<div class="service-activity">
									<input type="text" name="service_activity_name1" maxlength="30" placeholder="Name" value="{{isset($advert->service->service[0]) ? $advert->service->service[0]['name'] : ''}}" required/>
									<textarea name="service_activity_description1" rows="2" maxlength="300" placeholder="Description" class="mt-10" required/>{{isset($advert->service->service[0]) ? $advert->service->service[0]['description'] : '' }}</textarea>
								</div>
								@for ($i = 1; $i<count($advert->service->service); $i++)
									<div class="service-activity mt-10">
										<input type="text" name="service_activity_name{{$i+1}}" maxlength="30" placeholder="Name" value="{{isset($advert->service->service[$i]) ? $advert->service->service[$i]['name'] : ''}}" required/>
										<textarea name="service_activity_description{{$i+1}}" rows="2" maxlength="300" placeholder="Description" class="mt-10" required/>{{isset($advert->service->service[$i]) ? $advert->service->service[$i]['description'] : ''}}</textarea>
									</div>
								@endfor
							</div>
							<div class="button" set="service_activity">{{__('partner.add_one_more')}}</div>
						</div>

						<label>{{__('partner.participant_capacity')}}<span>*</span></label>
						<div class="set">
							<div class="set-participant">
								<input type="text" value="{{sizeof(json_decode($advert->service->participant))}}" name="set_num_participant" hidden/>
								<div class="participant">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="space_name1" maxlength="30"
											       placeholder="{{__('partner.space_name')}}"
											       value="{{substr(json_decode($advert->service->participant)[0], 11, strpos(json_decode($advert->service->participant)[0], 'min:') - 13)}}"
											       required/>
										</div>
										<div class="col-sm-3">
											<input type="number" name="min_num1" min="0" placeholder="min"
											       value="{{substr(json_decode($advert->service->participant)[0], strpos(json_decode($advert->service->participant)[0], 'min:') + 4, strpos(json_decode($advert->service->participant)[0], 'max:') - strpos(json_decode($advert->service->participant)[0], 'min:') - 6)}}"
											       required/>
										</div>
										<div class="col-sm-3">
											<input type="number" name="max_num1" min="1" placeholder="max"
											       value="{{substr(json_decode($advert->service->participant)[0],strpos(json_decode($advert->service->participant)[0], 'max:')+4, strlen(json_decode($advert->service->participant)[0]))}}"
											       required/>
										</div>
									</div>
								</div>
								@for ($i = 1; $i<sizeof(json_decode($advert->service->participant)); $i++)
									<div class="participant mt-10">
										<div class="row">
											<div class="col-sm-6">
												<input type="text" name="space_name{{$i+1}}" maxlength="30"
												       placeholder="{{__('partner.space_name')}}"
												       value="{{substr(json_decode($advert->service->participant)[$i], 11, strpos(json_decode($advert->service->participant)[$i], 'min:') - 13)}}"
												       required/>
											</div>
											<div class="col-sm-3">
												<input type="number" name="min_num{{$i+1}}" min="0" placeholder="min"
												       value="{{substr(json_decode($advert->service->participant)[$i], strpos(json_decode($advert->service->participant)[$i], 'min:') + 4, strpos(json_decode($advert->service->participant)[$i], 'max:') - strpos(json_decode($advert->service->participant)[$i], 'min:') - 6)}}"
												       required/>
											</div>
											<div class="col-sm-3">
												<input type="number" name="max_num{{$i+1}}" min="1" placeholder="max"
												       value="{{substr(json_decode($advert->service->participant)[$i],strpos(json_decode($advert->service->participant)[$i], 'max:')+4, strlen(json_decode($advert->service->participant)[$i]))}}"
												       required/>
											</div>
										</div>
									</div>
								@endfor

							</div>
							<div class="button" set="participant">{{__('partner.add_one_more')}}</div>
						</div>

						<label>{{__('partner.wine')}}<span>*</span></label>
						<div class="set">
							<div class="set-wine">
								<input type="text" value="{{sizeof(json_decode($advert->service->wine))}}"
								       name="set_num_wine" hidden/>
								<div class="wine">
									<input type="text" name="wine_name1" maxlength="30" placeholder="Name"
									       value="{{substr(json_decode($advert->service->wine)[0], 5, strpos(json_decode($advert->service->wine)[0], 'description:') - 7)}}"
									       required/>
									<textarea name="wine_description1" rows="2" maxlength="300"
									          placeholder="Grape variety" class="mt-10"
									          required/>{{substr(json_decode($advert->service->wine)[0],strpos(json_decode($advert->service->wine)[0], 'description:')+12, strlen(json_decode($advert->service->wine)[0]))}}</textarea>
								</div>
								@for ($i = 1; $i<sizeof(json_decode($advert->service->wine)); $i++)
									<div class="wine mt-10">
										<input type="text" name="wine_name{{$i+1}}" maxlength="30" placeholder="Name"
										       value="{{substr(json_decode($advert->service->wine)[$i], 5, strpos(json_decode($advert->service->wine)[$i], 'description:') - 7)}}"
										       required/>
										<textarea name="wine_description{{$i+1}}" rows="2" maxlength="300"
										          placeholder="Grape variety" class="mt-10"
										          required/>{{substr(json_decode($advert->service->wine)[$i],strpos(json_decode($advert->service->wine)[$i], 'description:')+12, strlen(json_decode($advert->service->wine)[$i]))}}</textarea>
									</div>
								@endfor

							</div>
							<div class="button" set="wine">{{__('partner.add_one_more')}}</div>
						</div>

						<label>{{__('partner.affiliations')}}</label>
						<div class="set">
							<div class="set-aff">
								<input type="text" value="{{sizeof(json_decode($advert->service->affiliation))}}" name="set_num_aff" hidden/>
								@if(isset(json_decode($advert->service->affiliation)[0]))
									<div class="affiliations">
										<input type="text" name="aff_name1" maxlength="30" placeholder="Name" value="{{substr(json_decode($advert->service->affiliation)[0], 5, strpos(json_decode($advert->service->affiliation)[0], 'link:') - 7)}}"/>
										<input type="url" name="aff_link1" placeholder="Link" class="mt-10" value="{{substr(json_decode($advert->service->affiliation)[0],strpos(json_decode($advert->service->affiliation)[0], 'link:')+5, strlen(json_decode($advert->service->affiliation)[0]))}}"/>
									</div>
								@else
									<div class="affiliations">
										<input type="text" name="aff_name1" maxlength="30" placeholder="Name" value=""/>
										<input type="url" name="aff_link1" placeholder="Link" class="mt-10" value=""/>
									</div>
								@endif
								@for ($i = 1; $i<sizeof(json_decode($advert->service->affiliation)); $i++)
									<div class="affiliations mt-10">
										<input type="text" name="aff_name{{$i+1}}" maxlength="30" placeholder="Name"
										       value="{{substr(json_decode($advert->service->affiliation)[$i], 5, strpos(json_decode($advert->service->affiliation)[$i], 'link:') - 7)}}"/>
										<input type="url" name="aff_link{{$i+1}}" placeholder="Link" class="mt-10"
										       value="{{substr(json_decode($advert->service->affiliation)[$i],strpos(json_decode($advert->service->affiliation)[$i], 'link:')+5, strlen(json_decode($advert->service->affiliation)[$i]))}}"/>
									</div>
								@endfor
							</div>


							<div class="button" set="aff">{{__('partner.add_one_more')}}</div>
						</div>

						<label>{{__('partner.rewards')}}</label>
						<div class="set">
							<div class="set-reward">
								<input type="text" value="{{sizeof(json_decode($advert->service->reward))}}"
								       name="set_num_reward" hidden/>
								<div class="reward">
									<input type="text" name="price_name1" placeholder="{{__('partner.wine_name')}}"
									       value="{{substr(json_decode($advert->service->reward)[0], 5, strpos(json_decode($advert->service->reward)[0], 'contest:') - 7)}}"/>

									<input type="text" name="contest_name1" placeholder="{{__('partner.contest_name')}}"
									       class="mt-10"
									       value="{{substr(json_decode($advert->service->reward)[0], strpos(json_decode($advert->service->reward)[0], 'contest:') + 8, strpos(json_decode($advert->service->reward)[0], 'reward:') - strpos(json_decode($advert->service->reward)[0], 'contest:') - 10)}}"/>

									<span class="radio-item">
								<input type="radio" name="reward1" value="gold"
								       @if(substr(json_decode($advert->service->reward)[0],strpos(json_decode($advert->service->reward)[0], 'reward:')+7, strlen(json_decode($advert->service->reward)[0]))=='gold') checked @endif/>
								<span>{{__('partner.GOLD')}}</span>
							</span>
									<span class="radio-item">
								<input type="radio" name="reward1" value="silver"
								       @if(substr(json_decode($advert->service->reward)[0],strpos(json_decode($advert->service->reward)[0], 'reward:')+7, strlen(json_decode($advert->service->reward)[0]))=='silver') checked @endif/>
								<span>{{__('partner.SILVER')}}</span>
							</span>
									<span class="radio-item">
								<input type="radio" name="reward1" value="bronze"
								       @if(substr(json_decode($advert->service->reward)[0],strpos(json_decode($advert->service->reward)[0], 'reward:')+7, strlen(json_decode($advert->service->reward)[0]))=='bronze') checked @endif/>
								<span>{{__('partner.BRONZE')}}</span>
							</span>
								</div>
								@for ($i = 1; $i<sizeof(json_decode($advert->service->reward)); $i++)
									<div class="reward mt-10">
										<input type="text" name="price_name{{$i+1}}"
										       placeholder="{{__('partner.wine_name')}}"
										       value="{{substr(json_decode($advert->service->reward)[$i], 5, strpos(json_decode($advert->service->reward)[$i], 'contest:') - 7)}}"/>

										<input type="text" name="contest_name{{$i+1}}"
										       placeholder="{{__('partner.contest_name')}}" class="mt-10"
										       value="{{substr(json_decode($advert->service->reward)[$i], strpos(json_decode($advert->service->reward)[$i], 'contest:') + 8, strpos(json_decode($advert->service->reward)[$i], 'reward:') - strpos(json_decode($advert->service->reward)[$i], 'contest:') - 10)}}"/>

										<span class="radio-item">
									<input type="radio" name="reward{{$i+1}}" value="gold"
									       @if(substr(json_decode($advert->service->reward)[$i],strpos(json_decode($advert->service->reward)[$i], 'reward:')+7, strlen(json_decode($advert->service->reward)[$i]))=='gold') checked @endif/>
									<span>{{__('partner.GOLD')}}</span>
								</span>
										<span class="radio-item">
									<input type="radio" name="reward{{$i+1}}" value="silver"
									       @if(substr(json_decode($advert->service->reward)[$i],strpos(json_decode($advert->service->reward)[$i], 'reward:')+7, strlen(json_decode($advert->service->reward)[$i]))=='silver') checked @endif/>
									<span>{{__('partner.SILVER')}}</span>
								</span>
										<span class="radio-item">
									<input type="radio" name="reward{{$i+1}}" value="bronze"
									       @if(substr(json_decode($advert->service->reward)[$i],strpos(json_decode($advert->service->reward)[$i], 'reward:')+7, strlen(json_decode($advert->service->reward)[$i]))=='bronze') checked @endif/>
									<span>{{__('partner.BRONZE')}}</span>
								</span>
									</div>
								@endfor
							</div>


							<div class="button" set="reward">{{__('partner.add_one_more')}}</div>
						</div>

						<label>{{__('partner.articles')}}</label>
						<span class="radio-item">
					<input type="radio" name="article" value="art_d" class="has-field" field="article"
					       @if($advert->service->article == 'art_d') checked @endif/>
					<span>{{__('partner.download_articles')}}</span>
				</span>
						<span class="radio-item">
					<input type="radio" name="article" value="art_l" class="has-field" field="article"
					       @if($advert->service->article == 'art_l') checked @endif/>
					<span>{{__('partner.ad_link_to_articles')}}</span>
				</span>
						@if($advert->service->article == 'art_l')
							<div class="for-article additional-field mt-10 visible">
								<input type="url" name="article_l" min="0" class="add-input-article" placeholder="Link"
								       value="{{$advert->service->art_l}}">
							</div>
						@else
							<div class="for-article additional-field mt-10"></div>
						@endif
						@if($advert->service->article == 'art_d')
							<div class="for-article-file additional-field mt-10 visible">
								<input type="text" name="art_d_cur" value="{{$advert->service->art_d}}" hidden/>
								<label for="article" class="label">
									<div class="button">{{__('partner.browse')}}</div>
									<div class="zone" style="color:transparent">{{__('partner.drop_files')}}</div>
									<input type="file" id="article" name="article_d"
									       class="articleFile imagesFileUpload" accept="image/*, .pdf"/>
								</label>
								<div id="articleFile">{{$advert->service->art_d}}</div>
							</div>
						@else
							<div class="for-article-file additional-field mt-10">
								<label for="article" class="label">
									<div class="button">{{__('partner.browse')}}</div>
									<div class="zone">{{__('partner.drop_files')}}</div>
									<input type="file" id="article" name="article_d"
									       class="articleFile imagesFileUpload" accept="image/*, .pdf"/>
								</label>
								<div id="articleFile"></div>
							</div>
						@endif
						<label class="wide">{{__('partner.available_furniture_equipment')}}<span>*</span></label>
						@foreach(\App\Helpers\FurnitureTranslatorHelper::$_items as $item)
							<span class="checkbox-item wide">
						<input type="checkbox" name="furniture_eq[]" value="{{$item}}"
						       @if(strpos($advert->service->furniture, $item) != false) checked @endif />
						<span>{{\App\Helpers\FurnitureTranslatorHelper::translate($item)}}</span>
					</span>
						@endforeach
						@if(strpos($advert->service->furniture, 'other') != false)
							<span class="checkbox-item wide">
						<input type="checkbox" name="furniture_eq[]" class="other-field additional" field="furniture_eq"
						       value="other" checked/>
						<span>{{__('become_partner.other')}}</span>
					</span>
							<div class="for-furniture_eq additional-field mt-10 visible">
								<input type="text" name="otherfurniture_eq" maxlength="100"
								       class="add-input-furniture_eq" value="{{$advert->service->other_furniture}}"
								       required="">
							</div>
						@else
							<span class="checkbox-item wide">
						<input type="checkbox" name="furniture_eq[]" class="other-field" field="furniture_eq"
						       value="other"/>
						<span>{{__('become_partner.other')}}</span>
					</span>
							<div class="for-furniture_eq additional-field mt-10"></div>
						@endif

						<label class="wide">{{__('partner.technical_equipment')}}<span>*</span></label>
						@foreach(\App\Helpers\TechnicalEquipmentTranslatorHelper::$_items as $item)
							<span class="checkbox-item wide">
					<input type="checkbox" name="tech_eq[]" value="{{$item}}"
					       @if(strpos($advert->service->equipment, $item) != false) checked @endif />
					<span>{{\App\Helpers\TechnicalEquipmentTranslatorHelper::translate($item)}}</span>
				</span>
						@endforeach
						@if(strpos($advert->service->equipment, 'other') != false)
							<span class="checkbox-item wide">
						<input type="checkbox" name="tech_eq[]" class="other-field additional" field="tech_eq"
						       value="other" checked/>
						<span>{{__('become_partner.other')}}</span>
					</span>
							<div class="for-tech_eq additional-field mt-10 visible">
								<input type="text" name="othertech_eq" maxlength="100" class="add-input-tech_eq"
								       value="{{$advert->service->other_equipment}}" required="">
							</div>
						@else
							<span class="checkbox-item wide">
					<input type="checkbox" name="tech_eq[]" class="other-field" field="tech_eq" value="other"/>
					<span>{{__('partybooker-cp.other')}}</span>
				</span>
							<div class="for-tech_eq additional-field mt-10"></div>
						@endif


						<button type="submit" class="button">{{__('partner.save')}}</button>
					</div>
				</form>
</div>
