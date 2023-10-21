<x-dashboard.modal
    id="editSocials"
    :title="__('partner.edit_links')"
    :button="__('partner.edit')"
    :action="Auth::user()->type == 'admin'
        ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/edit-www')
        : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/edit-www')"
    :hasFiles="true"
    method="POST">

    <input type="url" name="current_www" value="{{$user->partnerInfo->www}}" hidden/>


    <div class="edit-www-container">
        <x-dashboard.input
            type="url"
            name="www"
            :value="$user->partnerInfo->www"
            :placeholder="__('partner.your_website')"
            icon="heroicon-o-globe-alt"/>


        <x-dashboard.input
            type="url"
            name="facebook"
            :value="$user->partnerInfo->facebook"
            placeholder="Facebook link"
            image="facebook"/>

        <x-dashboard.input
            type="url"
            name="twitter"
            :value="$user->partnerInfo->twitter"
            placeholder="Twitter link"
            image="twitter"/>

        <x-dashboard.input
            type="url"
            name="instagram"
            :value="$user->partnerInfo->instagram"
            placeholder="Instagram link"
            image="instagram"/>

        <x-dashboard.input
            type="url"
            name="linkedin"
            :value="$user->partnerInfo->linkedin"
            placeholder="LinkedIn link"
            image="linkedin"/>

        <x-dashboard.input
            type="url"
            name="youtube"
            :value="$user->partnerInfo->youtube"
            placeholder="Youtube link"
            image="youtube"/>

        <x-dashboard.input
            type="url"
            name="vimeo"
            :value="$user->partnerInfo->vimeo"
            placeholder="Vimeo link"
            image="vimeo"/>

    </div>

</x-dashboard.modal>


