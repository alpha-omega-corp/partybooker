<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'type' => 'text',
    'name',
    'placeholder' => '',
    'value' => '',
    'id' => '',
    'icon' => null,
    'image' => null,
    'required' => true,
    'max' => null,
    'label' => null,
    'disabled' => false
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'type' => 'text',
    'name',
    'placeholder' => '',
    'value' => '',
    'id' => '',
    'icon' => null,
    'image' => null,
    'required' => true,
    'max' => null,
    'label' => null,
    'disabled' => false
]); ?>
<?php foreach (array_filter(([
    'type' => 'text',
    'name',
    'placeholder' => '',
    'value' => '',
    'id' => '',
    'icon' => null,
    'image' => null,
    'required' => true,
    'max' => null,
    'label' => null,
    'disabled' => false
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="dashboard-input">
    <?php if($label): ?>
        <label for="<?php echo e($id); ?>" class="form-label text-dark text-uppercase pt-2"><?php echo e($label); ?></label>
    <?php endif; ?>

    <div class="input-group">
    <span class="input-group-text" id="<?php echo e($id); ?>">
        <?php if($icon): ?>
            <?php echo e(svg($icon)); ?>
        <?php elseif($image): ?>
            <img src="<?php echo e(Vite::image($image . '.svg')); ?>" class="icon" alt="<?php echo e($image); ?>"/>
        <?php endif; ?>
    </span>

        <input
            type="<?php echo e($type); ?>"
            name="<?php echo e($name); ?>"
            value="<?php echo e($value); ?>"
            class="form-control"
            <?php echo e($disabled ? 'disabled' : ''); ?>

            id="<?php echo e($id); ?>"
            placeholder="<?php echo e($placeholder); ?>"
            aria-label="<?php echo e($placeholder); ?>"
            aria-describedby="<?php echo e($id); ?>"
            <?php echo e($required ? 'required' : ''); ?>

            <?php echo e($max ? 'max-length="' . $max . '"' : ''); ?>>
    </div>
</div>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/components/dashboard/input.blade.php ENDPATH**/ ?>