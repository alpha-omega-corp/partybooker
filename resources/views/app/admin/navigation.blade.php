@if(Auth::user() && Auth::user()->isAdmin())
    <div class="dropdown">
        <button class="btn btn-accent dropdown-toggle d-flex align-items-center justify-content-between" type="button"
                data-bs-toggle="dropdown" aria-expanded="false">

            @svg('heroicon-c-cpu-chip', 'me-2')
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
                <a class="dropdown-item" href="{{route('admin.dashboard.messages')}}">Messages</a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <a class="dropdown-item" href="{{route('admin.dashboard.content')}}">Content</a>
            </li>
        </ul>
    </div>
@endif
