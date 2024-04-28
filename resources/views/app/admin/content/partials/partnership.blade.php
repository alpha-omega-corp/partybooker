<x-accordion name="adminPartnership">

    <x-accordion.item
        accordion="adminPartnership"
        name="benefits"
        :padding="false"
    >
        <x-slot:title>
            Benefits
        </x-slot:title>

        <x-slot:content>
            @include('app.admin.content.about.partials.abouts', [
                'aboutItems' => $benefits,
                'aboutType' => AppAboutType::BENEFITS
            ])
        </x-slot:content>
    </x-accordion.item>

    <x-accordion.item
        accordion="adminPartnership"
        name="usp"
        :padding="false"
    >
        <x-slot:title>
            USP
        </x-slot:title>

        <x-slot:content>
            @include('app.admin.content.usp.index')
        </x-slot:content>
    </x-accordion.item>

</x-accordion>
