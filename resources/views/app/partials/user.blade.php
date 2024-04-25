@if(Auth::check())
    <div class="app-navigation-user">
        <div class="btn-group dropstart">
            <button
                class="btn btn-secondary dr-toggle"
                type="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
            >
                @svg($userIcon)
            </button>
            <ul class="dropdown-menu">
                @if(!Auth::user()->isAdmin() && Auth::user()->partner)
                    <li>
                        <a class="dropdown-item"
                           href="{{route(__('route.profile'), Auth::user()->partner->company)}}">
                            Dashboard
                        </a>
                    </li>
                @else

                    <li><h6 class="dropdown-header">Management</h6></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{url(route('admin.partners'))}}">
                            Partners
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{url(route(__('route.admin-content')))}}">
                            Content
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{url(route('admin.forms'))}}">
                            Forms
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{url(route('admin.messages'))}}">
                            Messages
                        </a>
                    </li>
                @endif


                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <a class="dropdown-item" href="{{route('auth.logout')}}">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
@else
    <div class="app-navigation-login">
        <x-modal.open
            :singleton="true"
            :name="ModalName::APP_LOGIN"
            :custom-color="AppColor::SECONDARY"
            :fit="true"
            :text="__('app.login')"
            :background="true"
        />
    </div>
@endif


