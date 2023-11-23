<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'name',
    'label',
    'value',
    'checked' => false
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'name',
    'label',
    'value',
    'checked' => false
]); ?>
<?php foreach (array_filter(([
    'name',
    'label',
    'value',
    'checked' => false
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="form-check">
    <input
        name="<?php echo e($name); ?>"
        class="form-check-input"
        type="checkbox"
        id="<?php echo e($value); ?>"
        value="<?php echo e($value); ?>"
        <?php echo e($checked ? 'checked' : ''); ?>>
    <label class="form-check-label border-0 m-0 fw-normal" for="<?php echo e($value); ?>">
        <span class="d-flex">
            <?php echo e($slot); ?>

            <?php echo e($label); ?>


        </span>
    </label>
</div>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/components/dashboard/checkbox.blade.php ENDPATH**/ ?>