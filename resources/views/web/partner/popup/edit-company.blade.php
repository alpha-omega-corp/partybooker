<x-dashboard.modal
        id="editCompany"
        :title="__('form.edit-company-modal')"
        :button="__('partner.edit')"
        :action="Auth::user()->type == 'admin'
        ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/edit-company')
        : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/edit-company')"
        :hasFiles="true"
        size="modal-md"
        method="POST">


    <div class="logo-file position-relative">
        <div class="d-flex flex-column">
            <label for="logo">
                <div class="d-flex">
                    <div id="logo-btn"
                         class="button btn btn-primary d-none">
                        {{__('partner.choose_logo')}}
                    </div>

                </div>
                <div class="zone"></div>

                <input type="file" id="logo" name="logo" class="imagesFileUpload" hidden>
            </label>

        </div>
    </div>


    <div id="filename" class="m-2 text-dark d-flex align-items-center justify-content-center logo-edit"
         x-data="{target: 'logo-btn'}" @click="document.getElementById(target).click()">
        @if ($partner->logo)
            <div class="d-flex flex-column edit-logo">
                <img src="{{ asset('/storage/logos/'.$partner->logo)}}" alt="logo"
                     class="cp-company-logo"
                     width="100">

                <div class="d-flex align-items-center justify-content-center edit-logo-icon">
                    @svg('heroicon-o-cog-6-tooth')
                </div>

            </div>
        @else
            <div class="logo-placeholder" x-data="{target: 'logo-btn'}"
                 @click="document.getElementById(target).click()">
                @svg('heroicon-o-photo', 'text-gray')
            </div>
        @endif
    </div>

    <div class="d-flex flex-column p-3">
        <div class="edit-company-details w-100 p-2">
            <label class="label-underline">
                {{__('become_partner.company_info')}}
            </label>
            <div class="pt-1">
                <x-dashboard.input name="company_name"
                                   :value="$partner->en_company_name"
                                   :placeholder="__('partybooker-cp.company_name')"
                                   icon="heroicon-o-home-modern"
                                   :max="50"/>

                <x-dashboard.input
                        name="company_phone"
                        :value="$partner->company_phone"
                        :placeholder="__('partybooker-cp.phone')"
                        icon="heroicon-o-phone"/>


                <x-dashboard.input
                        name="company_fax"
                        :value="$partner->fax"
                        :placeholder="__('become_partner.fax')"
                        :required="false"
                        icon="heroicon-o-paper-airplane"/>
            </div>
        </div>

        <div class="languages p-2">
            <label>{{ __('partybooker-cp.languages')}}</label>

            <div class="p-1">
                <div class="language-list">
                    <x-dashboard.checkbox
                            name="languages[]"
                            value="french"
                            :label="__('partybooker-cp.french')"
                            :checked="str_contains($partner->language, 'french')">
                        <img src="{{Vite::image('french.svg')}}" alt="french"/>
                    </x-dashboard.checkbox>

                    <x-dashboard.checkbox
                            name="languages[]"
                            value="english"
                            :label="__('partybooker-cp.english')"
                            :checked="str_contains($partner->language, 'english')">
                        <img src="{{Vite::image('english.svg')}}" alt="english"/>
                    </x-dashboard.checkbox>

                    <x-dashboard.checkbox
                            name="languages[]"
                            value="german"
                            :label="__('partybooker-cp.german')"
                            :checked="str_contains($partner->language, 'german')">
                        <img src="{{Vite::image('german.svg')}}" alt="german"/>
                    </x-dashboard.checkbox>

                    <x-dashboard.checkbox
                            name="languages[]"
                            value="italian"
                            :label="__('partybooker-cp.italian')"
                            :checked="str_contains($partner->language, 'italian')">
                        <img src="{{Vite::image('italian.svg')}}" alt="italian"/>
                    </x-dashboard.checkbox>
                </div>
            </div>
        </div>
    </div>


    @if (Auth::user()->type == 'admin')
        <input type="text" name="id_partner" value="{{$partner->id_partner}}" hidden/>
    @else
        <input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden/>
    @endif

    <input type="text" name="current_logo" value="{{$partner->logo}}" hidden/>
    <input type="text" name="current_loc" value="{{$partner->location_code}}" hidden/>

</x-dashboard.modal>




