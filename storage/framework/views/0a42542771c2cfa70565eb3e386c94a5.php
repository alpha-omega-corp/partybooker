<section class="service-listing">


    <?php $__currentLoopData = $partners->items(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listing') . '/' . $partner->slug)); ?>"
            class="list-item <?php if(strtolower($partner->currentPlan->name) == 'exclusif'): ?> top <?php endif; ?>">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <?php if($partner->main_img): ?>
                            <img src="<?php echo e(asset('storage/images/thumbnails/' . $partner->main_img)); ?>"
                                alt="<?php echo e($partner->main_img); ?>" class="cover">
                        <?php else: ?>
                            <img src="//via.placeholder.com/700x1000/fc0?text=6" class="cover rounded" alt="...">
                        <?php endif; ?>

                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase fw-bold">
                                <?php if(app()->getLocale() == 'en'): ?>
                                    <?php echo e($partner->en_company_name); ?>

                                <?php else: ?>
                                    <?php echo e($partner->fr_company_name); ?>

                                <?php endif; ?>
                            </h5>
                            <div class="card-text description">
                                <?php if(app()->getLocale() == 'en'): ?>
                                    <?php echo $partner->en_short_descr; ?>

                                <?php else: ?>
                                    <?php echo $partner->fr_short_descr; ?>

                                <?php endif; ?>
                            </div>

                            <div class="d-flex location-box">
                                <div class="location">
                                    <img src="<?php echo e(asset('images/map.svg')); ?>" />
                                </div>

                                <p class="w-full">
                                    <?php echo e(__('cantons.' . strtolower($partner->location_code) . '_loc')); ?>,
                                    <?php echo e($partner->address); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/web/listings/partial/partial-list.blade.php ENDPATH**/ ?>