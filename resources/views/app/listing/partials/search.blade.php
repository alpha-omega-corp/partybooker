<div class="app-listing-content">
    <template x-for="item in search()">
        <a :href="item.url">
            <div class="advert-card">
                <div class="advert-card-thumbnail">
                    <img src="#" :src="item.thumbnail" alt="alt">
                </div>

                <div class="advert-card-content">
                    <div>
                        <h6 class="advert-card-title" x-text="item.title"></h6>
                        <div class="search-item-company">
                            <p x-text="item.company"></p>
                        </div>
                    </div>
                    <div>
                        <span class="badge text-bg-pink text-white" x-text="item.category"></span>
                    </div>

                    <div class="">

                    </div>

                    <div class="item-content-address">
                        <p x-text="item.address"></p>
                    </div>

                </div>
            </div>
        </a>
    </template>

    <hr x-show="input !== ''">
</div>
