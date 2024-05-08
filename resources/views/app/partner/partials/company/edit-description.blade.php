@php use App\Models\CompanyLocale; @endphp
<x-modal.index
    :name="ModalName::PARTNER_COMPANY_DESCRIPTION"
    :type="ModalType::UPDATE"
    :size="ModalSize::MD"
    :multipart="true"
    :background="false"
    :route="route('partner.company.update.description', ['company' => $company])"
>

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
