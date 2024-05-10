<x-accordion name="adminHome">

    <x-accordion.item
        accordion="adminHome"
        name="description"
        :padding="false"
    >
        <x-slot:title>
            Description
        </x-slot:title>

        <x-slot:content>
            @php($item = $content[AppContentType::APP_HOME->name])
            @include('app.admin.content.edit')

            <x-admin.content :content="$item"/>
        </x-slot:content>
    </x-accordion.item>

    <x-accordion.item
        accordion="adminHome"
        name="information"
        :padding="false"
    >
        <x-slot:title>
            Information
        </x-slot:title>

        <x-slot:content>
            @include('app.admin.content.information.index')
        </x-slot:content>
    </x-accordion.item>

    <x-accordion.item
        accordion="adminHome"
        name="comments"
        :padding="false"
    >
        <x-slot:title>
            Comments
        </x-slot:title>

        <x-slot:content>
            @include('app.admin.content.comments.index')
        </x-slot:content>
    </x-accordion.item>
</x-accordion>






