<x-dashboard.modal
    id="editWineFood{{$iterator}}"
    :title="__('partner.edit_food_service_info')"
    :button="__('partner.edit')"
    :action="Auth::user()->type == 'admin'
        ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/edit-food')
        : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/edit-food')"
    :hasFiles="Auth::user()->type == 'admin'"
    method="POST">

    @if (Auth::user()->type == 'admin')
        <input type="text" name="id_partner" value="{{$user->id_partner}}" hidden/>
    @else
        <input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden/>
    @endif

    <label>{{__('partner.food_on_site')}}<span>*</span></label>
    <span class="radio-item">
				<input type="radio" name="food_on_site" value="yes" class="has-field" field="food"
                       @if($advert->service->food_on_site == 'yes') checked @endif required/>
				<span>{{__('partner.yes')}}</span>
			</span>
    <span class="radio-item">
				<input type="radio" name="food_on_site" value="no" class="has-field" field="food"
                       @if($advert->service->food_on_site == 'no') checked @endif />
				<span>{{__('partner.no')}}</span>
			</span>
    @if($advert->service->food_on_site == 'yes')
        <div class="for-food additional-field mt-10 visible">
            <input type="text" name="yes_food" maxlength="150" class="add-input-food"
                   value="{{$advert->service->yes_food}}" required="">
        </div>
    @else
        <div class="for-food additional-field mt-10"></div>
    @endif

    <label class="mt-10">{{__('partner.catering_service_available')}}<span>*</span></label>
    <span class="radio-item">
				<input type="radio" name="catering" value="yes" required
                       @if($advert->service->catering == 'yes') checked @endif />
				<span>{{__('partner.yes')}}</span>
			</span>
    <span class="radio-item">
				<input type="radio" name="catering" value="no" @if($advert->service->catering == 'no') checked @endif />
				<span>{{__('partner.no')}}</span>
			</span>

    <label class="mt-10">{{__('partner.caterer_affiliation')}}<span>*</span></label>
    <span class="radio-item">
				<input type="radio" name="aff_caterers" value="yes" @if($advert->service->caterer_aff == 'yes') checked
                       @endif required/>
				<span>{{__('partner.yes')}}</span>
			</span>
    <span class="radio-item">
				<input type="radio" name="aff_caterers" value="no" class="has-field" field="aff_caterers"
                       @if($advert->service->caterer_aff == 'no') checked @endif/>
				<span>{{__('partner.no')}}</span>
			</span>
    @if($advert->service->caterer_aff == 'no')
        <div class="for-aff_caterers-select mt-10" style="display:block">
            <select name="aff_caterers_partybooker">
                <option>Partybooker</option>
                <option>Lionwood</option>
            </select>
        </div>
    @else
        <div class="for-aff_caterers-select mt-10">
            <select name="aff_caterers_partybooker">
                <option>Partybooker</option>
                <option>Lionwood</option>
            </select>
        </div>
    @endif

</x-dashboard.modal>

