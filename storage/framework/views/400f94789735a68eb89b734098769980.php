<?php if(count($top)): ?>
    <h2 class="display-3 fw-bold text-center shadow-lg">
        <?php echo e(__('main.top_services')); ?>

    </h2>

    <div class="container">
        <div x-ref="glide" class="glide">
            <div class="glide__">

                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <!-- Carousel Item -->
                        <?php $__currentLoopData = $top; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="glide__slide">
                                <a class="glide__partner_link"
                                   href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listing') . '/' . $service->slug)); ?>">

                                    <div class="d-flex align-items-center">
                                        <div class="card">

                                            <div class="card-img">
                                                <img src="<?php echo e(Vite::image('logoPB.png')); ?>" class="card-img-logo"
                                                     alt="Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande.">

                                                <?php if($service->main_img): ?>
                                                    <img src="<?php echo e('/storage/images/thumbnails/' . $service->main_img); ?>"
                                                         alt="<?php echo e($service->main_img); ?>" class="card-img-top">
                                                <?php else: ?>
                                                    <img src="//via.placeholder.com/700x1000/fc0?text=6" width="500"
                                                         height="500" class="card-img-top" alt="...">
                                                <?php endif; ?>

                                            </div>

                                            <div class="card-body">
                                                <h5 class="card-title text-uppercase text-truncate fw-bold">
                                                    <?php if(app()->getLocale() == 'en'): ?>
                                                        <?php echo e($service->en_company_name); ?>

                                                    <?php else: ?>
                                                        <?php echo e($service->fr_company_name); ?>

                                                    <?php endif; ?>
                                                </h5>

                                                <div class="card-text">

                                                    <?php if(app()->getLocale() == 'en'): ?>
                                                        <?php echo $service->en_short_descr; ?>

                                                    <?php else: ?>
                                                        <?php echo $service->fr_short_descr; ?>

                                                    <?php endif; ?>

                                                </div>
                                            </div>

                                            <div class="card-footer">
                                                <blockquote>
                                                    A quote in a blockquote element
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>

                <!-- Controls -->
                <div class="glide__arrows pointer-events-none" data-glide-el="controls">
                    <!-- Previous Button -->
                    <button class="glide__arrow glide__arrow--left pointer-events-auto disabled:opacity-50 btn btn-primary"
                            data-glide-dir="<">
                    <span aria-hidden="true">
                        <img class="previous-arrow" src="<?php echo e(Vite::image('right-arrow.svg')); ?>" />
                    </span>
                        <span class="sr-only">PREVIOUS</span>
                    </button>

                    <!-- Next Button -->
                    <button class="glide__arrow glide__arrow--right pointer-events-auto disabled:opacity-50 btn btn-primary"
                            data-glide-dir=">">
                        <span class="sr-only">NEXT</span>
                        <span aria-hidden="true">
                        <img class="next-arrow" src="<?php echo e(Vite::image('right-arrow.svg')); ?>" />
                    </span>
                    </button>
                </div>
            </div>
            <!-- Bullets -->
            <div class="d-none d-md-block">
                <div class="d-flex justify-content-center">
                    <div class="glide__bullets" data-glide-el="controls[nav]">
                        <?php $__currentLoopData = $top; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src="<?php echo e(Vite::image('star.svg')); ?>"
                                 class="glide__bullet text-uppercase transition-colors col-1 mx-auto"
                                 data-glide-dir="<?php echo e('=' . $key); ?>" data-tippy-content="<?php echo e($service->fr_company_name); ?>"
                                 alt="<?php echo e($service->fr_company_name); ?>" />
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/common/top-services.blade.php ENDPATH**/ ?>