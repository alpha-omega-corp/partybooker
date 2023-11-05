<x-dashboard.modal
    id="editCateringGeneral{{$iterator}}"
    :title="__('partner.edit_service_general_info')"
    :button="__('partner.edit')"
    :action="Auth::user()->type == 'admin'
        ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/edit-general')
        : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/edit-general')"
    :hasFiles="Auth::user()->type == 'admin'"
    method="POST">

    @if (Auth::user()->type == 'admin')
        <input type="text" name="id_partner" value="{{$user->id_partner}}" hidden/>
    @else
        <input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden/>
    @endif
    <label>{{__('partner.geographical_limit')}}<span>*</span></label>
    <textarea name="geo" maxlength="350" rows="3" required/>{{$advert->service->geo}}</textarea>

    <label class="mt-10">{{__('partner.min_max_guests')}}<span>*</span></label>
    <div class="row">
        <div class="col-sm-6">
            <input type="number" name="min_guests" placeholder="min" min="0" value="{{$advert->service->min_guests}}"
                   required/>
        </div>
        <div class="col-sm-6">
            <input type="number" name="max_guests" placeholder="max" min="0" value="{{$advert->service->max_guests}}"/>
        </div>
    </div>

    <label class="mt-10">{{__('partner.smood_ch_link')}}</label>
    <input type="url" name="smood" value="{{$advert->service->smood}}"/>

</x-dashboard.modal>
