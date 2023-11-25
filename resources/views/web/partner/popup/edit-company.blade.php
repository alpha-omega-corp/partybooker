<a class="dashboard-modal-button rounded-circle" style="cursor: pointer;"
   data-tippy-content="{{__('partner.edit')}}"
   data-bs-toggle="modal" data-bs-target="#editCompanyModal">
    @svg('heroicon-o-cog-6-tooth')
</a>

<div class="modal fade" id="editCompanyModal" tabindex="-1"
     aria-labelledby="editCompanyModal"
     aria-hidden="true">
    <div class="modal-dialog modal-md">
        <form method="POST" action="{{
                    Auth::user()->type == 'admin'
                    ? route('company.update.admin')
                    : route('company.update')
                }}" enctype=multipart/form-data>

            @csrf

            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-uppercase fw-bold" id="editMainImageModelLabel">
                        {{__('form.edit-company-modal')}}
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    @if ($partner->logo)
                        <div class="logo-image">
                            <img src="{{ asset('/storage/logos/'.$partner->logo)}}" alt="logo"
                                 class="cp-company-logo"
                                 width="100">
                        </div>
                    @endif
                    <div>
                        <input type="file" id="logo-btn" name="logo_upload">
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

                    <input type="hidden" name="id_partner" value="{{$partner->id_partner}}"/>
                    <input type="hidden" name="current_logo" value="{{$partner->logo}}"/>
                    <input type="hidden" name="current_loc" value="{{$partner->location_code}}"/>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        {{__('partner.save')}}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>








