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


    <div class="edit-www-container d-flex flex-wrap ">

        <x-dashboard.input
            type="url"
            name="www"
            :required="false"
            :value="$user->partnerInfo->www"
            :label="__('partner.your_website')"
            icon="heroicon-o-globe-alt"/>


        <x-dashboard.input
            type="url"
            name="facebook"
            :required="false"
            :value="$user->partnerInfo->facebook"
            placeholder="Facebook link"
            label="Facebook"
            image="facebook"/>


        <x-dashboard.input
            type="url"
            name="twitter"
            :required="false"
            :value="$user->partnerInfo->twitter"
            placeholder="Twitter link"
            label="Twitter"
            image="twitter"/>


        <x-dashboard.input
            type="url"
            name="instagram"
            :required="false"
            :value="$user->partnerInfo->instagram"
            placeholder="Instagram link"
            label="Instagram"
            image="instagram"/>

        <x-dashboard.input
            type="url"
            name="linkedin"
            :required="false"
            :value="$user->partnerInfo->linkedin"
            placeholder="LinkedIn link"
            label="LinkedIn"
            image="linkedin"/>


        <x-dashboard.input
            type="url"
            name="youtube"
            :required="false"
            :value="$user->partnerInfo->youtube"
            placeholder="Youtube link"
            label="Youtube"
            image="youtube"/>

        <x-dashboard.input
            type="url"
            name="vimeo"
            :required="false"
            :value="$user->partnerInfo->vimeo"
            placeholder="Vimeo link"
            label="Vimeo"
            image="vimeo"/>


    </div>

</x-dashboard.modal>


