<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'page',
    'href',
    'icon',
    'tooltip'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'page',
    'href',
    'icon',
    'tooltip'
]); ?>
<?php foreach (array_filter(([
    'page',
    'href',
    'icon',
    'tooltip'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<li class="nav-item" data-tippy-content="<?php echo e($tooltip); ?>">
    <div class="d-flex justify-content-center align-items-center">
        <a page="<?php echo e($page); ?>" href="<?php echo e($href); ?>"
           class="nav-link d-flex align-items-center justify-content-center bg-accent"

           aria-current="<?php echo e($page); ?>">
            <div class="rounded-circle bg-accent p-2 d-flex">


                <?php echo e(svg($icon, 'nav-icon')); ?>
                <span class="nav-sm-text">
                    <?php echo e($tooltip); ?>

                </span>


            </div>
        </a>

    </div>
</li>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/components/navigation/item.blade.php ENDPATH**/ ?>