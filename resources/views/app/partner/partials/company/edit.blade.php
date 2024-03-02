<x-modal.index
    :name="ModalName::PARTNER_COMPANY"
    :type="ModalType::UPDATE"
    :size="ModalSize::MD"
    :multipart="true"
    :absolute="true"
    :route="route('partner.company.update', ['partner' => $partner])"
>
    <x-slot:body>
        <x-forms.file name="logo" id="companyLogo" label="Company Logo" :file="$partner->company->logo"/>
        <hr>
        <x-forms.list>
            <x-forms.input
                name="name"
                :label="__('company.name')"
                :value="$partner->company->name">
                @svg('heroicon-o-home-modern')
            </x-forms.input>

            <x-forms.input
                name="slug"
                :label="__('company.slug')"
                :value="$partner->company->slug">
                @svg($linkIcon)
            </x-forms.input>
        </x-forms.list>

        <hr>

        <x-forms.list>
            <x-forms.input
                name="email"
                type="email"
                :label="__('company.email')"
                :value="$partner->company->contact->email">
                @svg('heroicon-o-envelope-open')
            </x-forms.input>

            <x-forms.input
                name="phone"
                :label="__('company.phone')"
                :value="$partner->company->contact->phone">
                @svg('heroicon-o-phone')
            </x-forms.input>

            <x-forms.input
                name="fax"
                :label="__('company.fax')"
                :value="$partner->company->contact->fax">
                @svg('heroicon-o-home-modern')
            </x-forms.input>
        </x-forms.list>
        
    </x-slot:body>
</x-modal.index>
