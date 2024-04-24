@if(!Auth::check())
    <x-modal.index
        :name="ModalName::APP_LOGIN"
        :type="ModalType::CREATE"
        :size="ModalSize::MD"
        :singleton="true"
        :hidden="true"
        :absolute="true"
        :action="false"
        :title="__('app.login')"
        :route="route('auth.login')"
    >
        <x-slot:body>

            <x-forms.input
                name="email"
                :label="__('auth.email')">
                @svg('heroicon-o-envelope')
            </x-forms.input>

            <x-forms.input
                name="password"
                :label="__('auth.password')"
                type="password">
                @svg('heroicon-o-key')
            </x-forms.input>

        </x-slot:body>
    </x-modal.index>
@endif