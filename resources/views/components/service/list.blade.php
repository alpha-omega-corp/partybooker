@props([
    'title',
    'content',
    'type',
])

<x-card.service :title="$title" :padding="true">
    <x-advert.form
        :service="$content->service"
        :type="$type"
    />
</x-card.service>
