<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'images',
    'partner'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'images',
    'partner'
]); ?>
<?php foreach (array_filter(([
    'images',
    'partner'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="no-thumbnail-container">
    <?php if(!$partner->main_img): ?>

        <div class="no-thumbnail" x-data="{modal: 'editMainImageModel'}"
             @click="openModalPrevent(modal)">
            <div class="d-flex justify-content-center align-items-center  w-100">
                <?php echo e(svg('heroicon-o-photo', 'no-thumbnail-icon')); ?>
            </div>

            <div class="preview-settings">
                <a type="button" class="preview-setting" id="editMainImageModel-button"
                   data-bs-toggle="modal"
                   data-bs-target="#editMainImageModel">
                    <?php echo e(svg('heroicon-o-cog-6-tooth')); ?>
                </a>
            </div>
        </div>
    <?php endif; ?>
</div>


<?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
        $locale = app()->getLocale();
    ?>

    <?php $__currentLoopData = $data['images']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($img['is_main']): ?>
            <div class="main-image" x-data="{target: 'editMainImageModel-button'}"
                 @click="document.getElementById(target).click()">
                <img src="<?php echo e(asset('storage/images/thumbnails/'.$img['image_name'])); ?>"
                     data-imageId="<?php echo e($img['id']); ?>"
                     alt="<?php echo e($img['image_alt_'.$locale]); ?>"/>

                <div class="preview-settings">
                    <a type="button" class="preview-setting" id="editMainImageModel-button"
                       data-bs-toggle="modal"
                       data-bs-target="#editMainImageModel">
                        <?php echo e(svg('heroicon-o-cog-6-tooth')); ?>
                    </a>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/components/dashboard/profile/thumbnail.blade.php ENDPATH**/ ?>