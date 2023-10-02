<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'content',
    'tooltip',
    'icon',
    'type'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'content',
    'tooltip',
    'icon',
    'type'
]); ?>
<?php foreach (array_filter(([
    'content',
    'tooltip',
    'icon',
    'type'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>



<div x-data="{show: false}" class="position-relative partner-info-tippy" data-tippy-content="<?php echo e($tooltip); ?>">

    <div class="details-info rounded-circle">
        <div x-show="!show" @click="show = true" class="icon">
            <?php echo e(svg($icon)); ?>
        </div>

        <div class="position-relative">
            <div x-show="show" class="bg-secondary element">
                <div @click="show = false" class="element-back bg-primary d-flex justify-content-center align-items-center" style="height: 40px" >
                    <?php echo e(svg('heroicon-o-arrow-up-left')); ?>
                </div>
            </div>


        </div>
    </div>

    <div x-show="show" class="position-absolute top-50">
        <a class="text-center" href="<?php echo e($type . ':' . $content); ?>">
            <?php echo e($content); ?>

        </a>
    </div>

</div>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/components/partner-info.blade.php ENDPATH**/ ?>