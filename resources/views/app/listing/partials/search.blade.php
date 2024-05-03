<div class="app-filter-search">
    <x-modal.open
        :singleton="true"
        :fit="true"
        :background="false"
        :custom-color="AppColor::SECONDARY"
        :name="ModalName::APP_LISTING_SEARCH"
        :tooltip="__('listing.search')"
        :icon="$searchIcon"
    />
</div>

<div class="app-listing-search">
    <x-modal.index
        :name="ModalName::APP_LISTING_SEARCH"
        :type="ModalType::READ"
        :size="ModalSize::XL"
        :icon="$searchIcon"
        :tooltip="__('listing.search')"
        :singleton="true"
        :hidden="true"
        tag="search"
    >

        <div x-data="list">
            <div class="listing-search-input">
                <x-forms.input
                    name="search"
                    model="input"
                    label="Search Partybooker"
                    type="text">
                    @svg($searchIcon)
                </x-forms.input>
            </div>

            <div class="listing-search-container">
                <template x-for="item in search()">

                    <a class="listing-search-item" :href="item.url">
                        <div class="search-item-image">
                            <img src="#" :src="item.thumbnail" alt="alt">
                        </div>

                        <div class="search-item-content">
                            <div class="search-item-header">
                                <h6 class="search-item-title" x-text="item.title"></h6>
                                <div class="search-item-company">
                                    @svg('heroicon-o-home-modern', 'text-blue')
                                    <p x-text="item.company"></p>
                                </div>
                            </div>

                            <div class="item-content-description">
                                <p x-text="item.description"></p>
                            </div>

                            <div class="item-content-address">
                                <p x-text="item.address"></p>
                            </div>

                            <div class="item-content-category">
                                <span class="badge text-bg-pink text-white" x-text="item.category"></span>
                            </div>
                        </div>
                    </a>
                </template>
            </div>

            <hr x-show="input !== ''">
        </div>
    </x-modal.index>
</div>
