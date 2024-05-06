@if(Auth::check())
    <div class="app-navigation-user">
        <div class="btn-group dropdown">
            <button
                class="btn btn-secondary navigation-user-btn dr-toggle"
                type="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
            >
                @svg($userIcon, 'text-white')
            </button>
            <ul class="dropdown-menu">
                @if(Auth::user()->isAdmin())
                    <li><h6 class="dropdown-header">Management</h6></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <x-navigation.item
                            :href="url(route('admin.partners'))"
                            :text="__('nav.partners')"
                            icon="heroicon-o-book-open"
                        />
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{url(route(__('route.admin-content')))}}">
                            Content
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{url(route(__('route.admin-categories')))}}">
                            Categories
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{url(route(__('route.admin-plans')))}}">
                            Plans
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
                <li><h6 class="dropdown-header">{{__('app.user')}}</h6></li>

                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <a class="dropdown-item" href="{{route('auth.logout')}}">
                        {{__('app.logout')}}
                    </a>
                </li>
                @if(!Auth::user()->isAdmin() && Auth::user()->partner)
                    <li>
                        <a class="dropdown-item"
                           href="{{route(__('route.profile'), Auth::user()->partner->company)}}">
                            {{__('app.profile')}}
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
@else
    <div class="app-navigation-login">
        <x-modal.open
            :singleton="true"
            :name="ModalName::APP_LOGIN"
            :custom-color="AppColor::SECONDARY"
            :text="__('app.login')"
            :background="true"
        />
    </div>
@endif


