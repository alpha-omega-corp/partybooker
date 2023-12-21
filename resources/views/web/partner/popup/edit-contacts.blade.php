<x-dashboard.modal
    id="editContacts"
    :title="$user->email"
    :button="__('partner.edit')"
    :action="Auth::user()->type == 'admin'
            ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/edit-contacts')
            : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/edit-contacts')"
    size="modal-md"
    method="POST">


    <x-dashboard.input
        name="name"
        :value="$user->name"
        :placeholder="__('partner.your_name')"
        icon="heroicon-o-identification"/>

    <x-dashboard.input
        name="phone"
        type="tel"
        :value="$user->phone"
        :placeholder="__('partner.your_phone_number')"
        icon="heroicon-m-device-phone-mobile"/>

    <x-dashboard.input
        type="email"
        name="display_email"
        label="Display Email"
        :value="$user->display_email"
        icon="heroicon-o-envelope"/>


    <input type="text" name="id_partner" value="{{$user->partnerInfo->id_partner}}" hidden/>
    <input type="email" name="current_email" value="{{$user->partnerInfo->email}}" hidden/>
    <input type="tel" name="current_phone" value="{{$user->partnerInfo->phone}}" hidden/>

</x-dashboard.modal>


