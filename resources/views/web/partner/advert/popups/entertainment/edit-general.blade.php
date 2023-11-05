<x-dashboard.modal
    id="editEntertainment{{$iterator}}"
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
    <textarea name="geo" rows="2" required/>{{$advert->service->geo}}</textarea>

    <label>{{__('partner.number_of_participants')}}<span>*</span></label>
    <input type="number" name="participants" min="1" required value="{{$advert->service->participants}}"/>

    <label>{{__('partner.list_of_your_services')}}<span>*</span></label>
    <textarea name="services" rows="3" required/>{{$advert->service->services}}</textarea>

    <label>{{__('partner.equipment_provided')}}<span>*</span></label>
    <textarea name="equipment" rows="2" required/>{{$advert->service->equipment}}</textarea>

    <label>{{__('partner.equipment_not_included')}}</label>
    <textarea name="eq_not_incl" rows="2"/>{{$advert->service->eq_not_incl}}</textarea>

    <label>{{__('partner.biography')}}<span>*</span></label>
    <textarea name="biography" rows="2" required/>{{$advert->service->bio}}</textarea>

    <label>{{__('partner.references')}}</label>
    <textarea name="references" rows="2"/>{{$advert->service->reference}}</textarea>

</x-dashboard.modal>
