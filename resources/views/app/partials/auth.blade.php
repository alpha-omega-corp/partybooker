<x-modal
    id="loginModal"
    name="login"
    :type="ModalType::CREATE"
    :size="ModalSize::MD"
    :position="ModalPosition::topLeft"
    :hasButton="false"
    :route="route('auth.login')"
>
    <x-forms.list>
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

    </x-forms.list>
</x-modal>
