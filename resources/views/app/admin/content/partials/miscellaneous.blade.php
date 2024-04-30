<x-accordion name="adminMisc">
    <x-accordion.item
        accordion="adminMisc"
        name="contacts"
        :padding="false"
    >
        <x-slot:title>
            Contacts
        </x-slot:title>

        <x-slot:content>
            <x-modal.open
                :name="ModalName::APP_CONTACT"
                :type="ModalType::UPDATE"
                :icon="$editIcon"
                :fit="true"
                :radius="false"
                :background="true"
            />

            <x-icon.text :text="$appContact->phone" :icon="$phoneIcon"/>
            <x-icon.text :text="$appContact->email" :icon="$emailIcon"/>

            <x-icon.link :link="$appContact->instagram">
                <img src="{{Vite::social('instagram')}}" alt="instagram">
            </x-icon.link>

            <x-icon.link :link="$appContact->facebook">
                <img src="{{Vite::social('facebook')}}" alt="facebook">
            </x-icon.link>

            <x-icon.link :link="$appContact->x">
                <img src="{{Vite::social('twitter')}}" alt="twitter">
            </x-icon.link>
            
            <x-icon.link :link="$appContact->linkedin">
                <img src="{{Vite::social('linkedin')}}" alt="linkedin">
            </x-icon.link>

            <div class="p-4 text-center">
                {{$appContact->address}}
            </div>

            @include('app.admin.contacts.partials.edit', ['contacts' => $appContact])
        </x-slot:content>
    </x-accordion.item>

    <x-accordion.item
        accordion="adminMisc"
        name="userTerms"
        :padding="false"
    >
        <x-slot:title>
            User Terms
        </x-slot:title>

        <x-slot:content>
            @php($item = $content[AppContentType::USER_TERMS->name])
            @include('app.admin.content.content.partials.edit')

            <x-admin.content :content="$item"/>
        </x-slot:content>
    </x-accordion.item>

    <x-accordion.item
        accordion="adminMisc"
        name="serviceTerms"
        :padding="false"
    >
        <x-slot:title>
            Service Terms
        </x-slot:title>

        <x-slot:content>
            @php($item = $content[AppContentType::SERVICE_TERMS->name])
            @include('app.admin.content.content.partials.edit')

            <x-admin.content :content="$item"/>
        </x-slot:content>
    </x-accordion.item>


</x-accordion>
