<div x-data="list" class="listing-content-search">
    <x-forms.input
        name="input"
        model="input"
        label="Search Partybooker"
        type="text">
        @svg($searchIcon)
    </x-forms.input>

    <div class="content-search-results">
        <template x-for="item in search()">

            <a class="search-result-item" :href="item.url">
                <img src="#" :src="item.thumbnail" alt="alt">

                <div class="result-item-content">
                    <h6 x-text="item.title"></h6>

                    <div class="item-content-company">
                        @svg('heroicon-o-home-modern', 'text-accent')
                        <p x-text="item.company"></p>
                    </div>
                    <div class="item-content-address">
                        <p x-text="item.address"></p>
                    </div>

                    <div class="item-content-category">
                        <span class="badge text-bg-orange text-white" x-text="item.category"></span>
                    </div>
                </div>
            </a>
        </template>
    </div>

    <hr x-show="input !== ''">
</div>
