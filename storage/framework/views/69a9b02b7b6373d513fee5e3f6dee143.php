<section>
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-0 col-sm-0 d-none d-sm-none d-md-none d-lg-block">

            <h6 class="text-uppercase text-center fw-bold fs-2 filter-title">
                <?php echo e(__('main.category')); ?>

            </h6>

            <ul class="list-group category-filters">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li data-catfil="<?php echo e($c->code); ?>" class="list-group-item list-group-item-parent">
                        <a
                            href="<?php echo e(url(\App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $c->lang->slug)); ?>">
                            <?php echo e($c->lang->name); ?>

                        </a>
                    </li>

                    <?php $__currentLoopData = $c->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li data-catfil="<?php echo e($sub->code); ?>" class="list-group-item list-group-item-child ">
                            <a class="link-underline link-underline-primary text-truncate"
                                href="<?php echo e(url(\App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $c->lang->slug . '/' . $sub->lang->slug)); ?>">
                                <?php echo e($sub->lang->name); ?>

                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

        <div class="col-lg-8 col-xs-12">
            <section class="partner-listing">
                <?php echo $__env->make('web.listings.partial.partial-list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('web.listings.partial.pagination', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </section>
        </div>
    </div>
</section>

<section class="filters d-flex flex-column flex-shrink-0">
    <div class="d-flex justify-content-end ">
        <?php echo $__env->make('web.common.category-filter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="d-flex justify-content-end">
        <?php echo $__env->make('web.common.event-types-filter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="d-flex justify-content-end">
        <?php echo $__env->make('web.listings.partial.budget-filter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="d-flex justify-content-end">
        <a href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings'))); ?>"
            class="btn btn-labeled btn-danger text-uppercase reset-filters">
            <span class="btn-label">
                <?php echo e(svg('heroicon-o-archive-box-x-mark')); ?>
            </span>
        </a>
    </div>

</section>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/web/listings/partial/listing-content.blade.php ENDPATH**/ ?>