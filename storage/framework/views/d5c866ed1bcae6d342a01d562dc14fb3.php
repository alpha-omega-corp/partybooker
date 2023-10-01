<?php $__env->startSection('page'); ?>
    page="blog"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    <title>BLOG | <?php echo e(__('partybooker-cp.www')); ?></title>
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
                    <h1>BLOG</h1>
                </div>
            </div>
        </div>
        <?php echo $__env->make('common.social', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>

    <section class="blog-section">
        <div class="container">
            <div class="row">
                <?php $locale = app()->getLocale() == 'en' ? 'main_img_alt' : 'main_img_alt_fr'; ?>
                <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-sm-6 p-md-2 blog">

                        <a href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/blog/' . $post->slug)); ?>"
                            class="blog-img">
                            <img src="<?php echo e(asset('storage/posts/' . $post->main_img)); ?>" alt="<?php echo $post->$locale; ?>">
                        </a>
                        <div class="post-author-date">
                            By <span><?php echo e($post->author ? $post->author : 'Admin'); ?></span>,
                            <?php echo e(date(app()->getLocale() == 'en' ? 'm/d/Y' : 'd/m/Y', strtotime($post->created))); ?>

                        </div>
                        <?php if(app()->getLocale() == 'en'): ?>
                            <h6><?php echo e($post->title_en); ?></h6>
                        <?php else: ?>
                            <h6><?php echo e($post->title_fr); ?></h6>
                        <?php endif; ?>
                        <p>
                            <?php if(app()->getLocale() == 'en'): ?>
                                <?php echo e($post->article_en); ?>

                            <?php else: ?>
                                <?php echo e($post->article_fr); ?>

                            <?php endif; ?>
                        </p>

                        <div class="sharing-wrapper">
                            <a href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/blog/' . $post->slug)); ?>"
                                class="btn-read-more">Read more</a>
                            <div id="share">
                                <a class="facebook"
                                    href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/blog/' . $post->slug)); ?>&quote=<?php echo e(app()->getLocale() == 'en' ? $post->title_en : $post->title_fr); ?>"
                                    title="Share on Facebook" target="_blank"><i class="icon-facebook"></i></a>
                                <a class="twitter"
                                    href="https://twitter.com/intent/tweet?source=<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/blog/' . $post->slug)); ?>&text=<?php echo e(app()->getLocale() == 'en' ? $post->title_en : $post->title_fr); ?>:<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/blog/' . $post->slug)); ?>"
                                    target="_blank" title="Tweet"><i class="icon-twitter"></i></a>
                                <a class="linkedin"
                                    href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/blog/' . $post->slug)); ?>&title=<?php echo e(app()->getLocale() == 'en' ? $post->title_en : $post->title_fr); ?>&summary=&source=<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/blog/' . $post->slug)); ?>"
                                    target="_blank" title="Share on LinkedIn"><i class="icon-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/blog.blade.php ENDPATH**/ ?>