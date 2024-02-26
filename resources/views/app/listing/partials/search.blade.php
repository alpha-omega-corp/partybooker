<div x-data="list">
    <x-forms.input
        name="input"
        model="input"
        label="Search Partybooker"
        type="text">
        @svg('heroicon-o-magnifying-glass')
    </x-forms.input>
    <hr>

    <div x-show="input !== ''">
        <template x-for="item in search()">
            <span x-text="item.company"></span>
            <span x-text="item"></span>

        </template>

        <hr>
    </div>
</div>
