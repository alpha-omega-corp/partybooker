<footer class="footer">
    <div class="container">
        <?php echo $__env->yieldPushContent('footer'); ?>
        <div class="footer-box  shadow-lg">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-center">
                        <h5 class="text-uppercase"><?php echo e(__('main.sitemap')); ?></h5>
                        <ul>
                            <li>
                                <a
                                    href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/')); ?>"><?php echo e(__('main.home_page')); ?></a>
                            </li>
                            <li><a
                                    href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.aboutus'))); ?>"><?php echo e(__('main.aboutus_page')); ?></a>
                            </li>
                            <li><a
                                    href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.partner'))); ?>"><?php echo e(__('main.become_partner_page')); ?></a>
                            </li>
                            <li><a
                                    href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/faq')); ?>"><?php echo e(__('main.faqs_page')); ?></a>
                            </li>
                            <li><a
                                    href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/user-terms')); ?>"><?php echo e(__('main.user_terms')); ?></a>
                            </li>
                            <li><a
                                    href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/contacts')); ?>"><?php echo e(__('main.contact_page')); ?></a>
                            </li>
                            <li><a
                                    href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.sitemap'))); ?>"><?php echo e(__('main.sitemap')); ?></a>
                            </li>
                            <li class="ft-social-links">
                                <?php if($settings[0]->facebook): ?>
                                    <a href="<?php echo e($settings[0]->facebook); ?>" target="_blank"><i class="icon-facebook"></i></a>
                                <?php endif; ?>
                                <?php if($settings[0]->linkedin): ?>
                                    <a href="<?php echo e($settings[0]->linkedin); ?>" target="_blank"><i class="icon-linkedin"></i></a>
                                <?php endif; ?>
                                <?php if($settings[0]->instagram): ?>
                                    <a href="<?php echo e($settings[0]->instagram); ?>" target="_blank"><i
                                            class="icon-instagram "></i></a>
                                <?php endif; ?>
                                <?php if($settings[0]->googleplus): ?>
                                    <a href="<?php echo e($settings[0]->googleplus); ?>" target="_blank"><i
                                            class="icon-googleplus "></i></a>
                                <?php endif; ?>
                                <?php if($settings[0]->twitter): ?>
                                    <a href="<?php echo e($settings[0]->twitter); ?>" target="_blank"><i class="icon-twitter "></i></a>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="text-center">
                        <h5 class="text-uppercase"><?php echo e(__('categories.cat')); ?></h5>
                        <?php $__currentLoopData = array_chunk($footerCategories->toArray(), 3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <ul>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a
                                            href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $item['lang']['slug'])); ?>"><?php echo e($item['lang']['name']); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
            <section class="subscribe shadow-lg">
                <div class="container">
                    <h6 class="fs-4 fw-bold text-white"><?php echo e(__('main.subscribe_offers')); ?></h6>
                    <p><?php echo e(__('main.subscribe_text')); ?></p>

                    <div class="subscribe-form">
                        <div class="d-flex m-2">
                            <div class="input-group">
                                <span class="input-group-text" id="offer">
                                  <?php echo e(svg('heroicon-o-envelope')); ?>
                                </span>
                                <input
                                    type="email"
                                    name="email"
                                    required
                                    class="form-control"
                                    placeholder="<?php echo e(__('main.subscribe_email')); ?>"
                                    aria-label="<?php echo e(__('main.subscribe_email')); ?>"
                                    aria-describedby="offer">
                            </div>

                            <button type="submit" class="btn btn-primary"><?php echo e(__('main.subscribe')); ?></button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="alphomega">
                <div class="alphomega-card">

                    <h6 class="text-center text-uppercase fw-bold">

                        <?php echo e(__('main.made-by')); ?>


                    </h6>
                    <div class="d-flex justify-content-center">

                        <a href="https://www.alphomega.org" target="_blank">
                            <img src="<?php echo e(Vite::image('alphomega_logo.png')); ?>" alt="alphomega">
                        </a>
                    </div>
                </div>

            </section>
        </div>
    </div>
</footer>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/common/footer.blade.php ENDPATH**/ ?>