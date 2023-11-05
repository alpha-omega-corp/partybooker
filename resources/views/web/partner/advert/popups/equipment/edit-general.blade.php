<x-dashboard.modal
    id="editEquipmentGeneral{{$iterator}}"
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
    <textarea name="geo" rows="2" required>{{$advert->service->geo}}</textarea>

    <label class="mt-10">{{__('partner.complimentary_services')}}<span>*</span></label>
    <textarea name="complim_services" rows="2" required>{{$advert->service->complim_services}}</textarea>

    <label class="mt-10">{{__('partner.proposed_equipment')}}<span>*</span></label>
    <textarea name="proposed" rows="2" required>{{$advert->service->proposed}}</textarea>

    <label class="mt-10">{{__('partner.references')}}</label>
    <textarea name="references" rows="2">{{$advert->service->references}}</textarea>

</x-dashboard.modal>
