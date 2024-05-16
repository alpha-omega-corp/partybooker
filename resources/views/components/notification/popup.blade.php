<div class="app-notification shadow">
    <div class="app-notification-header">
        @php
            $color = '';
            $type === NotificationType::SUCCESS
                ? $color = 'text-primary'
                : $color = 'text-danger';
        @endphp
        @if($type === NotificationType::SUCCESS)
            @svg('heroicon-o-check-circle', $color)
        @else
            @svg('heroicon-o-x-circle', $color)
        @endif

        <span class="app-notification-title">
            {{ucfirst(strtolower($type->name))}}
        </span>
    </div>

    <div class="app-notification-content">
        {{$message}}
    </div>
</div>


<script type="module">
    setTimeout(function () {
        $(".app-notification").fadeOut();
    }, 3000);
</script>
