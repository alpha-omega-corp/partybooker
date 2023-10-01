<?php $__env->startSection('page'); ?>
    page="faqs"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    <title><?php echo e(__('main.faq_page_title')); ?> | <?php echo e(__('partybooker-cp.www')); ?></title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="header not-full">
        <?php echo $__env->make('common.header-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="cover abs">
            <img src="/images/home-header-bg.jpg" class="bg abs"
                alt="Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande.">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1><?php echo e(__('main.faqs_page')); ?></h1>
                </div>
            </div>
        </div>
        <?php echo $__env->make('common.social', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>

    <section class="faq-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 offset-md-1">
                    <h3 class="text-center"><?php echo e(__('main.faq_page_title')); ?></h3>
                    <div class="accordion" id="accordionExample">
                        <?php $i = 1; ?>
                        <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($faq->relation == 0): ?>
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                            data-target="#collapse<?php echo $i; ?>" aria-expanded="true"
                                            aria-controls="collapse<?php echo $i; ?>">
                                            <?php if(app()->getLocale() == 'en'): ?>
                                                <?php echo e($faq->question_en); ?>

                                            <?php else: ?>
                                                <?php echo e($faq->question_fr); ?>

                                            <?php endif; ?>
                                        </button>
                                    </div>

                                    <div id="collapse<?php echo $i; ?>" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <?php if(app()->getLocale() == 'en'): ?>
                                                <?php echo e($faq->answer_en); ?>

                                            <?php else: ?>
                                                <?php echo e($faq->answer_fr); ?>

                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/faq.blade.php ENDPATH**/ ?>