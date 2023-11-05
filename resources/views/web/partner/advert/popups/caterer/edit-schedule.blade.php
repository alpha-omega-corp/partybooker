<x-dashboard.modal
    id="editCateringSchedule{{$iterator}}"
    :title="__('partner.edit_schedule')"
    :button="__('partner.edit')"
    :action="Auth::user()->type == 'admin'
        ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/edit-schedule')
        : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/edit-schedule')"
    :hasFiles="Auth::user()->type == 'admin'"
    method="POST">

    @if (Auth::user()->type == 'admin')
        <input type="text" name="id_partner" value="{{$user->id_partner}}" hidden/>
    @else
        <input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden/>
    @endif

    <label class="mt-10">{{__('partner.annual_holidays')}}</label>
    <input name="holidays" maxlength="350" value="{{$advert->service->holidays}}">

</x-dashboard.modal>
