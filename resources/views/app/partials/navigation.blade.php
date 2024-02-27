<div class="app-navigation">
    <nav class="navbar">
        <div class="d-flex justify-content-between w-100">
            <div class="d-flex gap-4">
                <button class="navbar-toggler"
                        type="button"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar"
                        aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                    @svg($navIcon)
                </button>

                @include('app.partials.user')
            </div>
            @include('app.partials.language')
        </div>

        <div class="offcanvas offcanvas-start"
             tabindex="-1"
             id="offcanvasNavbar"
             data-bs-scroll="true"
             data-bs-backdrop="true"
             aria-labelledby="offcanvasNavbarLabel">

            <div class="offcanvas-body">
                <div class="navigation h-full">
                    <ul class="nav nav-flush flex-column text-center">
                        <x-logo/>

                        <x-navigation.item
                            :href="url(route('guest.guest.index'))"
                            :text="__('nav.guest')"
                            icon="heroicon-o-home"
                        />

                        <x-navigation.item
                            :href="url(route('guest.listing.index'))"
                            :text="__('nav.listing')"
                            icon="heroicon-o-queue-list"
                        />

                        <x-navigation.item
                            :href="url(route('guest.guest.about'))"
                            :text="__('nav.about')"
                            icon="heroicon-o-information-circle"
                        />

                        <x-navigation.item
                            :href="url(route('guest.guest.partnership'))"
                            :text="__('nav.partnership')"
                            icon="heroicon-o-identification"
                        />
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>

@include('app.user.login')




