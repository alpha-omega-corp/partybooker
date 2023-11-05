@php use App\Helpers\BudgetsHelper; @endphp
@php use App\Helpers\PaymentMethodsTranslatorHelper; @endphp
@php use App\Helpers\FurnitureTranslatorHelper; @endphp
@php use App\Helpers\TechnicalEquipmentTranslatorHelper; @endphp

<div class="row">
    <div class="col-10 offset-1">
        <h6>{{__('partner.working_schedule')}}</h6>
    </div>
</div>
<div class="row">
    <div class="col-lg-10 offset-lg-1 col-md-12 wine-schedule">
        <label>{{__('partner.working_days')}}<span>*</span>
            <div class="explanation">{{__('partner.working_days_expl')}}</div>
        </label>
        @foreach(['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'] as $day)
            <span class="checkbox-item">
						<input type="checkbox" name="working_days[]" value="{{$day}}" required>
						<span>{{__('days.'.$day)}}</span>
					</span>
        @endforeach
    </div>
</div>
<div class="row mt-10">
    <div class="col-lg-2 offset-lg-1 col-md-3">
        <label>{{__('partner.opening_time')}}<span>*</span>
            <div class="explanation top">{{__('partner.opening_time_expl')}}</div>
        </label>
        <input type="text" name="open" class="time" required/>
    </div>
    <div class="col-lg-2 col-md-3">
        <label>{{__('partner.closing_time')}}<span>*</span></label>
        <input type="text" name="close" class="time" required/>
    </div>

    <div class="col-lg-6 col-md-6">
        <label>{{__('partner.annual_holidays')}}
            <div class="explanation top">{{__('partner.indicate_annual_closings')}}</div>
        </label>
        <input name="holidays" maxlength="350" required></textarea>
    </div>
</div>
<div class="row mt-10">
    <div class="col-lg-10 offset-lg-1 col-md-12">
        <label>{{__('partner.possibility_extend_time')}}<span>*</span>
            <div class="explanation">{{__('partner.possibility_extend_time_expl')}}</div>
        </label>
        <span class="radio-item">
					<input type="radio" name="extansion" class="has-field" field="extansion" value="yes" required>
					<span>{{__('partner.yes')}}</span>
				</span>
        <span class="radio-item">
					<input type="radio" name="extansion" class="has-field" field="extansion" value="no">
					<span>{{__('partner.no')}}</span>
				</span>
    </div>
    <div class="col-lg-5 offset-lg-1 col-md-6 for-extansion additional-field mt-10"></div>
    <div class="col-lg-10 offset-lg-1 col-md-12">
        <label class="mt-10">{{__('partner.opening_upon_appointment')}}<span>*</span></label>
        <span class="radio-item">
					<input type="radio" name="opening_upon" value="yes" required>
					<span>{{__('partner.yes')}}</span>
				</span>
        <span class="radio-item">
					<input type="radio" name="opening_upon" value="no">
					<span>{{__('partner.no')}}</span>
				</span>
    </div>
</div>

<div class="row mt-30">
    <div class="col-10 offset-1">
        <h6>{{__('partner.rates_conditions')}}</h6>
    </div>
