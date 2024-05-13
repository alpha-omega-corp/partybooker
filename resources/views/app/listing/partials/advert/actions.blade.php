<x-app.action>
    @if(Auth::user() && Auth::user()->isAdmin())
        <a href="{{route(__('route.profile'), [
            'company' => $advert->company
        ])}}" target="_blank" class="btn btn-secondary text-white text-center w-100">
            Profile
        </a>
    @endif

</x-app.action>




