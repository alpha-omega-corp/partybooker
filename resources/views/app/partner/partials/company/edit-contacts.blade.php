<x-modal.index
    :name="ModalName::PARTNER_COMPANY_CONTACTS"
    :type="ModalType::UPDATE"
    :size="ModalSize::LG"
    :multipart="true"
    :absolute="true"
    :background="false"
    :route="route('partner.company.update', ['company' => $partner->company])"
>

</x-modal.index>

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
