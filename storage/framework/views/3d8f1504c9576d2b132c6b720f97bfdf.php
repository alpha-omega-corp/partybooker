<?php $__env->startSection('page'); ?>
    page="home"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    <?php if(app()->getLocale() == 'fr'): ?>
        <title>Partybooker - Les meilleures idéés d'événements</title>
        <meta name="description"
            content="Retrouvez notre sélection des meilleures idées d'événement à faire en Suisse romande. Pour les familles, les sorties entre amis ou entreprise et même les mariages. ">
        <meta name="keywords" content="événements, idées d'événements">
    <?php else: ?>
        <title>Partybooker - Best Event Ideas</title>
        <meta name="description"
            content="Find our selection of the best event ideas to do in French-speaking Switzerland. For families, outings with friends or business and even weddings.">
        <meta name="keywords" content="events, event ideas">
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('header'); ?>
    <script>
        function open(i) {
            document.getElementById(i).click();
        }
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="wrapper">
        <div class="parallax__group_welcome hero-container hero">
            <div class="parallax__layer blob"></div>

            <div class="parallax__layer hero-text">
                <section>
                    <div class="welcome">
                        <div class="container my-auto">
                            <h1 class="text-white display-1 fw-bold">
                                <?php echo e(__('main.title_home_h1')); ?>

                            </h1>

                            <div class="accordion" id="welcomeAccordion">
                                <div class="card-group">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12">

                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="card-text">
                                                        <div class="accordion-item">
                                                            <div class="d-flex">
                                                                <button class="accordion-button text-uppercase"
                                                                    id="controlOne" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseOne" aria-expanded="false"
                                                                    aria-controls="collapseOne">

                                                                    <img src="<?php echo e(Vite::image('ape.svg')); ?>" class="d-block"
                                                                        alt="...">
                                                                </button>
                                                                <h2 class="accordion-header text-uppercase fw-bold"
                                                                    x-data="{ c: 'controlOne' }" @click="open(c)"
                                                                    id="headingOne">
                                                                    <?php echo e(__('main.info-block-title-1')); ?>

                                                                </h2>
                                                            </div>

                                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                                aria-labelledby="headingOne"
                                                                data-bs-parent="#welcomeAccordion">
                                                                <div class="accordion-body body-one">
                                                                    <p>
                                                                        <span><?php echo e(__('main.info-block-1')); ?></span>

                                                                        <br>
                                                                        <hr>
                                                                        <span><?php echo e(__('main.info-block-1-1')); ?></span>
                                                                    <p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-4 col-xs-12">

                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="card-text">
                                                        <div class="accordion-item">


                                                            <div class="d-flex">

                                                                <button class="accordion-button text-uppercase"
                                                                    type="button" data-bs-toggle="collapse" id="controlTwo"
                                                                    data-bs-target="#collapseTwo" aria-expanded="false"
                                                                    aria-controls="collapseTwo">
                                                                    <img src="<?php echo e(Vite::image('party-popper.svg')); ?>"
                                                                        class="d-block" alt="...">

                                                                </button>
                                                                <h2 class="accordion-header text-uppercase fw-bold"
                                                                    x-data="{ c: 'controlTwo' }" @click="open(c)"
                                                                    id="headingTwo">
                                                                    <?php echo e(__('main.info-block-title-2')); ?>

                                                                </h2>
                                                            </div>



                                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                                aria-labelledby="headingTwo"
                                                                data-bs-parent="#welcomeAccordion">
                                                                <div class="accordion-body">
                                                                    <p>
                                                                        <span><?php echo e(__('main.info-block-2')); ?></span>
                                                                        <b><?php echo e(__('main.info-block-2-1')); ?></b>
                                                                        <span><?php echo e(__('main.info-block-2-2')); ?></span>

                                                                        <br>
                                                                        <hr>
                                                                        <span><?php echo e(__('main.info-block-2-3')); ?></span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-4 col-xs-12">

                                            <div class="card card-focus">
                                                <div class="card-body">
                                                    <div class="card-text">
                                                        <div class="accordion-item">

                                                            <div class="d-flex">

                                                                <button
                                                                    class="accordion-button accordion-button-register collapsed text-uppercase"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    id="controlThree" data-bs-target="#collapseThree"
                                                                    aria-expanded="false" aria-controls="collapseThree">
                                                                    <img src="<?php echo e(Vite::image('heart.svg')); ?>"
                                                                        class="d-block" alt="...">
                                                                </button>

                                                                <h2 class="accordion-header text-uppercase fw-bold "
                                                                    x-data="{ c: 'controlThree' }" @click="open(c)"
                                                                    id="headingThree">
                                                                    <?php echo e(__('main.info-block-title-3')); ?>

                                                                </h2>
                                                            </div>

                                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                                aria-labelledby="headingThree"
                                                                data-bs-parent="#welcomeAccordion">
                                                                <div class="accordion-body">
                                                                    <p>
                                                                        <span><?php echo e(__('main.info-block-at')); ?></span>
                                                                        <b><?php echo e(__('main.info-block-pb')); ?></b>
                                                                        <span><?php echo e(__('main.info-block-3')); ?></span>

                                                                        <br>
                                                                        <hr>
                                                                        <i><?php echo e(__('main.info-block-3-1')); ?></i>
                                                                    </p>

                                                                    <a
                                                                        href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.partner'))); ?>">
                                                                        <button type="button"
                                                                            class="btn btn-primary register">
                                                                            <?php echo e(svg('heroicon-m-arrow-long-right')); ?>
                                                                        </button>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>


        <div class="parallax__group_services hero-container hero">
            <div class="parallax__layer peaks"></div>

            <div class="parallax__layer hero-text-two shadow-lg">
                <section class="top-services">
                    <?php echo $__env->make('common.top-services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </section>
            </div>
        </div>

        <section class="categories">

            <div class="items">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <?php $__currentLoopData = $menuCats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $listKey = 'list-category-' . $key;
                                $listId = $listKey . '-list';

                            ?>

                            <div class="scene scene--card ">
                                <div class="card shadow-lg">
                                    <div class="card__face card__face--front bg-shiny">

                                        <h3 class="text-uppercase display-6 fw-bolder text-white">
                                            <?php echo e($category->lang->name); ?>

                                        </h3>


                                    </div>
                                    <div class="card__face card__face--back">


                                        <div class="sub-categories">
                                            <ul>
                                                <?php $__currentLoopData = $category->subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li>
                                                        <a class="fs-6"
                                                            href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $category->lang->slug . '/' . $subCategory->lang->slug)); ?>">
                                                            <?php echo e($subCategory->lang->name); ?>

                                                        </a>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>


        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/home.blade.php ENDPATH**/ ?>