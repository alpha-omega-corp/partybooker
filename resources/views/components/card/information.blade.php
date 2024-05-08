@props([
    'icon' => 'heroicon-o-information-circle',
    'color' => 'text-accent',
])

<div class="app-card-information">
    @svg($icon, 'm-0 ' . $color)

    <div class="card-information-content">
        <p>{{$slot}}</p>
    </div>
</div>

