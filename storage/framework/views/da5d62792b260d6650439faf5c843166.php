<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'targets' => null,
    'icon' => 'heroicon-o-information-circle',
    'color' => 'text-danger'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'targets' => null,
    'icon' => 'heroicon-o-information-circle',
    'color' => 'text-danger'
]); ?>
<?php foreach (array_filter(([
    'targets' => null,
    'icon' => 'heroicon-o-information-circle',
    'color' => 'text-danger'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="dashboard-card-info" x-data="{targets: '<?php echo e(json_encode($targets)); ?>'}"
     @click="targetMany(targets)">
    <div class="card-info-content">
        <div class="d-flex">
            <div class="d-flex justify-content-center align-items-center">
                <?php echo e(svg($icon, 'm-0 ' . $color)); ?>
            </div>
            <div class="d-flex">
                <p class="d-flex align-items-center m-0">
                    <?php echo e($slot); ?>

                </p>

                <?php if($targets): ?>
                    <div class="dashboard-card-info-arrow">
                        <?php echo e(svg('heroicon-o-cursor-arrow-ripple')); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/components/dashboard/card-info.blade.php ENDPATH**/ ?>