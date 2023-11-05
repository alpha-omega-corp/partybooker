<x-dashboard.modal
    id="editCateringSpecialties{{$iterator}}"
    :title="__('partner.specialties')"
    :button="__('partner.edit')"
    :action="Auth::user()->type == 'admin'
        ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/edit-specialties')
        : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/edit-specialties')"
    :hasFiles="true"
    method="POST">

    @if (Auth::user()->type == 'admin')
        <input type="text" name="id_partner" value="{{$user->id_partner}}" hidden/>
    @else
        <input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden/>
    @endif
    <input type="text" name="fileNum" value="
			@if(!is_null($advert->service->menu))
				{{sizeof(json_decode($advert->service->menu))}}
			@else
				0
			@endif
			" class="fileNum" hidden/>

    <label class="wide">{{__('partner.specialties')}}<span>*</span></label>
    <textarea name="specialties" maxlength="350" rows="2" required/>{{$advert->service->specialities}}</textarea>

    <label>{{__('partner.menus')}}</label>
    <label for="menu" class="label">
        <div class="button">{{__('partner.browse')}}</div>
        <div class="zone">{{__('partner.drop_files')}}</div>
        <input type="file" id="menu" name="menu[]" class="multiple filesUpload" multiple
               accept="image/*, .doc,.docx, .xls, .xlsx, .pdf"/>
    </label>
    <div id="menus"></div>

</x-dashboard.modal>



