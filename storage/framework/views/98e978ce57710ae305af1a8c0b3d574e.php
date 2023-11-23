<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'user'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'user'
]); ?>
<?php foreach (array_filter(([
    'user'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if(Auth::user()->type == 'admin'): ?>
    <h1 class="text-uppercase text-start p-3 fw-bold display-6">
        <?php echo e($user->partnerInfo->fr_company_name); ?>

    </h1>
<?php else: ?>
    <h1 class="text-uppercase text-start p-3 fw-bold display-4">
        <?php echo e(__('partner.dashboard')); ?>

    </h1>
<?php endif; ?>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/components/dashboard/title.blade.php ENDPATH**/ ?>