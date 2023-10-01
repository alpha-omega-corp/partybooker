<?php $__env->startSection('page'); ?>
    page="listing"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    <title><?php echo e(strtoupper(__('service.listings'))); ?> | <?php echo e(__('partybooker-cp.www')); ?></title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="p-relative listing">
        <div class="container">
            <h1 class="display-1 fw-bold text-uppercase">
                <?php if(isset($current)): ?>
                    <?php echo e(__('categories.' . $current->code)); ?>

                <?php else: ?>
                    <?php echo e(__('service.listings')); ?>

                <?php endif; ?>
            </h1>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <?php if(!isset($current)): ?>
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/')); ?>">
                                <i class="bi bi-house"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active text-uppercase" aria-current="page">
                            <a href="#"><?php echo e(__('service.listings')); ?></a>
                        </li>
                    <?php endif; ?>
                </ol>
            </nav>

            <?php echo $__env->make('web.listings.partial.listing-content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/web/listings/index.blade.php ENDPATH**/ ?>