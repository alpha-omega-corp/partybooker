<x-dashboard.modal
    id="editSocials"
    :title="__('partner.edit_links')"
    :button="__('partner.edit')"
    :action="Auth::user()->type == 'admin'
        ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/edit-www')
        : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/edit-www')"
    :hasFiles="true"
    size="modal-md"
    method="POST">

    <input type="url" name="current_www" value="{{$partner->www}}" hidden/>


    <div class="edit-www-container">

        <x-dashboard.input
            type="url"
            name="www"
            :required="false"
            :value="$partner->www"
            :label="__('partner.your_website')"
            icon="heroicon-o-globe-alt"/>


        <x-dashboard.input
            type="url"
            name="facebook"
            :required="false"
            :value="$partner->facebook"
            placeholder="Facebook"
            image="facebook"/>


        <x-dashboard.input
            type="url"
            name="twitter"
            :required="false"
            :value="$partner->twitter"
            placeholder="Twitter"
            image="twitter"/>


        <x-dashboard.input
            type="url"
            name="instagram"
            :required="false"
            :value="$partner->instagram"
            placeholder="Instagram"
            image="instagram"/>

        <x-dashboard.input
            type="url"
            name="linkedin"
            :required="false"
            :value="$partner->linkedin"
            placeholder="LinkedIn"
            image="linkedin"/>


        <x-dashboard.input
            type="url"
            name="youtube"
            :required="false"
            :value="$partner->youtube"
            placeholder="Youtube"
            image="youtube"/>

        <x-dashboard.input
            type="url"
            name="vimeo"
            :required="false"
            :value="$partner->vimeo"
            placeholder="Vimeo"
            image="vimeo"/>


    </div>

</x-dashboard.modal>


