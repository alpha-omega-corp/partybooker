<div>
    @if ($message = Session::get('success'))
        <x-notification type="success" :message="$message"/>
    @endif

    @if ($message = Session::get('error'))
        <x-notification type="error" :message="$message"/>
    @endif

</div>
