<div class="admin-category">
    <x-tab.locale>
        <x-slot:french>
            @include('app.admin.content.categories.partials.locale', ['lang' => Language::FR])
        </x-slot:french>

        <x-slot:english>
            @include('app.admin.content.categories.partials.locale', ['lang' => Language::EN])
        </x-slot:english>
    </x-tab.locale>

    @include('app.admin.content.categories.partials.edit')
</div>
