<div>
    @switch($advert->view_name)
        @case('event-place')
            @php($action = Auth::user()->type == 'admin'
                ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/event-places')
                : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/event-places')
            ) @break

        @case('caterer')
            @php($action = Auth::user()->type == 'admin'
                ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/caterer')
                : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/caterer')
            ) @break

        @case('wine')
            @php($action = Auth::user()->type == 'admin'
                ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/wine-lovers')
                : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/wine-lovers')
            ) @break

        @case('equipment')
            @php($action = Auth::user()->type == 'admin'
                ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/equipment')
                : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/equipment')
            ) @break

        @case('entertainment')
            @php($action = Auth::user()->type == 'admin'
                ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/entertainment')
                : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/entertainment')
            ) @break
    @endswitch

    <x-dashboard.modal
        :id="'editAdvert'.$key"
        :title="__('partner.service_details')"
        :button="__('partner.edit')"
        color="text-white"
        :action="$action"
        :has-files="in_array($advert->view_name, ['equipment', 'event-place', 'wine'])"
        method="POST">

        <div class="cp-advert-create-form partnerdetails">
            @include('web.partner.advert.create-forms.' . $advert->view_name)
        </div>

    </x-dashboard.modal>
</div>

