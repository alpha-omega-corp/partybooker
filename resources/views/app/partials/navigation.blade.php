<div class="app-navigation">
    <nav class="navbar">
        <div class="d-flex justify-content-between w-100">
            <div class="d-flex gap-4">
                <x-logo class="app-logo-sm"/>

                <!-- Nav Toggler -->
                <button class="navbar-toggler"
                        type="button"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar"
                        aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                    @svg($navIcon)
                </button>
            </div>

            <div class="d-flex align-items-center gap-3">
                <!-- Locale -->
                @include('app.partials.language')

                <!-- User -->
                @include('app.partials.user')
            </div>
        </div>

        <div class="offcanvas offcanvas-start"
             tabindex="-1"
             id="offcanvasNavbar"
             data-bs-scroll="true"
             data-bs-backdrop="true"
             aria-labelledby="offcanvasNavbarLabel">

            <div class="offcanvas-body">
                <div class="navigation">

                    <x-navigation.group>
                        <x-slot:header>
                            <x-logo class="app-logo-offcanvas"/>
                        </x-slot:header>

                        <x-navigation.item
                            :href="url(route('guest.home.index'))"
                            :text="__('nav.home')"
                            icon="heroicon-o-home"
                        />

                        <x-navigation.item
                            :href="url(route('guest.listing.index'))"
                            :text="__('nav.listing')"
                            icon="heroicon-o-queue-list"
                        />

                        <x-navigation.item
                            :href="url(route('guest.home.about'))"
                            :text="__('nav.about')"
                            icon="heroicon-o-information-circle"
                        />

                        <x-navigation.item
                            :href="url(route('guest.home.partnership'))"
                            :text="__('nav.partnership')"
                            icon="heroicon-o-identification"
                        />

                        <x-navigation.item
                            :href="url(route('guest.home.blog'))"
                            :text="__('nav.blog')"
                            icon="heroicon-o-book-open"
                        />

                        <x-navigation.item
                            :href="url(route('guest.home.faq'))"
                            :text="__('nav.faq')"
                            icon="heroicon-o-question-mark-circle"
                        />
                    </x-navigation.group>


                    @if(Auth::check() && Auth::user()->isAdmin())
                        <div class="admin-navigation">
                            <x-navigation.group>
                                <x-navigation.item
                                    :href="url(route('admin.dashboard.messages'))"
                                    text="messages"
                                    :icon="$emailIcon"
                                />
                                <x-navigation.item
                                    :href="url(route('admin.dashboard.content'))"
                                    text="contents"
                                    :icon="$boxIcon"
                                />
                                <x-navigation.item
                                    :href="url(route('admin.dashboard.partners'))"
                                    text="partners"
                                    :icon="$userIcon"
                                />

                            </x-navigation.group>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </nav>
</div>

@include('app.user.login')




