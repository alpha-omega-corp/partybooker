@php use App\Helpers\FurnitureTranslatorHelper; @endphp
@php use App\Helpers\TechnicalEquipmentTranslatorHelper; @endphp

<x-dashboard.modal
    id="editCatering{{$iterator}}"
    :title="__('partner.CATERING-STEWARDSHIP')"
    :button="__('partner.edit')"
    :action="Auth::user()->type == 'admin'
        ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/edit-catering')
        : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/edit-catering')"
    :hasFiles="true"
    method="POST">

    @if (Auth::user()->type == 'admin')
        <input type="text" name="id_partner" value="{{$user->id_partner}}" hidden/>
    @else
        <input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden/>
    @endif

    <label class="wide">{{__('partner.property_prepare_meals')}}<span>*</span></label>
    <span class="radio-item">
			<input type="radio" id="prepare_meal_yes" name="prepare_meal" value="yes"
                   @if(isset($advert->service->meals) && $advert->service->meals == 'yes') checked @endif required/>
			<span>{{__('partner.yes')}}</span>
		</span>
    <span class="radio-item">
			<input type="radio" id="prepare_meal_no" name="prepare_meal" value="no"
                   @if(isset($advert->service->meals) && $advert->service->meals == 'no') checked @endif/>
			<span>{{__('partner.no')}}</span>
		</span>

    <label class="mt-10 wide">{{__('partner.works_with_affiliated_partners')}}<span
            class="aff_req"
            @if(isset($advert->service->meals) && $advert->service->meals != 'yes') style="display: none" @endif>*</span></label>
    <span class="radio-item">
			<input type="radio" name="aff_caterers" id="aff_caterers" class="has-field" field="aff_caterers" value="yes"
                   @if(isset($advert->service->affiliate_caterer) && $advert->service->affiliate_caterer == 'yes') checked
                   @endif @if(isset($advert->service->meals) && $advert->service->meals != 'yes') required @endif />
			<span>{{__('partner.yes')}}</span>
		</span>
    <span class="radio-item">
			<input type="radio" name="aff_caterers" class="has-field" field="aff_caterers" value="no"
                   @if(isset($advert->service->affiliate_caterer) && $advert->service->affiliate_caterer == 'no') checked @endif/>
			<span>{{__('partner.no')}}</span>
		</span>
    @if(isset($advert->service->affiliate_caterer) && $advert->service->affiliate_caterer == 'yes')
        <div class="for-aff_caterers additional-field mt-10 visible">
            <div class="set">
                    <?php $afList = json_decode($advert->service->yes_af_caterers); ?>
                <div class="set-aff_caterers mt-10">
                    <input type="text" value="{{count($afList)}}" name="set_num_aff_caterers"
                           hidden="">
                    <div class="aff_caterers">
                        <input type="text" name="aff_caterers_name_1" placeholder="name"
                               value="{{$afList[0]->name}}" required>
                        <input type="url" name="aff_caterers_web_1" class="mt-10"
                               placeholder="url" value="{{$afList[0]->url}}" required>
                    </div>
                    @for ($i = 1; $i<count($afList); $i++)
                        <div class="aff_caterers mt-10">
                            <input type="text" name="aff_caterers_name_{{$i+1}}"
                                   placeholder="name" value="{{$afList[$i]->name}}" required>
                            <input type="url" name="aff_caterers_web_{{$i+1}}" class="mt-10"
                                   placeholder="url" value="{{$afList[$i]->url}}" required>
                        </div>
                    @endfor
                </div>

                <div class="button" set="aff_caterers">{{__('partner.add_one_more')}}</div>
            </div>
        </div>
        <div class="for-aff_caterers-select mt-10">
            {{--				<select name="aff_caterers_partybooker">--}}
            {{--					<option>Partybooker</option>--}}
            {{--				</select>--}}
        </div>
    @else
        <div class="for-aff_caterers additional-field mt-10"></div>
        <div class="for-aff_caterers-select mt-10" style="display:block">
            {{--				<select name="aff_caterers_partybooker">--}}
            {{--					<option>Partybooker</option>--}}
            {{--				</select>--}}
        </div>
    @endif


    <label class="mt-10">{{__('partner.external_food_allowed')}}<span>*</span></label>
    <span class="radio-item">
			<input type="radio" name="external_food" value="yes"
                   @if(isset($advert->service->ext_food) && $advert->service->ext_food == 'yes') checked
                   @endif required/>
			<span>{{__('partner.yes')}}</span>
		</span>
    <span class="radio-item">
			<input type="radio" name="external_food" value="no"
                   @if(isset($advert->service->ext_food) && $advert->service->ext_food == 'no') checked @endif/>
			<span>{{__('partner.no')}}</span>
		</span>

    <label class="mt-10 wide">{{__('partner.free_choice_of_caterer')}}<span>*</span></label>
    <span class="radio-item">
			<input type="radio" name="free_caterers" class="has-field" field="free_caterers" value="yes"
                   @if(isset($advert->service->free_caterer) && $advert->service->free_caterer == 'yes') checked
                   @endif required/>
			<span>{{__('partner.yes')}}</span>
		</span>
    <span class="radio-item">
			<input type="radio" name="free_caterers" class="has-field" field="free_caterers" value="no"
                   @if(isset($advert->service->free_caterer) && $advert->service->free_caterer == 'no') checked @endif />
			<span>{{__('partner.no')}}</span>
		</span>
    @if(isset($advert->service->free_caterer) && $advert->service->free_caterer == 'yes')
        <div class="for-free_caterers additional-field mt-10 visible">
            <div class="set">
                <div class="set-free_caterers mt-10">
                    <input type="text" value="1"
                           name="{{sizeof(json_decode($advert->service->yes_free_caterers))}}"
                           hidden="">
                    <div class="free_caterers">
                            <?php $yes_free = json_decode($advert->service->yes_free_caterers) ?>
                            <?php $first_free = array_shift($yes_free) ?>
                        <input type="text" name="free_caterers_name_1" placeholder="name"
                               value="{{substr($first_free, 8, strpos($first_free, 'url:') - 9)}}"
                               required>
                        <input type="url" name="free_caterers_web_1" class="mt-10"
                               placeholder="url"
                               value="{{substr($first_free,strpos($first_free, 'url:')+4, strlen($first_free))}}"
                               required>
                    </div>
                    @for ($i = 1; $i<sizeof(json_decode($advert->service->yes_free_caterers)); $i++)
                        <div class="free_caterers mt-10">
                            <input type="text" name="free_caterers_name_{{$i+1}}"
                                   placeholder="name"
                                   value="{{substr(json_decode($advert->service->yes_free_caterers)[$i], 8, strpos(json_decode($advert->service->yes_free_caterers)[$i], 'url:') - 9)}}"
                                   required>
                            <input type="url" name="free_caterers_web_{{$i+1}}" class="mt-10"
                                   placeholder="url"
                                   value="{{substr(json_decode($advert->service->yes_free_caterers)[$i],strpos(json_decode($advert->service->yes_free_caterers)[$i], 'url:')+4, strlen(json_decode($advert->service->yes_free_caterers)[$i]))}}"
                                   required>
                        </div>
                    @endfor
                </div>
                <div class="button" set="free_caterers">{{__('partner.add_one_more')}}</div>
            </div>
        </div>
    @else
        <div class="for-free_caterers additional-field mt-10"></div>
    @endif

    <label class="mt-10">{{__('partner.available_furniture_equipment')}}<span>*</span></label>
    @if(isset($advert->service->furniture))
        @foreach(FurnitureTranslatorHelper::$_items as $item)
            <span class="checkbox-item wide">
					<input type="checkbox" name="furniture_eq[]" value="{{$item}}"
                           @if(strpos($advert->service->furniture, $item) != false) checked @endif />
					<span>{{FurnitureTranslatorHelper::translate($item)}}</span>
				</span>
        @endforeach
    @endif
    <label class="mt-10">{{__('partner.technical_equipment')}}<span>*</span></label>
    @if(isset($advert->service->equipment))
        @foreach(TechnicalEquipmentTranslatorHelper::$_items as $item)
            <span class="checkbox-item wide">
					<input type="checkbox" name="tech_eq[]" value="{{$item}}"
                           @if(strpos($advert->service->equipment, $item) != false) checked @endif />
					<span>{{TechnicalEquipmentTranslatorHelper::translate($item)}}</span>
				</span>
        @endforeach
        @if(strpos($advert->service->equipment, 'other') != false)
            <span class="checkbox-item wide">
					<input type="checkbox" name="tech_eq[]" class="other-field additional" field="tech_eq" value="other"
                           checked/>
					<span>{{__('become_partner.other')}}</span>
				</span>
            <div class="for-tech_eq additional-field mt-10 visible">
                                        <textarea type="text" name="othertech_eq" maxlength="100"
                                                  class="add-input-tech_eq"
                                                  required="">{{$advert->service->other_eq}}</textarea>
            </div>
        @else
            <span class="checkbox-item wide">
					<input type="checkbox" name="tech_eq[]" class="other-field" field="tech_eq" value="other"/>
					<span>{{__('become_partner.other')}}</span>
				</span>
            <div class="for-tech_eq additional-field mt-10"></div>
        @endif
    @endif

</x-dashboard.modal>

@push('footer')
    <script>
        $('.edit-catering-{{$iterator}} #prepare_meal_yes').on('click', function (e) {
            $(".edit-catering-{{$iterator}}  #aff_caterers").removeAttr('required');
            $(".edit-catering-{{$iterator}}  .aff_req").hide();
        });

        $('.edit-catering-{{$iterator}} #prepare_meal_no').on('click', function (e) {
            $(".edit-catering-{{$iterator}}  #aff_caterers").attr('required', 'required');
            $(".edit-catering-{{$iterator}}  .aff_req").show();
        });
    </script>
@endpush
