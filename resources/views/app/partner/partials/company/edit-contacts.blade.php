<x-modal.index
    :name="ModalName::PARTNER_COMPANY_CONTACTS"
    :type="ModalType::UPDATE"
    :size="ModalSize::MD"
    :multipart="true"
    :background="false"
    :route="route('partner.company.update.contact', ['company' => $company])"
>

    <x-slot:body>
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

    </x-slot:body>
</x-modal.index>