</div>
<div class="row mt-10">
    <div class="col-lg-5 offset-lg-1 col-md-6">
        <div class="row">
            <div class="col-6">
                <label>{{__('partner.price')}}<span>*</span>
                    <div class="explanation top">{{__('partner.price_expl')}}</div>
                </label>
                <input type="number" name="price" min="0" required/>
            </div>
            <div class="col-6">
                <label>{{__('partner.for')}}</label>
                <select name="price_for" required>
                    <option
                        value="fixed_price_per_person">{{__('partner.fixed_price_per_person')}}</option>
                    <option
                        value="flat_rate_for_service">{{__('partner.flat_rate_for_service')}}</option>
                    <option value="other"
                            class="other-price">{{__('become_partner.other')}}</option>
                </select>
                <div class="for-price additional-field mt-10"></div>
            </div>
        </div>
        <label class="mt-10">{{__('partner.budget')}}<span>*</span>
            <div class="explanation">{{__('partner.indicate_budget_for_service')}}</div>
        </label>
        <select name="budget" required>
            @foreach(BudgetsHelper::$_budgets as $k => $v)
                <option value="{{$k}}">{{__($v)}}</option>
            @endforeach
        </select>

        <label class="mt-10">{{__('partner.booking_deposit')}}<span>*</span>
            <div class="explanation">{{__('partner.booking_deposit_expl')}}</div>
        </label>
        <input type="text" name="deposit" required/>

    </div>
    <div class="col-lg-5 col-md-6 payment-options">
        <label>{{__('partner.payment_methods')}}<span>*</span>
            <div class="explanation top">{{__('partner.payment_methods_expl')}}</div>
        </label>
        @foreach(PaymentMethodsTranslatorHelper::$_methods as $i)
            <span class="checkbox-item wide">
						<input type="checkbox" name="pay_methods[]" value="{{$i}}" required>
						<span>{{PaymentMethodsTranslatorHelper::translate($i)}}</span>
					</span>
        @endforeach
        <span class="checkbox-item wide">
					<input type="checkbox" name="pay_methods[]" class="other-field" field="payment" value="other">
					<span>{{__('become_partner.other')}}</span>
				</span>
        <div class="for-payment additional-field mt-10"></div>
    </div>
</div>

<div class="row mt-30">
    <div class="col-10 offset-1">
        <h6>{{__('partner.service_general_info')}}</h6>
    </div>
</div>
<div class="row">
    <div class="col-lg-5 offset-lg-1 col-md-6">
        <label>{{__('partner.service_or_activity_name')}}<span>*</span>
            <div class="explanation">{{__('partner.service_or_activity_name_expl')}}</div>
        </label>
        <div class="set">
            <div class="set-service_activity">
                <input type="text" value="1" name="set_num_service" hidden/>
                <div class="service-activity">
                    <input type="text" name="service_activity_name1" maxlength="30"
                           placeholder="Name" required/>
                    <textarea name="service_activity_description1" rows="2" maxlength="300"
                              placeholder="Description" class="mt-10" required/></textarea>
                </div>
            </div>
            <div class="button" set="service_activity">{{__('partner.add_one_more')}}</div>
        </div>
    </div>
    <div class="col-lg-5 col-md-6">
        <label>{{__('partner.participant_capacity')}}<span>*</span></label>
        <div class="set">
            <div class="set-participant">
                <input type="text" value="1" name="set_num_participant" hidden/>
                <div class="participant">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="space_name1" maxlength="30"
                                   placeholder="{{__('partner.space_name')}}" required/>
                        </div>
                        <div class="col-sm-3">
                            <input type="number" name="min_num1" min="0" placeholder="min"
                                   required/>
                        </div>
                        <div class="col-sm-3">
                            <input type="number" name="max_num1" min="1" placeholder="max"
                                   required/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button" set="participant">{{__('partner.add_one_more')}}</div>
        </div>
    </div>
</div>

<div class="row mt-10">
    <div class="col-lg-5 offset-lg-1 col-md-6">
        <label>{{__('partner.wine')}}
            <div class="explanation">{{__('partner.wine_expl')}}</div>
        </label>
        <div class="set">
            <div class="set-wine">
                <input type="text" value="1" name="set_num_wine" hidden/>
                <div class="wine">
                    <input type="text" name="wine_name1" maxlength="30" placeholder="Name"/>
                    <textarea name="wine_description1" rows="2" maxlength="300"
                              placeholder="Grape variety" class="mt-10"/></textarea>
                </div>
            </div>
            <div class="button" set="wine">{{__('partner.add_one_more')}}</div>
        </div>
    </div>
    <div class="col-lg-5 col-md-6">
        <label>{{__('partner.affiliations')}}</label>
        <div class="set">
            <div class="set-aff">
                <input type="text" value="1" name="set_num_aff" hidden/>
                <div class="affiliations">
                    <input type="text" name="aff_name1" maxlength="30" placeholder="Name"/>
                    <input type="url" name="aff_link1" placeholder="Link" class="mt-10"/>
                </div>
            </div>
            <div class="button" set="aff">{{__('partner.add_one_more')}}</div>
        </div>

    </div>
