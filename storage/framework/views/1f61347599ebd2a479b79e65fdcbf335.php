<?php use App\Models\Category;

$i = 1; ?>
<?php $__currentLoopData = $galleryImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
        $images = count($data['images']);
        $allowed = $data['count'];
        $locale = app()->getLocale();
    ?>

    <div class="row">
        <div class="gallery">

            <!-- Modal -->
            <div class="modal fade" id="editMainImageModel" tabindex="-1"
                 aria-labelledby="editMainImageModelLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 text-uppercase fw-bold" id="editMainImageModelLabel">
                                <?php echo e(__('partner.edit_main_image')); ?>

                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <li class="li">
                                <div class="demo-section k-content">
                                    <input name="main_image" id="main_image_<?php echo e($category); ?>" type="file"
                                           aria-label="files"/>
                                </div>
                            </li>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="gal-img gal-img-all">
                <!-- Modal -->
                <div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-uppercase fw-bold" id="galleryModalLabel">
                                    <?php echo e(__('partner.upload_images')); ?>

                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <li class="li">
                                    <div class="demo-section k-content">
                                        <input name="files_image" id="files_image_<?php echo e($category); ?>" type="file"
                                               aria-label="files"/>
                                    </div>
                                </li>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {

            $("#main_image_<?php echo e($category); ?>").kendoUpload({
                multiple: false,
                async: {
                    saveUrl: "<?php echo e(auth()->user()->type == 'admin' ? '/cp/' : '/'); ?>service-images/upload-main/<?php echo e($user->id_partner . '/' . $category); ?>",
                    removeUrl: "remove",
                    autoUpload: false
                },
                validation: {
                    allowedExtensions: [".jpg", ".png", '.jpeg'],
                }
            });

            $("#files_image_<?php echo e($category); ?>").kendoUpload({
                validation: {
                    allowedExtensions: [".jpg", ".png", '.jpeg'],
                },
                multiple: true,
                async: {
                    saveUrl: "<?php echo e(auth()->user()->type == 'admin' ? '/cp/' : '/'); ?>service-images/upload/<?php echo e($user->id_partner . '/' . $category); ?>",
                    removeUrl: "remove",
                    autoUpload: false
                },
                success: onComplete,
                complete: onSelect
            });

            function onSelect(e) {
            }

            function onComplete(e) {
                window.location = window.location;
            }
        });
    </script>




        <?php $i++ ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/web/partner/profile/category-images.blade.php ENDPATH**/ ?>