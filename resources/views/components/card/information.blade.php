@props([
    'targets' => null,
    'icon' => 'heroicon-o-information-circle',
    'color' => 'text-accent',
])

<div class="dashboard-card-info">
    <div class="card-info-content">
        <div class="d-flex gap-2">
            <div class="d-flex justify-content-center align-items-center">
                @svg($icon, 'm-0 ' . $color)
            </div>
            <div class="d-flex">
                <p class="d-flex align-items-center m-0">
                    {{$slot}}
                </p>

                @if($targets)
                    <div class="dashboard-card-info-arrow">
                        @svg('heroicon-o-cursor-arrow-ripple')
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
