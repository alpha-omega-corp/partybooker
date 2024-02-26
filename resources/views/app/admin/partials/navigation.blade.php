@if(Auth::user()->isAdmin())
    <div class="app-navigation-admin">
        <a href="{{route('admin.dashboard.partners')}}">Partners</a>
        <a href="{{route('admin.dashboard.messages')}}">Messages</a>
        <a href="{{route('admin.dashboard.blog')}}">Blog</a>
    </div>
@endif
