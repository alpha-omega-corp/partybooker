<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'user',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'user',
]); ?>
<?php foreach (array_filter(([
    'user',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div>
    <div class="user-info-item" data-tippy-content="<?php echo e(__('partner.name')); ?>">
        <?php echo e(svg('heroicon-o-identification')); ?>
        <?php echo e($user->name); ?>

    </div>

    <div class="user-info-item" data-tippy-content="<?php echo e(__('partner.mobile')); ?>">
        <?php echo e(svg('heroicon-m-device-phone-mobile')); ?>
        <?php if($user->phone): ?>
            <?php echo e($user->phone); ?>

        <?php else: ?>
            <?php echo e(svg('heroicon-o-no-symbol')); ?>
        <?php endif; ?>
    </div>
    <hr>

    <div class="user-info-item" data-tippy-content="<?php echo e(__('partner.email')); ?>">
        <?php echo e(svg('heroicon-o-envelope')); ?>
        <?php echo e($user->email); ?>

    </div>


    <?php echo $__env->make('web.partner.popup.edit-contacts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/components/dashboard/profile/contact-details.blade.php ENDPATH**/ ?>