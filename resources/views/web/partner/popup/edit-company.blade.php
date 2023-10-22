<x-dashboard.modal
    id="editCompany"
    title="Edit company details"
    :button="__('partner.edit')"
    :action="Auth::user()->type == 'admin'
        ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/edit-company')
        : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/edit-company')"
    :hasFiles="true"
    method="POST">


    <x-dashboard.input-card>
        <div class="logo-file">
            <div class="d-flex flex-column">

                <label for="logo">
                    <div class="d-flex">
                        <div class="button btn btn-primary">{{__('partner.choose_logo')}}</div>
                        <span class="m-2 fw-normal text-lowercase">
                            {{$user->partnerInfo->logo}}
                        </span>
                    </div>
                    <div class="zone"></div>
                    <input type="file" id="logo" name="logo" class="imagesFileUpload" hidden>
                </label>
                <div id="filename" class="m-2 text-dark d-flex align-items-center">
                    <img src="{{ asset('/storage/logos/'.$user->partnerInfo->logo)}}" alt="logo" class="cp-company-logo"
                         width="100">
                </div>

            </div>
        </div>
    </x-dashboard.input-card>

    <x-dashboard.input-card>
        <x-dashboard.input
            name="company_phone"
            :value="$user->partnerInfo->company_phone"
            :placeholder="__('partybooker-cp.phone')"
            :label="__('partybooker-cp.phone')"
            icon="heroicon-m-device-phone-mobile"/>
    </x-dashboard.input-card>

    <x-dashboard.input-card>
        <x-dashboard.input
            name="company_fax"
            :value="$user->partnerInfo->fax"
            :placeholder="__('become_partner.fax')"
            :label="__('become_partner.fax')"
            :required="false"
            icon="heroicon-o-paper-airplane"/>
    </x-dashboard.input-card>

    <x-dashboard.input-card>

        <x-partner-category-tab :tabs="['FR', 'EN']">

            <x-slot:title>
            </x-slot:title>

            <!-- French -->
            <x-tab.item>
                <x-dashboard.input-card>
                    <x-dashboard.input name="fr_company_name"
                                       :value="$user->partnerInfo->fr_company_name"
                                       :placeholder="__('partybooker-cp.company_name')"
                                       :label="__('partybooker-cp.company_name')"
                                       icon="heroicon-o-identification"
                                       :max="50"/>
                </x-dashboard.input-card>

                <x-dashboard.input-card>
                    <x-dashboard.textarea name="fr_slogan"
                                          :label="__('partybooker-cp.slogan')"
                                          icon="heroicon-o-chat-bubble-bottom-center-text"
                                          :max="250">{{$user->partnerInfo->fr_slogan}}</x-dashboard.textarea>
                </x-dashboard.input-card>

                <x-dashboard.input-card>
                    <label for="fr_short_descr">{{__('partybooker-cp.short_description')}}</label>
                    <textarea name="fr_short_descr" id="fr_short_descr" maxlength="350"
                              placeholder="{{__('partybooker-cp.short_description')}}" required
                              class="textarea-wysiwyg">{{$user->partnerInfo->fr_short_descr}}</textarea>
                </x-dashboard.input-card>

                <x-dashboard.input-card>
                    <label for="fr_full_descr">{{__('partybooker-cp.full_description')}}</label>
                    <textarea name="fr_full_descr" id="fr_full_descr" maxlength="3000"
                              placeholder="{{__('partybooker-cp.full_description')}}" rows="6" required
                              class="textarea-wysiwyg">{{$user->partnerInfo->fr_full_descr}}</textarea>
                </x-dashboard.input-card>
            </x-tab.item>

            <!-- English -->
            <x-tab.item>
                <x-dashboard.input-card>
                    <x-dashboard.input name="en_company_name"
                                       :value="$user->partnerInfo->en_company_name"
                                       :placeholder="__('partybooker-cp.company_name')"
                                       :label="__('partybooker-cp.company_name')"
                                       icon="heroicon-o-identification"
                                       :max="50"/>
                </x-dashboard.input-card>

                <x-dashboard.input-card>
                    <x-dashboard.textarea name="en_slogan"
                                          :label="__('partybooker-cp.slogan')"
                                          icon="heroicon-o-chat-bubble-bottom-center-text"
                                          :max="250">{{$user->partnerInfo->en_slogan}}</x-dashboard.textarea>
                </x-dashboard.input-card>

                <x-dashboard.input-card>
                    <label for="en_short_descr">{{__('partybooker-cp.short_description')}}</label>
                    <textarea name="en_short_descr" id="en_short_descr" maxlength="350"
                              placeholder="{{__('partybooker-cp.short_description')}}" required
                              class="textarea-wysiwyg">{{$user->partnerInfo->en_short_descr}}</textarea>
                </x-dashboard.input-card>

                <x-dashboard.input-card>
                    <label for="en_full_descr">{{__('partybooker-cp.full_description')}}</label>
                    <textarea name="en_full_descr" id="en_full_descr" maxlength="3000"
                              placeholder="{{__('partybooker-cp.full_description')}}" rows="6" required
                              class="textarea-wysiwyg">{{$user->partnerInfo->en_full_descr}}</textarea>
                </x-dashboard.input-card>
            </x-tab.item>
        </x-partner-category-tab>
    </x-dashboard.input-card>


    <x-dashboard.input-card>
        <div class="languages">
            <label>{{ __('partybooker-cp.languages')}}</label>

            <div class="language-list">
                <x-dashboard.checkbox
                    name="languages[]"
                    value="french"
                    :label="__('partybooker-cp.french')"
                    :checked="str_contains($user->partnerInfo->language, 'french')">
                    <img src="{{Vite::image('french.svg')}}" alt="french"/>
                </x-dashboard.checkbox>

                <x-dashboard.checkbox
                    name="languages[]"
                    value="english"
                    :label="__('partybooker-cp.english')"
                    :checked="str_contains($user->partnerInfo->language, 'english')">
                    <img src="{{Vite::image('english.svg')}}" alt="english"/>
                </x-dashboard.checkbox>

                <x-dashboard.checkbox
                    name="languages[]"
                    value="german"
                    :label="__('partybooker-cp.german')"
                    :checked="str_contains($user->partnerInfo->language, 'german')">
                    <img src="{{Vite::image('german.svg')}}" alt="german"/>
                </x-dashboard.checkbox>

                <x-dashboard.checkbox
                    name="languages[]"
                    value="italian"
                    :label="__('partybooker-cp.italian')"
                    :checked="str_contains($user->partnerInfo->language, 'italian')">
                    <img src="{{Vite::image('italian.svg')}}" alt="italian"/>
                </x-dashboard.checkbox>
            </div>
        </div>
    </x-dashboard.input-card>


    @if (Auth::user()->type == 'admin')
        <input type="text" name="id_partner" value="{{$user->partnerInfo->id_partner}}" hidden/>
    @else
        <input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden/>
    @endif

    <input type="text" name="current_logo" value="{{$user->partnerInfo->logo}}" hidden/>
    <input type="text" name="current_loc" value="{{$user->partnerInfo->location_code}}" hidden/>

</x-dashboard.modal>




