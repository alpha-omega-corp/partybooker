<?php $__env->startSection('page'); ?>
page="terms"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
<title><?php echo e(__('main.partner_terms')); ?> | <?php echo e(__('partybooker-cp.www')); ?></title>
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
                    <h1><?php echo e(__('main.partner_terms')); ?></h1>
                </div>
            </div>
        </div>
        <?php echo $__env->make('common.social', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>

    <section class="terms-section">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
					<?php if(app()->getLocale() == 'en'): ?>
						<?php echo $en_terms; ?>

					<?php else: ?> 
						<?php echo $fr_terms; ?>

					<?php endif; ?>
				</div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/service-terms.blade.php ENDPATH**/ ?>