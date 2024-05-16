<div class="app-notification-container">
    @if ($message = Session::get('success'))
        <x-notification.popup :type="NotificationType::SUCCESS" :message="$message"/>
    @endif

    @if ($message = Session::get('error'))
        <x-notification.popup :type="NotificationType::ERROR" :message="$message"/>
    @endif
</div>