</div>

<div class="row mt-10">
    <div class="col-lg-5 offset-lg-1 col-md-6">
        <label>{{__('partner.rewards')}}</label>
        <div class="set">
            <div class="set-reward">
                <input type="text" value="1" name="set_num_reward" hidden/>
                <div class="reward">
                    <input type="text" name="price_name1" placeholder="{{__('partner.wine_name')}}"
                           required/>
                    <input type="text" name="contest_name1"
                           placeholder="{{__('partner.contest_name')}}" required class="mt-10"/>
                    <span class="radio-item">
								<input type="radio" name="reward1" value="gold" required/>
								<span>{{__('partner.GOLD')}}</span>
							</span>
                    <span class="radio-item">
								<input type="radio" name="reward1" value="silver"/>
								<span>{{__('partner.SILVER')}}</span>
							</span>
                    <span class="radio-item">
								<input type="radio" name="reward1" value="bronze"/>
								<span>{{__('partner.BRONZE')}}</span>
							</span>
                </div>
            </div>
            <div class="button" set="reward">{{__('partner.add_one_more')}}</div>
        </div>
    </div>
    <div class="col-lg-5 col-md-6">
        <label>{{__('partner.articles')}}</label>
        <span class="radio-item">
					<input type="radio" name="article" value="art_d" class="has-field" field="article"/>
					<span>{{__('partner.download_articles')}}</span>
				</span>
        <span class="radio-item">
					<input type="radio" name="article" value="art_l" class="has-field" field="article"/>
					<span>{{__('partner.ad_link_to_articles')}}</span>
				</span>
        <div class="for-article additional-field mt-10"></div>
        <div class="for-article-file additional-field mt-10">
            <label for="article" class="label">
                <div class="button">{{__('partner.browse')}}</div>
                <div class="zone">{{__('partner.drop_files')}}</div>
                <input type="file" id="article" name="article_d"
                       class="articleFile imagesFileUpload" accept="image/*, .pdf"/>
            </label>
            <div id="articleFile"></div>
        </div>
    </div>
</div>

<div class="row mt-10">
    <div class="offset-lg-1 col-lg-5 col-md-6 furniture-options">
        <label class="wide">{{__('partner.available_furniture_equipment')}}<span>*</span>
            <div class="explanation">{{__('partner.available_furniture_equipment_expl')}}</div>
        </label>
        @foreach(FurnitureTranslatorHelper::$_items as $item)
            <span class="checkbox-item wide">
						<input type="checkbox" name="furniture_eq[]" value="{{$item}}" required/>
						<span>{{FurnitureTranslatorHelper::translate($item)}}</span>
					</span>
        @endforeach
        <span class="checkbox-item wide">
					<input type="checkbox" name="furniture_eq[]" class="other-field" field="furniture_eq"
                           value="other"/>
					<span>{{__('become_partner.other')}}</span>
				</span>
        <div class="for-furniture_eq additional-field mt-10"></div>
    </div>
    <div class="col-lg-5 col-md-6 te-options">
        <label class="wide">{{__('partner.technical_equipment')}}<span>*</span>
            <div class="explanation">{{__('partner.technical_equipment_expl')}}</div>
        </label>
        @foreach(TechnicalEquipmentTranslatorHelper::$_items as $item)
            <span class="checkbox-item wide">
						<input type="checkbox" name="tech_eq[]" value="{{$item}}" required/>
						<span>{{TechnicalEquipmentTranslatorHelper::translate($item)}}</span>
					</span>
        @endforeach
        <span class="checkbox-item wide">
					<input type="checkbox" name="tech_eq[]" class="other-field" field="tech_eq" value="other"/>
					<span>{{__('become_partner.other')}}</span>
				</span>
        <div class="for-tech_eq additional-field mt-10"></div>
    </div>
