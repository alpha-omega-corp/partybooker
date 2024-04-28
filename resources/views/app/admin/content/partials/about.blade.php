<x-accordion name="adminAbout">
    <x-accordion.item
        accordion="adminAbout"
        name="Description"
        :padding="false"
    >
        <x-slot:title>
            Description
        </x-slot:title>

        <x-slot:content>
            @php($item = $content[AppContentType::APP_CONCEPT->name])
            @include('app.admin.content.content.partials.edit', ['item' => $item])

            <x-admin.content :content="$item"/>
        </x-slot:content>
    </x-accordion.item>

    <x-accordion.item
        accordion="adminAbout"
        name="Concept"
        :padding="false"
    >
        <x-slot:title>
            Concept
        </x-slot:title>

        <x-slot:content>
            @php($item = $content[AppContentType::APP_ABOUT->name])
            @include('app.admin.content.content.partials.edit', ['content' => $item])

            <x-admin.content :content="$item"/>
        </x-slot:content>
    </x-accordion.item>

    <x-accordion.item
        accordion="adminAbout"
        name="Features"
        :padding="false"
    >
        <x-slot:title>
            Features
        </x-slot:title>

        <x-slot:content>
            @include('app.admin.content.about.partials.abouts', [
                'aboutItems' => $features,
                'aboutType' => AppAboutType::FEATURES
            ])
        </x-slot:content>
    </x-accordion.item>
</x-accordion>






