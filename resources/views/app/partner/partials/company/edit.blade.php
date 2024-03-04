<x-modal.index
    :name="ModalName::PARTNER_COMPANY"
    :type="ModalType::UPDATE"
    :size="ModalSize::LG"
    :multipart="true"
    :absolute="true"
    :route="route('partner.company.update', ['partner' => $partner])"
>
    <x-slot:body>


        <div class="d-flex justify-content-between gap-4">
            <div class="w-100">
                <x-forms.file
                    name="logo"
                    label="Company Logo"
                    id="editCompanyLogo"
                    :file="asset($partner->company->logo)"/>

                <x-forms.input
                    name="name"
                    :label="__('company.name')"
                    :value="$partner->company->name">
                    @svg($companyIcon)
                </x-forms.input>

                <x-forms.input
                    name="slug"
                    :label="__('company.slug')"
                    :value="$partner->company->slug">
                    @svg($linkIcon)
                </x-forms.input>
            </div>

            <div class="w-100">
                <x-forms.input
                    name="email"
                    type="email"
                    :label="__('company.email')"
                    :value="$partner->company->contact->email">
                    @svg($emailIcon)
                </x-forms.input>

                <x-forms.input
                    name="phone"
                    :label="__('company.phone')"
                    :value="$partner->company->contact->phone">
                    @svg($phoneIcon)
                </x-forms.input>

                <x-forms.input
                    name="fax"
                    :label="__('company.fax')"
                    :value="$partner->company->contact->fax">
                    @svg($companyIcon)
                </x-forms.input>
            </div>
        </div>

    </x-slot:body>

    <x-tab.locale>
        <x-slot:french>
            <x-forms.list>
                @php($locale = $partner->company->ofLang(Language::FR)->first()->locale)

                <x-forms.input
                    name="slogan_fr"
                    :label="__('company.slogan')"
                    :value="$locale->slogan">
                    @svg($titleIcon)
                </x-forms.input>

                <x-forms.editor
                    id="editCompanyDescriptionFrench"
                    name="description_fr"
                    label="Description"
                    :value="$locale->description"/>
            </x-forms.list>
        </x-slot:french>

        <x-slot:english>
            @php($locale = $partner->company->ofLang(Language::EN)->first()->locale)

            <x-forms.list>
                <x-forms.input
                    name="slogan_en"
                    :label="__('company.slogan')"
                    :value="$locale->slogan">
                    @svg($titleIcon)
                </x-forms.input>

                <x-forms.editor
                    id="editCompanyDescriptionEnglish"
                    name="description_en"
                    label="Description"
                    :value="$locale->description"/>
            </x-forms.list>
        </x-slot:english>

    </x-tab.locale>
</x-modal.index>
