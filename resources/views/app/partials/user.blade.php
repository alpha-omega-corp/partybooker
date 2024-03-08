@if(Auth::check())
    <div class="app-navigation-user">
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
                @if(!Auth::user()->isAdmin())
                    <li>
                        <a class="dropdown-item"
                           href="{{route('partner.dashboard', Auth::user()->partner)}}">
                            Dashboard
                        </a>
                    </li>
                @endif

                <li>
                    <a class="dropdown-item" href="{{route('auth.logout')}}">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
@else
    <x-modal.open
        :singleton="true"
        :name="ModalName::APP_LOGIN"
        :text="__('app.login')"
        :background="true"
    />
@endif


