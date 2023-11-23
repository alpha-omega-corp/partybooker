<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'id',
    'title' => null,
    'button',
    'hasButton' => true,
    'color' => null,
    'action',
    'icon' => null,
    'method' => 'POST',
    'hasFiles' => false,
    'size' => null,
    'saveLabel' => 'Save',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'id',
    'title' => null,
    'button',
    'hasButton' => true,
    'color' => null,
    'action',
    'icon' => null,
    'method' => 'POST',
    'hasFiles' => false,
    'size' => null,
    'saveLabel' => 'Save',
]); ?>
<?php foreach (array_filter(([
    'id',
    'title' => null,
    'button',
    'hasButton' => true,
    'color' => null,
    'action',
    'icon' => null,
    'method' => 'POST',
    'hasFiles' => false,
    'size' => null,
    'saveLabel' => 'Save',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>


<a type="button" id="<?php echo e($id . '-button'); ?>" class="<?php echo e(!$hasButton ? 'd-none' : ''); ?>"
   data-bs-toggle="modal"
   data-bs-target="<?php echo e('#'. $id); ?>"
   data-tippy-content="<?php echo e($button); ?>">
    <div class="dashboard-modal-button rounded-circle">
        <?php if($icon): ?>
            <?php echo e(svg($icon)); ?>
        <?php else: ?>
            <?php echo e(svg('heroicon-o-cog-6-tooth')); ?>
        <?php endif; ?>
    </div>
</a>


<div class="modal fade" id="<?php echo e($id); ?>" tabindex="-1" aria-labelledby="<?php echo e($id . 'ModalLabel'); ?>" aria-hidden="true"
     data-bs-backdrop="static" data-bs-keyboard="false">
    <form
        method="<?php echo e($method); ?>"
        action="<?php echo e($action); ?>"
        <?php echo e($hasFiles ? 'enctype=multipart/form-data' : ''); ?>

    >
        <div class="modal-dialog <?php echo e($size ? $size : 'modal-xl'); ?> modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">

                    <h1 class="modal-title fs-5 fw-bold text-uppercase" id="<?php echo e($id . 'ModalLabel'); ?>">
                        <?php if(isset($image)): ?>
                            <div class="d-flex align-items-center justify-content-center">
                                <?php echo e($image); ?>

                            </div>
                        <?php else: ?>
                            <?php echo e($title); ?>

                        <?php endif; ?>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body">
                    <?php echo csrf_field(); ?>
                    <?php echo e($slot); ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="<?php echo e($id . '-close'); ?>" data-bs-dismiss="modal">
                        <?php echo e(__('form.close')); ?>

                    </button>
                    <button type="submit" class="btn btn-primary" id="<?php echo e($id . '-save'); ?>">
                        <?php echo e($saveLabel); ?>

                    </button>
                </div>
            </div>
        </div>
    </form>

</div>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/components/dashboard/modal.blade.php ENDPATH**/ ?>