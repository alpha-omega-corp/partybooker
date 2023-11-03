@props([
    'targets' => null,
])

<div class="dashboard-card-info" x-data="{targets: '{{json_encode($targets)}}'}"
     @click="targetMany(targets)">
    <div class="card-info-content">
        <div class="d-flex">
            <div class="d-flex justify-content-center align-items-center">
                @svg('heroicon-o-information-circle', 'm-0')
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
