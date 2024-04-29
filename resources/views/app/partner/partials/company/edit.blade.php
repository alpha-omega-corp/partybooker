@php use App\Models\CompanyLocale; @endphp
@php($company = $partner->company)

<x-modal.index
    :name="ModalName::PARTNER_COMPANY"
    :type="ModalType::UPDATE"
    :size="ModalSize::MD"
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
    </x-slot:body>
</x-modal.index>
