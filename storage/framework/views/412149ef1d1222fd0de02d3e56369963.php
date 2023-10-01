<?php $__env->startSection('page'); ?>
    page="partner"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    <title><?php echo e(__('become_partner.title')); ?> | <?php echo e(__('partybooker-cp.www')); ?></title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="become-partner">
        <section class="benefits">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="d-flex flex-column text-center p-4 h-100 btn-container">
                            <img src="<?php echo e(Vite::image('benefits1.jpg')); ?>" class="become-partner-img" alt="Devenir partenaire pour rendre votre présence web plus impactante. Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande." width="100">



                                    <?php if(Auth::user() == null): ?>
                                        <a class="rainbow p-4 text-uppercase fw-bold fs-3" data-bs-toggle="modal"
                                           href="#loginModalToggle" role="button">
                                            <?php echo e(__('become_partner.title')); ?>

                                        </a>
                                    <?php else: ?>
                                        <a class="rainbow p-4 text-uppercase fw-bold" data-bs-toggle="modal"
                                           href="#partnershipModalToggle" role="button">
                                            <?php echo e(__('become_partner.title')); ?>

                                        </a>
                                    <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h1 class="display-4 fw-bold text-uppercase"><?php echo e(__('become_partner.benefits_title')); ?></h1>
                        <ul>
                            <li>
                                <div class="d-flex">
                                    <img src="<?php echo e(Vite::image('shuttle.svg')); ?>" alt="advantages" width="24"
                                        class="mt-4">
                                    <h3><?php echo e(__('become_partner.b1')); ?></h3>
                                </div>
                                <p><?php echo e(__('become_partner.b1_text')); ?></p>
                            <li>

                                <div class="d-flex">
                                    <img src="<?php echo e(Vite::image('shuttle.svg')); ?>" alt="advantages" width="24"
                                         class="mt-4">
                                <h3> <?php echo e(__('become_partner.b2')); ?></h3>
                                </div>
                                <p><?php echo e(__('become_partner.b2_text')); ?></p>

                            </li>

                            <li>
                                <div class="d-flex">
                                    <img src="<?php echo e(Vite::image('shuttle.svg')); ?>" alt="advantages" width="24"
                                         class="mt-4">
                                <h3> <?php echo e(__('become_partner.b3')); ?></h3>
                                </div>
                                <p><?php echo e(__('become_partner.b3_text')); ?></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="packages">
            <div class="container">
                <div class="heading">
                    <h2 class="display-4 fw-bold text-uppercase">
                        <?php echo e(__('become_partner.yearly_packages')); ?>

                    </h2>
                    <p><?php echo e(__('become_partner.yp_text')); ?></p>
                </div>

                <div class="row justify-content-center">
                    <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(in_array(strtolower($plan->name), ['basic', 'commission', 'vip'])): ?>
                            <?php continue; ?>;
                        <?php endif; ?>

                        <div class="col-md-3">
                            <div class="package position-relative">
                                <div class="text-uppercase text-center <?php echo e('bg-' . $plan->name); ?>">
                                    <h3 class="fw-bold p-2"><?php echo e(__('plan.' . strtolower($plan->name))); ?></h3>
                                </div>
                                <ul>
                                    <li>
                                        <img src="<?php echo e(Vite::image('options.svg')); ?>" alt="category" />
                                        <?php $__currentLoopData = $plan->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <span> <?php echo e($option['name']); ?> </span>
                                            <?php if(!$loop->last): ?>
                                                <span>or</span>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </li>

                                    <li>
                                        <img src="<?php echo e(Vite::image('picture.svg')); ?>" alt="picture" />

                                        <span><?php echo e($plan->photos_num); ?>

                                            <?php echo e(__('become_partner.photos')); ?></span>
                                    </li>
                                    <?php if($plan->video == 1): ?>
                                        <li>
                                            <img src="<?php echo e(Vite::image('video-player.svg')); ?>" alt="video" />
                                            <span><?php echo e(__('become_partner.video')); ?></span>
                                        </li>
                                    <?php endif; ?>
                                    <?php if($plan->direct_request == 1): ?>
                                        <li>
                                            <img src="<?php echo e(Vite::image('network.svg')); ?>" alt="network" />

                                            <span><?php echo e(__('become_partner.direct_request')); ?></span>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                                <div class="pricing">
                                    <span class="amount">CHF <?php echo e($plan->price); ?></span>
                                    <span><?php echo e(__('become_partner.per_year')); ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-md-3">
                        <div class="package position-relative">
                            <div class="text-uppercase text-center bg-primary">
                                <h3 class="fw-bold p-2">VIP</h3>
                            </div>
                            <ul>
                                <li><?php echo e(__('partner.vip_info1')); ?></li>
                                <li><?php echo e(__('partner.vip_info2')); ?></li>
                            </ul>

                            <div class="pricing">
                                <span class="amount">CHF 95</span>
                                <span><?php echo e(__('plan.per_month')); ?></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="contactus">
            <div class="container">
                <p class="display-6 fw-bold"><?php echo e(__('become_partner.any_questions')); ?></p>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary d-flex w-100 text-uppercase" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <?php echo e(__('become_partner.contact')); ?>

                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">

                        <form class="login" action="" method="POST">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-primary fw-bold" id="exampleModalLabel">
                                        PHONE NUMBER
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <div class="close"></div>
                                    <div class="form">
                                        <input type="tel" name="phone" placeholder="+00 000"
                                               class="form-control <?php echo e($errors->has('phone') ? ' is-invalid' : ''); ?>" id="phone"
                                               value="<?php echo e(old('phone')); ?>" required autocomplete="phone" autofocus>
                                        <label for="phone">
                                            Leave your phone

                                        </label>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="terms">
                    <span><?php echo e(__('become_partner.provider_service')); ?></span>
                    <a href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.partner-terms'))); ?>"
                       target="_blank"><?php echo e(__('become_partner.view')); ?></a>
                </div>
            </div>


        </section>

        <section class="terms">
            <div class="container">
                <div class="row justify-content-center">

                </div>
            </div>
        </section>

        <section class="usp">
            <div class="container">
                <div class="container text-center">
                    <div class="row">
                    <?php for($i = 0; $i < 7; $i++): ?>

                            <div class="col-lg-6">
                                <h4 class="text-uppercase text-start"><?php echo e(__('usp.title-' . $i + 1)); ?></h4>
                                <p><?php echo e(__('usp.text-' . $i + 1)); ?></p>
                            </div>

                    <?php endfor; ?>
                    </div>
                </div>
            </div>
        </section>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/partner.blade.php ENDPATH**/ ?>