<?php $__env->startSection('title'); ?>
<title>Not found.. | <?php echo e(__('partybooker-cp.www')); ?></title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="header not-full">
        <?php echo $__env->make('common.header-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="cover abs">
            <img src="/images/home-header-bg.jpg" class="bg abs" alt="Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande.">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1>oops!</h1>
                </div>
            </div>
        </div>
        <?php echo $__env->make('common.social', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>

    <section class="section-404">
        <div class="container">
            <div class="row justify-content-center">
                <img src="/images/404.svg" alt="" class="img-404">
                <div class="col-md-7 col-lg-5 sm-center">
                    <h3>The page You requested couldn’t be found</h3>
                    <a href="#" class="btn-orange">Take me back</a>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/404.blade.php ENDPATH**/ ?>