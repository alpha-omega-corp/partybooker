<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'thumbnail',
    'partner'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'thumbnail',
    'partner'
]); ?>
<?php foreach (array_filter(([
    'thumbnail',
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

<?php
    $locale = app()->getLocale();
?>

<div class="main-image" x-data="{target: 'editMainImageModel-button'}"
     @click="document.getElementById(target).click()">
    <?php if($thumbnail): ?>
        <img src="<?php echo e(asset('/storage/images/thumbnails/'.$thumbnail['image_name'])); ?>"
             data-imageId="<?php echo e($thumbnail['id']); ?>"
             alt="<?php echo e($thumbnail['image_alt_'.$locale]); ?>"/>
    <?php endif; ?>

    <div class="preview-settings">
        <a type="button" class="preview-setting" id="editMainImageModel-button"
           data-bs-toggle="modal"
           data-bs-target="#editMainImageModel">
            <?php echo e(svg('heroicon-o-cog-6-tooth')); ?>
        </a>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editMainImageModel" tabindex="-1"
     aria-labelledby="editMainImageModelLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="<?php echo e(Auth::user()->type == 'admin'
                    ? route('thumbnail.update.admin')
                    : route('thumbnail.update')); ?>" enctype=multipart/form-data>

            <?php echo csrf_field(); ?>

            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-uppercase fw-bold" id="editMainImageModelLabel">
                        <?php echo e(__('partner.edit_main_image')); ?>

                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <label for="thumbnail">
                        <div class="d-flex">
                            <div id="logo-btn"
                                 class="button btn btn-primary d-none">
                                <?php echo e(__('partner.choose_logo')); ?>

                            </div>
                        </div>
                        <div class="zone"></div>

                        <input type="file" id="thumbnail" name="thumbnail" class="imagesFileUpload" hidden>
                    </label>


                    <input type="hidden" name="partnerId" value="<?php echo e($partner->id_partner); ?>"/>

                    <button type="button" class="btn btn-accent w-100" x-data="{target: 'thumbnail'}"
                            @click="document.getElementById(target).click()">
                        <?php echo e(__('form.thumbnail')); ?>

                    </button>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <?php echo e(__('partner.save')); ?>

                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/components/dashboard/profile/thumbnail.blade.php ENDPATH**/ ?>