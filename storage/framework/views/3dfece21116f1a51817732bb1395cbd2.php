<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'href',
    'icon',
    'text'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'href',
    'icon',
    'text'
]); ?>
<?php foreach (array_filter(([
    'href',
    'icon',
    'text'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<li>
    <a href="<?php echo e($href); ?>">
        <?php echo e(svg($icon, 'nav-icon')); ?>
        <span><?php echo e($text); ?></span>
    </a>
</li>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/components/navigation/item.blade.php ENDPATH**/ ?>