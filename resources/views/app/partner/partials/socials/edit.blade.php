<x-modal.index
    :name="ModalName::PARTNER_COMPANY_SOCIALS"
    :type="ModalType::UPDATE"
    :size="ModalSize::MD"
    :absolute="true"
    :background="false"
    :route="route('partner.company.update.socials', ['company' => $partner->company])"
>
    <x-slot:body>
        <x-forms.input
            name="www"
            :value="$social->www"
            label="Website"
        >
            @svg($linkIcon)
        </x-forms.input>
        <x-forms.input
            name="instagram"
            :value="$social->instagram"
            :background="false"
        >
            <img src="{{Vite::social('instagram')}}" alt="instagram">
        </x-forms.input>
        <x-forms.input
            name="facebook"
            :value="$social->facebook"
            :background="false"
        >
            <img src="{{Vite::social('facebook')}}" alt="facebook">
        </x-forms.input>
        <x-forms.input
            name="youtube"
            :value="$social->youtube"
            :background="false"
        >
            <img src="{{Vite::social('youtube')}}" alt="youtube">
        </x-forms.input>

        <x-forms.input
            name="twitter"
            :value="$social->twitter"
            :background="false"
        >
            <img src="{{Vite::social('twitter')}}" alt="twitter">
        </x-forms.input>
        <x-forms.input
            name="linkedin"
            :value="$social->linkedin"
            :background="false"
        >
            <img src="{{Vite::social('linkedin')}}" alt="linkedin">
        </x-forms.input>
    </x-slot:body>

</x-modal.index>
