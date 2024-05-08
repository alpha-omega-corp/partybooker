<x-modal.index
    :name="ModalName::PARTNER_COMPANY_LOGO"
    :type="ModalType::UPDATE"
    :size="ModalSize::MD"
    :multipart="true"
    :background="false"
    :route="route('partner.company.update.logo', ['company' => $company])"
>
    <x-slot:body>
        <x-forms.file
            name="logo"
            label="Company Logo"
            id="editCompanyLogo"
            :file="$company->logo ? asset($company->logo) : null"/>
    </x-slot:body>
</x-modal.index>

