<x-card
    :title="__('advert.description')"
    :radius="true"
    :can-open="false"
    :center="$center"
>
    <x-slot:body>
        <x-app.text-more
            :content="$content"
        />

    </x-slot:body>
</x-card>

