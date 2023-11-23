<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'type' => 'text',
    'name',
    'label' => null,
    'id' => '',
    'icon',
    'required' => true,
    'max' => null
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'type' => 'text',
    'name',
    'label' => null,
    'id' => '',
    'icon',
    'required' => true,
    'max' => null
]); ?>
<?php foreach (array_filter(([
    'type' => 'text',
    'name',
    'label' => null,
    'id' => '',
    'icon',
    'required' => true,
    'max' => null
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div>
    <?php if($label): ?>
        <label for="<?php echo e($id); ?>" class="form-label">
            <?php echo e($label); ?>

            <?php if($required): ?>
                <span class="text-danger">*</span>
            <?php endif; ?>
        </label>
    <?php endif; ?>

    <div class="input-group">

    <span class="input-group-text" id="<?php echo e($id); ?>">
        <?php echo e(svg($icon)); ?>
    </span>

        <textarea
            type="<?php echo e($type); ?>"
            name="<?php echo e($name); ?>"
            class="form-control"
            aria-label="<?php echo e($label); ?>"
            aria-describedby="<?php echo e($id); ?>"
        <?php echo e($required ? 'required' : ''); ?>

            <?php echo e($max ? 'max-length="' . $max . '"' : ''); ?>><?php echo e($slot); ?>

        </textarea>
    </div>

</div>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/components/dashboard/textarea.blade.php ENDPATH**/ ?>