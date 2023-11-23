<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'network',
    'value'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'network',
    'value'
]); ?>
<?php foreach (array_filter(([
    'network',
    'value'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>


<div class="d-flex flex-column network-pill">
    <img src="<?php echo e(Vite::image($network . '.svg')); ?>" alt="<?php echo e(ucfirst($network)); ?>">
    <div class="d-flex align-items-center justify-content-center mt-2">
        <?php if($value): ?>
            <?php echo e(svg('heroicon-o-check-circle', 'text-primary')); ?>
        <?php else: ?>
            <?php echo e(svg('heroicon-o-no-symbol', 'text-danger')); ?>
        <?php endif; ?>
    </div>
</div>

<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/components/dashboard/social-network.blade.php ENDPATH**/ ?>