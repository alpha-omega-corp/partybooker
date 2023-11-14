@props([
    'type',
    'message'
])


<div class="main-notifications">
    <div class="app-notification shadow-lg">
        <div class="notification-title {{$type === 'error' ? 'bg-danger' : 'bg-primary'}}">
            @if($type === 'success')
                @svg('heroicon-o-check-circle')
            @elseif($type === 'error')
                @svg('heroicon-o-x-circle')
            @endif
            <h6>{{ucfirst($type)}}</h6>
        </div>

        <div class="notification-message">
            {{$message}}
        </div>
    </div>
</div>
