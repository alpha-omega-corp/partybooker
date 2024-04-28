<x-accordion name="adminPartnership">

    <x-accordion.item
        accordion="adminPartnership"
        name="benefits"
    >
        <x-slot:title>
            Benefits
        </x-slot:title>

        <x-slot:content>
            @include('app.admin.content.about.partials.abouts', ['items' => $benefits])
        </x-slot:content>
    </x-accordion.item>

    <x-accordion.item
        accordion="adminPartnership"
        name="usp"
    >
        <x-slot:title>
            USP
        </x-slot:title>

        <x-slot:content>
            @include('app.admin.content.usp.index')
        </x-slot:content>
    </x-accordion.item>

</x-accordion>