</div>

<div class="row mt-30">
    <div class="col-10 offset-1">
        <h6>{{__('partner.food_services_info')}}</h6>
    </div>
</div>
<div class="row">
    <div class="col-lg-3 offset-lg-1 col-md-4">
        <label>{{__('partner.food_on_site')}}<span>*</span></label>
        <span class="radio-item">
					<input type="radio" name="food_on_site" value="yes" class="has-field" field="food" required/>
					<span>{{__('partner.yes')}}</span>
				</span>
        <span class="radio-item">
					<input type="radio" name="food_on_site" value="no" class="has-field" field="food"/>
					<span>{{__('partner.no')}}</span>
				</span>
        <div class="for-food additional-field mt-10"></div>
    </div>
    <div class="col-lg-3 col-md-4">
        <label>{{__('partner.catering_service_available')}}<span>*</span></label>
        <span class="radio-item">
					<input type="radio" name="catering" value="yes" required/>
					<span>{{__('partner.yes')}}</span>
				</span>
        <span class="radio-item">
					<input type="radio" name="catering" value="no"/>
					<span>{{__('partner.no')}}</span>
				</span>
    </div>
    <div class="col-lg-3 col-md-4">
        <label>{{__('partner.caterer_affiliation')}}<span>*</span></label>
        <span class="radio-item">
					<input type="radio" name="aff_caterers" value="yes" required/>
					<span>{{__('partner.yes')}}</span>
				</span>
        <span class="radio-item">
					<input type="radio" name="aff_caterers" value="no" class="has-field" field="aff_caterers"/>
					<span>{{__('partner.no')}}</span>
				</span>
        <div class="for-aff_caterers-select mt-10">
            <select name="aff_caterers_partybooker">
                <option>Partybooker</option>
                <option>Lionwood</option>
            </select>
        </div>
    </div>
</div>

<div class="row mt-30">
    <div class="col-10 offset-1">
        <h6>{{__('partner.want_to_add_something')}}</h6>
    </div>
</div>

<div class="row">
    <div class="col-lg-10 offset-lg-1">
        <label>{{__('partner.your_comment')}}
            <div class="explanation">{{__('partner.want_to_add_something_expl')}}</div>
        </label>
        <textarea maxlength="500" name="comment"></textarea>
    </div>
</div>

@push('footer')
    <script>
        $(function () {
            var requiredCheckboxes = $('.wine-schedule :checkbox[required]');
            requiredCheckboxes.change(function () {
                if (requiredCheckboxes.is(':checked')) {
                    requiredCheckboxes.removeAttr('required');
                } else {
                    requiredCheckboxes.attr('required', 'required');
                }
            });


            var requiredpayment = $('.payment-options :checkbox[required]');
            requiredpayment.change(function () {
                if (requiredpayment.is(':checked')) {
                    requiredpayment.removeAttr('required');
                } else {
                    requiredpayment.attr('required', 'required');
                }
            });

            var requiredTe = $('.te-options :checkbox[required]');
            requiredTe.change(function () {
                if (requiredTe.is(':checked')) {
                    requiredTe.removeAttr('required');
                } else {
                    requiredTe.attr('required', 'required');
                }
            });

            var requiredfurniture = $('.furniture-options :checkbox[required]');
            requiredfurniture.change(function () {
                if (requiredfurniture.is(':checked')) {
                    requiredfurniture.removeAttr('required');
                } else {
                    requiredfurniture.attr('required', 'required');
                }
            });

        });
    </script>
@endpush
