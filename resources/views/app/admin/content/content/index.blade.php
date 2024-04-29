@php($contents = [
    'Home' => 'app.admin.content.partials.home',
    'About' => 'app.admin.content.partials.about',
    'Partnership' => 'app.admin.content.partials.partnership',
    'Blog' => 'app.admin.content.partials.blog',
    'Faq' => 'app.admin.content.partials.faq',
])

<x-accordion
    name="adminContents"
>
    @foreach($contents as $key => $item)
        <x-accordion.item
            accordion="adminContents"
            :name="trim($key)"
            :padding="false"
        >
            <x-slot:title>
                <div class="admin-content-header">
                    <span class="fw-bold text-pink">{{$loop->index + 1}}.</span>
                    <span>{{$key}}</span>
                </div>
            </x-slot:title>

            <x-slot:content>
                @include($item)
            </x-slot:content>
        </x-accordion.item>
    @endforeach
</x-accordion>
