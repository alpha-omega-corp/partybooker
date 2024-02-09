<nav class="navigation navbar fixed-top bg-white">

    <div class="d-flex">

        <div class="container-fluid p-2">
            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar"
                    aria-label="Toggle navigation">
                @svg('heroicon-s-bars-3-bottom-left')
            </button>

            <div class="d-flex flex-column">
                <div class="auth">
                    @if(!Auth::user())
                        <div x-data="modal('loginModal')">
                            <button type="button" class="btn btn-accent" @click="open">
                                Login
                            </button>
                        </div>
                    @else
                        <div class="dropdown">
                            <button
                                class="btn btn-secondary dropdown-toggle"
                                type="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                {{Auth::user()->name}}
                            </button>
                            <ul class="dropdown-menu">

                                @if(Auth::user()->isAdmin())
                                    <li>
                                        <a class="dropdown-item"
                                           href="{{ route('admin') }}">
                                            Administration
                                        </a>
                                    </li>
                                @endif
                                <li>
                                    <a class="dropdown-item"
                                       href="{{route('partner.dashboard', Auth::user()->partner)}}">
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{route('auth.logout')}}">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div>

                    @endif
                </div>

                <div class="language">
                    <a href="{{route('locale', ['lang' => 'fr'])}}">
                        <img src="{{ Vite::flag('france.png') }}"
                             alt="Party Booker French"/>
                    </a>
                    <a href="{{route('locale', ['lang' => 'en'])}}">
                        <img src="{{ Vite::flag('uk.png') }}"
                             alt="Party Booker English"/>
                    </a>
                </div>
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
        </div>
    </div>
</nav>

@include('app.partials.auth')
