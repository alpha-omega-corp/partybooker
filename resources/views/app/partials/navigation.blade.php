<div class="app-navigation">
    <nav class="navbar">
        <div class="d-flex justify-content-between w-100">
            <div class="app-navigation-content">
                <x-logo class="app-navigation-logo"/>

                <!-- Nav Toggler -->
                <button class="navbar-toggler"
                        type="button"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar"
                        aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                    @svg($navIcon)
                </button>

                <div class="navbar-desktop">
                    @include('app.partials.navbar')
                </div>
            </div>

            <div class="app-navigation-actions">
                <!-- User -->
                @include('app.partials.user')
                <!-- Locale -->
                @include('app.partials.language')
            </div>
        </div>

        <div class="offcanvas offcanvas-start"
             tabindex="-1"
             id="offcanvasNavbar"
             data-bs-scroll="true"
             data-bs-backdrop="true"
             aria-labelledby="offcanvasNavbarLabel">

            <div class="offcanvas-body">
                <div class="navbar-mobile">
                    @include('app.partials.navbar')
                </div>
            </div>
        </div>
    </nav>
</div>

@include('app.user.login')




