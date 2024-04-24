<x-app.action>
    <x-modal.open
        :name="ModalName::PARTNER"
        :type="ModalType::CREATE"
        :custom-color="AppColor::PINK"
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

            <hr>
            <div class="d-flex justify-content-around">
                <x-forms.radio
                    :colorize="true"
                    :items="$plans->map(fn($plan) => $plan->locale->name)"
                    :inline="true"
                    id="updatePlan"
                    name="plan"/>
            </div>
            <hr>

            <x-forms.input
                name="name"
                label="User"
                type="text">
                @svg('heroicon-o-user-circle')
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

            <hr>
            <x-forms.checkbox
                name="language"
                title="Languages"
                :items="Language::values()"
            />
        </x-forms.list>
    </x-slot:body>
</x-modal.index>
