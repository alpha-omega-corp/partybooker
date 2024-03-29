@if(Auth::user() && Auth::user()->isAdmin())
    <div class="dropdown">
        <button class="btn btn-accent dropdown-toggle"
                type="button"
                data-bs-toggle="dropdown"
                aria-expanded="false">


        </button>
        <ul class="dropdown-menu">
            <li><h6 class="dropdown-header">App Management</h6></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <a class="dropdown-item" href="{{route('admin.dashboard.partners')}}">Partners</a>
            </li>
            <li>

            </li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>

            </li>
        </ul>
    </div>
@endif
