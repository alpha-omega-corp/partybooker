<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'title',
    'value',
    'icon' => null,
    'image' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'title',
    'value',
    'icon' => null,
    'image' => null,
]); ?>
<?php foreach (array_filter(([
    'title',
    'value',
    'icon' => null,
    'image' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="dashboard-stat-card d-flex flex-column" data-tippy-content="<?php echo e($title); ?>">
    <div class="stat-card-title">
        <?php if($icon): ?>
            <?php echo e(svg($icon)); ?>
        <?php endif; ?>

        <?php if($image): ?>
            <img src="<?php echo e(Vite::image($image)); ?>" alt="<?php echo e($title); ?>"/>
        <?php endif; ?>

        <div class="stat-value d-flex justify-content-center w-100"><?php echo e($value); ?></div>

    </div>

</div>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/components/dashboard/stat-card.blade.php ENDPATH**/ ?>