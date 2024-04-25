@php use App\Models\CompanyLocale; @endphp
@php($company = $partner->company)

<x-modal.index
    :name="ModalName::PARTNER_COMPANY"
    :type="ModalType::UPDATE"
    :size="ModalSize::LG"
    :multipart="true"
    :absolute="true"
    :background="false"
    :route="route('partner.company.update', ['company' => $partner->company])"
>
    <x-slot:body>
        <x-forms.file
            name="logo"
            label="Company Logo"
            id="editCompanyLogo"
            :file="$company->logo ? asset($company->logo) : null"/>


        <x-forms.input
            name="name"
            :label="__('form.name')"
            :value="$company->name">
            @svg($companyIcon)
        </x-forms.input>

        <x-forms.input
            name="slug"
            :label="__('form.slug')"
            :value="$company->slug">
            @svg($linkIcon)
        </x-forms.input>

        <div class="w-100">
            <x-forms.input
                name="email"
                type="email"
                :label="__('form.email')"
                :value="$company->contact->email">
                @svg($emailIcon)
            </x-forms.input>

            <x-forms.input
                name="phone"
                :label="__('form.phone')"
                :value="$company->contact->phone">
                @svg($phoneIcon)
            </x-forms.input>

            <x-forms.input
                name="fax"
                :label="__('form.fax')"
                :value="$company->contact->fax">
                @svg($companyIcon)
            </x-forms.input>
        </div>

    </x-slot:body>

    <x-tab.locale>
        <x-slot:french>
            <x-forms.list>
                @php($locale = $company->locale ? $company->ofLang(Language::FR)->first()->locale : new CompanyLocale())

                <x-forms.input
                    name="slogan_fr"
                    :label="__('form.slogan')"
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
            @php($locale = $company->locale ? $company->ofLang(Language::EN)->first()->locale : new CompanyLocale())

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
