<div class="app-navigation-main">


    <div class="app-navigation-actions">

        <div class="app-navigation-header">
            <!-- Locale -->
            @include('app.partials.language')

            <div class="app-navigation-close">
                <!-- Nav Toggler -->
                <button class="navbar-toggler app-navigation-open"
                        type="button"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar"
                        aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                    @svg($navIcon)
                </button>
            </div>
        </div>


        <!-- User -->
        @include('app.partials.user')

    </div>

    <x-navigation.group>
        <x-navigation.item
            :href="url(route(__('route.home')))"
            :text="__('nav.home')"
            icon="heroicon-o-home"
        />

        <x-navigation.item
            :href="url(route(__('route.listing')))"
            :text="__('nav.listing')"
            icon="heroicon-o-queue-list"
        />

        <x-navigation.item
            :href="url(route(__('route.about')))"
            :text="__('nav.about')"
            icon="heroicon-o-information-circle"
        />

        <x-navigation.item
            :href="url(route(__('route.partnership')))"
            :text="__('nav.partnership')"
            icon="heroicon-o-identification"
        />

        <x-navigation.item
            :href="url(route(__('route.blog')))"
            :text="__('nav.blog')"
            icon="heroicon-o-book-open"
        />

        <x-navigation.item
            :href="url(route(__('route.faq')))"
            :text="__('nav.faq')"
            icon="heroicon-o-question-mark-circle"
        />
    </x-navigation.group>
</div>
