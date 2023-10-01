<div class="btn-group dropstart btn-category-filter">
    <button type="button" class="btn btn-labeled btn-primary text-uppercase" data-bs-toggle="dropdown"
        data-bs-display="static" aria-expanded="false">
        <span class="btn-label">
            <?php echo e(svg('heroicon-o-archive-box')); ?>
        </span>
        <span class="btn-text"> <?php echo e(__('main.category')); ?></span>
    </button>

    <ul class="dropdown-menu">

        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="dropdown-item">
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
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/web/common/category-filter.blade.php ENDPATH**/ ?>