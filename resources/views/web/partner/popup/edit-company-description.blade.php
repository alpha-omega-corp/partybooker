<x-dashboard.modal
    id="editCompanyDescription"
    title="Edit company descriptions"
    :button="__('partner.edit')"
    :action="url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/edit-company-description')"
    :hasFiles="false"
    method="POST">

    <div class="edit-company-description">
        <x-partner-category-tab :tabs="['FR', 'EN']">
            <!-- French -->
            <x-tab.item>
                <div class="edit-company-section">

                    <img src="{{Vite::image('icons/france.svg')}}" alt="english" class=""/>

                    <x-dashboard.textarea name="fr_slogan"
                                          :label="__('partybooker-cp.slogan')"
                                          icon="heroicon-o-chat-bubble-bottom-center-text"
                                          :max="250">{{$partnerInfo->fr_slogan}}</x-dashboard.textarea>


                    <div class="mt-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <label for="fr_short_descr">{{__('partybooker-cp.short_description')}}</label>
                                <textarea name="fr_short_descr" id="fr_short_descr" maxlength="350"
                                          rows="10" required
                                          class="textarea-wysiwyg">{{$partnerInfo->fr_short_descr}}</textarea>
                            </div>

                            <div class="w-100">
                                <label for="fr_full_descr">{{__('partybooker-cp.full_description')}}</label>
                                <textarea name="fr_full_descr" id="fr_full_descr" maxlength="3000"
                                          rows="10" required
                                          class="textarea-wysiwyg">{{$partnerInfo->fr_full_descr}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </x-tab.item>

            <!-- English -->
            <x-tab.item>

                <div class="edit-company-section">
                    <img src="{{Vite::image('icons/uk-flag.svg')}}" alt="english" class=""/>
                    <x-dashboard.textarea name="en_slogan"
                                          :label="__('partybooker-cp.slogan')"
                                          icon="heroicon-o-chat-bubble-bottom-center-text"
                                          :max="250">{{$partnerInfo->en_slogan}}</x-dashboard.textarea>

                    <div class="mt-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <label for="en_short_descr">{{__('partybooker-cp.short_description')}}</label>
                                <textarea name="en_short_descr" id="en_short_descr" maxlength="350" required
                                          class="textarea-wysiwyg">{{$partnerInfo->en_short_descr}}</textarea>
                            </div>

                            <div class="w-100">
                                <label for="en_full_descr">{{__('partybooker-cp.full_description')}}</label>
                                <textarea name="en_full_descr" id="en_full_descr" maxlength="3000" required
                                          class="textarea-wysiwyg">{{$partnerInfo->en_full_descr}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </x-tab.item>
        </x-partner-category-tab>
    </div>

    @if (Auth::user()->type == 'admin')
        <input type="text" name="id_partner" value="{{$partnerInfo->id_partner}}" hidden/>
    @else
        <input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden/>
    @endif
</x-dashboard.modal>




