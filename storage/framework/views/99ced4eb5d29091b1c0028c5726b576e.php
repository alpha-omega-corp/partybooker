<header>
    <div class="container">
        <div class="logo">
            <a href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/')); ?>"><img
                    src="<?php echo e(Vite::image('images/logoPB.png')); ?>" alt=""></a>
        </div>
        <div class="mobile-opener">
            <div class="mobile-btn"></div>
        </div>
        <div class="menu">
            <div class="greeting">
                <ul>
                    <li><?php echo e(__('partybooker-cp.hello')); ?>, <?php echo Auth::user()->name; ?>!</li>
                    <li>
                        <a href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
                            <?php echo e(__('Logout')); ?>

                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    </li>
                    <li class="lang"><a href="<?= route('setlocale', ['lang' => 'en']) ?>"><img
                                src="<?php echo e(Vite::image('images/en.png')); ?>" alt="en" /></a></li>
                    <li class="lang"><a href="<?= route('setlocale', ['lang' => 'fr']) ?>"><img
                                src="<?php echo e(Vite::image('images/fr.png')); ?>" alt="fr" /></a></li>
                </ul>
            </div>
            <div class="header-navigation">
                <ul>
                    <li page="main"><a
                            href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/cp')); ?>"><?php echo e(__('partybooker-cp.main')); ?></a>
                    </li>
                    <li page="messages"><a
                            href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/cp/messages')); ?>"><?php echo e(__('partybooker-cp.messages')); ?></a>
                    </li>
                    <li page="listing"><a
                            href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/cp/listing')); ?>"><?php echo e(__('partybooker-cp.listing')); ?></a>
                    </li>
                    <li page="swisswine"><a
                            href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/cp/swisswin')); ?>"><?php echo e(__('partybooker-cp.swisswine_directories')); ?></a>
                    </li>
                    <li page="blog"><a
                            href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/cp/blog')); ?>"><?php echo e(__('partybooker-cp.blog')); ?></a>
                    </li>
                    <li page="faq"><a
                            href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/cp/faq')); ?>"><?php echo e(__('partybooker-cp.faq')); ?></a>
                    </li>
                    <li page="settings" class="hassub">
                        <a href="#" onclick="return false;"><?php echo e(__('partybooker-cp.settings')); ?></a>
                        <ul class="submenu">
                            <li><a
                                    href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/cp/setting/admin-profile')); ?>"><?php echo e(__('partybooker-cp.profile')); ?></a>
                            </li>
                            <li><a
                                    href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/cp/setting/plans')); ?>"><?php echo e(__('partybooker-cp.plans')); ?></a>
                            </li>
                            <li><a
                                    href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/cp/setting/contacts')); ?>"><?php echo e(__('partybooker-cp.contacts')); ?></a>
                            </li>
                            <li><a
                                    href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/cp/setting/user-terms')); ?>"><?php echo e(__('partybooker-cp.user-terms')); ?></a>
                            </li>
                            <li><a
                                    href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/cp/setting/partner-terms')); ?>"><?php echo e(__('partybooker-cp.provider-terms')); ?></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/admin/header.blade.php ENDPATH**/ ?>