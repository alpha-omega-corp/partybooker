<nav class="navbar fixed-top bg-white">
    <div class="d-flex">
        <div class="container-fluid p-2">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <?php echo e(svg('heroicon-s-bars-3-bottom-left')); ?>
            </button>

            <?php if(Auth::user() == null): ?>
                <div class="auth">
                    <a class="btn btn-accent" data-bs-toggle="modal" href="#loginModalToggle" role="button">
                        <?php echo e(__('main.login')); ?>

                    </a>
                </div>
            <?php endif; ?>

            <div class="socials">
                <?php echo $__env->make('common.social', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <div class="d-flex flex-column">
                <div class="language">
                    <a href="<?= route('setlocale', ['lang' => 'fr']) ?>" lan="fr">
                        <img src="<?php echo e(Vite::image('switzerland.svg')); ?>" alt="Partybooker French"/>
                    </a>
                    <a href="<?= route('setlocale', ['lang' => 'en']) ?>" lan="en">
                        <img src="<?php echo e(Vite::image('united-kingdom.svg')); ?>" alt="Partybooker English"/>
                    </a>
                </div>
            </div>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" data-bs-scroll="true"
                 data-bs-backdrop="false"
                 aria-labelledby="offcanvasNavbarLabel">

                <div class="offcanvas-body">
                    <div class="navigation h-full">
                        <div class="nav-logo-container mt-5">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>

                            <div class="position-absolute close-container">
                                <button type="button" class="btn-close btn-close-white nav-sm-close"
                                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                        </div>
                        <hr>

                        <ul class="nav nav-flush flex-column text-center">

                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navigation.item','data' => ['page' => 'home','href' => url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/'),'icon' => 'heroicon-o-home','tooltip' => __('main.home_page')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navigation.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['page' => 'home','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/')),'icon' => 'heroicon-o-home','tooltip' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('main.home_page'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navigation.item','data' => ['page' => 'listing','href' => url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings')),'icon' => 'heroicon-o-queue-list','tooltip' => __('main.listing_page')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navigation.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['page' => 'listing','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings'))),'icon' => 'heroicon-o-queue-list','tooltip' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('main.listing_page'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navigation.item','data' => ['page' => 'partner','href' => url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.partner')),'icon' => 'heroicon-o-identification','tooltip' => __('main.become_partner_page')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navigation.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['page' => 'partner','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.partner'))),'icon' => 'heroicon-o-identification','tooltip' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('main.become_partner_page'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                            <hr>

                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navigation.item','data' => ['page' => 'aboutus','href' => url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.aboutus')),'icon' => 'heroicon-o-information-circle','tooltip' => __('main.aboutus_page')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navigation.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['page' => 'aboutus','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.aboutus'))),'icon' => 'heroicon-o-information-circle','tooltip' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('main.aboutus_page'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>


                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navigation.item','data' => ['page' => 'blog','href' => url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/blog'),'icon' => 'heroicon-o-book-open','tooltip' => __('main.blog_page')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navigation.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['page' => 'blog','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/blog')),'icon' => 'heroicon-o-book-open','tooltip' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('main.blog_page'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navigation.item','data' => ['page' => 'faqs','href' => url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/faq'),'icon' => 'heroicon-o-question-mark-circle','tooltip' => __('main.faqs_page')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navigation.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['page' => 'faqs','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/faq')),'icon' => 'heroicon-o-question-mark-circle','tooltip' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('main.faqs_page'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                            <div class="dropdown dropup border-top bg-primary dropdown-user">
                                <?php if(Auth::user()): ?>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                            <p><?php echo e(Auth::user()->name); ?></p>
                                        </button>
                                        <ul class="dropdown-menu">

                                            <?php if(Auth::user()->type === 'admin'): ?>
                                                <li>
                                                    <a class="dropdown-item"
                                                       href="<?php echo e(route('admin')); ?>">
                                                        Administration
                                                    </a>
                                                </li>
                                            <?php else: ?>
                                                <?php if(Auth::user()->id_partner): ?>
                                                    <li>
                                                        <a class="dropdown-item"
                                                           href="<?php echo e(route('profile-advert', Auth::user()->id_partner)); ?>">
                                                            Dashboard
                                                        </a>
                                                    </li>
                                                <?php else: ?>
                                                    <li>
                                                        <a class="dropdown-item"
                                                           href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.partner'))); ?>">
                                                            <?php echo e(__('main.become_partner_page')); ?>

                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    Sign out
                                                </a>
                                            </li>
                                        </ul>

                                        <a href="<?php echo e(route('logout')); ?>"
                                           onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                              style="display: none;">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<section>
    <?php echo $__env->make('auth.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('auth.register', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/common/header-nav.blade.php ENDPATH**/ ?>