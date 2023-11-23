<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'title',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'title',
]); ?>
<?php foreach (array_filter(([
    'title',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="dashboard-card">

    <div class="row">
        <div class="d-flex">
            <div>
                <h2 class="fw-bold text-uppercase text-standard">
                    <?php echo e($title); ?>

                </h2>
            </div>

            <div class="d-flex align-items-start justify-content-start">
                <div class="dashboard-card-badge">
                    <?php if(isset($badge)): ?>
                        <?php echo e($badge); ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>


    <div class="dashboard-card-body">
        <?php echo e($slot); ?>

    </div>
</div>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/components/dashboard/card.blade.php ENDPATH**/ ?>