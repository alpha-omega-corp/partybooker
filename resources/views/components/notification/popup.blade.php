<div class="app-notification shadow">
    <div class="app-notification-title {{$type === NotificationType::SUCCESS ? 'border-primary' : 'border-danger'}}">
        <div class="d-flex align-items-center gap-2 p-2">
            @if($type === NotificationType::SUCCESS)
                @svg('heroicon-o-check-circle', 'text-success')
            @else
                @svg('heroicon-o-x-circle')
            @endif

            <p class="m-0">{{ucfirst(strtolower($type->name))}}</p>
        </div>
    </div>

    <div class="app-notification-content">
        {{$message}}
    </div>
</div>


<script type="module">
    setTimeout(function () {
        $(".app-notification").fadeOut();
    }, 4000);
</script>
