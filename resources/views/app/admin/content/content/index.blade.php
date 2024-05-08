@php($contents = [
    'Home' => 'app.admin.content.partials.home',
    'About' => 'app.admin.content.partials.about',
    'Partnership' => 'app.admin.content.partials.partnership',
    'Blog' => 'app.admin.content.partials.blog',
    'Faq' => 'app.admin.content.partials.faq',
    'Miscellaneous' => 'app.admin.content.partials.miscellaneous',
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
                    <div class="d-flex justify-content-between w-100">
                        <span class="fw-bold text-blue">{{$loop->index + 1}}.</span>
                        <span class="pe-2">{{$key}}</span>
                    </div>
                </div>
            </x-slot:title>

            <x-slot:content>
                @include($item)
            </x-slot:content>
        </x-accordion.item>
    @endforeach
</x-accordion>
