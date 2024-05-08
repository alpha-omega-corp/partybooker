<x-app.action>
    <x-modal.open
        :name="ModalName::PARTNER"
        :type="ModalType::CREATE"
        :custom-color="AppColor::BLUE"
        :singleton="true"
        :fit="true"
        :radius="false"
        :text="strtoupper(__('partner.create'))"
    />
</x-app.action>

<x-modal.index
    :name="ModalName::PARTNER"
    :type="ModalType::CREATE"
    :size="ModalSize::MD"
    :hidden="true"
    :singleton="true"
    :route="route('partner.store')"
>
    <x-slot:body>
        <x-forms.list>
            <x-forms.input
                name="company"
                label="Company"
                type="text">
                @svg('heroicon-o-home-modern')
            </x-forms.input>

            <x-forms.input
                name="email"
                label="Email"
                type="email">
                @svg('heroicon-o-envelope')
            </x-forms.input>

            <x-forms.input
                name="password"
                label="Password"
                type="password">
                @svg('heroicon-o-lock-closed')
            </x-forms.input>

            <x-forms.checkbox
                name="language"
                :items="Language::values()"
            />

            <x-forms.radio
                :colorize="true"
                :items="$plans->map(fn($plan) => $plan->locale->name)"
                id="updatePlan"
                name="plan"/>

        </x-forms.list>
    </x-slot:body>
</x-modal.index>
