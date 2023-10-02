<?php $__env->startSection('page'); ?>
    page="listing"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="partner" data-id="<?php echo e($partner->id_partner); ?>">

        <div class="container">
            <?php echo $__env->make('web.partial.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="d-flex">
                <h1 class="display-1 fw-bold text-uppercase">
                    <?php if(app()->getLocale() == 'en'): ?>
                        <?php echo e($partner->en_company_name); ?>

                    <?php else: ?>
                        <?php echo e($partner->fr_company_name); ?>

                    <?php endif; ?>
                </h1>

                <div class="partner-logo">
                    <?php if($partner->logo): ?>
                        <img src="<?php echo e('/storage/logos/' . $partner->logo); ?>" alt="Rejoindre notre sélection pour augmenter votre chiffre d'affaire" class="logo"/>
                    <?php else: ?>
                        <img src="<?php echo e(Vite::image('logoPB.png')); ?>" alt="logo" class="logo"/>
                    <?php endif; ?>
                </div>
            </div>



            <hr>

            <?php if($partner->is_commission): ?>
                <div class="details">
                    <a href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/contacts')); ?>"
                       class="btn btn-orange"><?php echo e(__('service.contact')); ?></a>
                </div>
            <?php else: ?>
                <div>

                    <?php if (isset($component)) { $__componentOriginalc40698cef5a0b8275a89b3b456328d36 = $component; } ?>
<?php $component = App\View\Components\PartnerInfo::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partner-info'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PartnerInfo::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'heroicon-o-phone','tooltip' => 'Company Phone','content' => ''.e($partner->company_phone).'','type' => 'tel']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc40698cef5a0b8275a89b3b456328d36)): ?>
<?php $component = $__componentOriginalc40698cef5a0b8275a89b3b456328d36; ?>
<?php unset($__componentOriginalc40698cef5a0b8275a89b3b456328d36); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginalc40698cef5a0b8275a89b3b456328d36 = $component; } ?>
<?php $component = App\View\Components\PartnerInfo::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partner-info'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PartnerInfo::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'heroicon-o-envelope','tooltip' => 'Company Email','content' => ''.e($partner->user->email).'','type' => 'email']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc40698cef5a0b8275a89b3b456328d36)): ?>
<?php $component = $__componentOriginalc40698cef5a0b8275a89b3b456328d36; ?>
<?php unset($__componentOriginalc40698cef5a0b8275a89b3b456328d36); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginalc40698cef5a0b8275a89b3b456328d36 = $component; } ?>
<?php $component = App\View\Components\PartnerInfo::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partner-info'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PartnerInfo::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'heroicon-o-globe-alt','tooltip' => 'Company Website','content' => ''.e($partner->fr_company_name).'','type' => 'web']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc40698cef5a0b8275a89b3b456328d36)): ?>
<?php $component = $__componentOriginalc40698cef5a0b8275a89b3b456328d36; ?>
<?php unset($__componentOriginalc40698cef5a0b8275a89b3b456328d36); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginalc40698cef5a0b8275a89b3b456328d36 = $component; } ?>
<?php $component = App\View\Components\PartnerInfo::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partner-info'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PartnerInfo::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'heroicon-o-map-pin','tooltip' => 'Company Location','content' => ''.e($partner->address).'','type' => 'loc']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc40698cef5a0b8275a89b3b456328d36)): ?>
<?php $component = $__componentOriginalc40698cef5a0b8275a89b3b456328d36; ?>
<?php unset($__componentOriginalc40698cef5a0b8275a89b3b456328d36); ?>
<?php endif; ?>

                    <?php $networks = ['Facebook', 'Twitter', 'Instagram', 'Linkedin', 'Vimeo', 'Youtube']; ?>
                    <?php $__currentLoopData = $networks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $network): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $lc = strtolower($network); ?>
                        <?php if($partner->$lc): ?>
                            <li class="<?php echo e($lc); ?>">
                                <a class="social-network"
                                   style="text-decoration: underline; cursor: pointer; color:#007bc2; display: block"
                                   href="<?php echo e($partner->$lc); ?>" target="_blank">
                                    <?php echo e($network); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php endif; ?>

                </div>


        <ul class="stars service-page">
            <?php for($i = 1; $i <= 5; $i++): ?>
                <?php if($i <= $partner->average_rate): ?>
                    <?php echo $__env->make('common.star-selected', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php else: ?>
                    <?php echo $__env->make('common.star', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            <?php endfor; ?>
        </ul>

        <?php if(Auth::user() && Auth::user()->type != 'partner'): ?>
            <span class="rating" data-service="<?php echo e($partner->id_partner); ?>" data-user="<?php echo e(Auth::user()->email); ?>">
                    Leave a Rating
                </span>
        <?php else: ?>
            <span class="rating-login"><?php echo e(__('service.leave_rating')); ?></span>
        <?php endif; ?>

        <a href="#request-form" class="btn btn-md btn-success js-scroll-to float-right"><?php echo e(__('service.book_now')); ?></a>


        <div class="title">

        </div>


        <div class="tab-nav">
            <ul>
                <li class="active" tab="description"><?php echo e(__('service.description')); ?></li>
                <?php if(!in_array(strtolower($partner->currentPlan->name), ['basic', 'commission'])): ?>
                    <li tab="general"><?php echo e(__('service.general_info')); ?></li>
                    <li tab="schedule"><?php echo e(__('service.schedule')); ?></li>
                    <li tab="rates"><?php echo e(__('service.rates')); ?></li>
                    <?php if($partner->vimeo || $partner->youtube): ?>
                        <li tab="video"><?php echo e(__('service.video')); ?></li>
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
        </div>
        <div class="tabs">
            <div class="tab" id="description">
                    <span class="slogan">
                        <?php if(app()->getLocale() == 'en'): ?>
                            “ <?php echo e($partner->en_slogan); ?> ”
                        <?php else: ?>
                            “ <?php echo e($partner->fr_slogan); ?> ”
                        <?php endif; ?>
                    </span>
                <p>
                    <?php if(app()->getLocale() == 'en'): ?>
                        <?php echo $partner->en_full_descr; ?> ”
                    <?php else: ?>
                        <?php echo $partner->fr_full_descr; ?> ”
                    <?php endif; ?>
                </p>

                <p>
                    <?php
                        $languages = [];
                        if ($partner->language) {
                            foreach (json_decode($partner->language) ?? [] as $lang) {
                                if ($lang == 'other') {
                                    continue;
                                }
                                $languages[] = __('partybooker-cp.' . trim($lang));
                            }
                        }
                    ?>
                    <span><?php echo e(__('become_partner.languages')); ?>:</span>
                    <?php echo e(implode(', ', $languages)); ?><?php echo e($partner->other_lang ? ', ' . $partner->other_lang : ''); ?>

                </p>
            </div>

            <div class="tab" id="general">
                <?php $__currentLoopData = $partner->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('service-tabs.' . $advert->view_name . '.general', [
                        'details' => $advert->service,
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="tab" id="schedule">
                <?php $__currentLoopData = $partner->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('service-tabs.' . $advert->view_name . '.schedule', [
                        'details' => $advert->service,
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <div class="tab" id="rates">
                <?php $__currentLoopData = $partner->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('service-tabs.' . $advert->view_name . '.rates', [
                        'details' => $advert->service,
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="tab" id="video">
                <?php if($partner->youtube): ?>
                        <?php
                        $youtube = preg_replace('/watch\?v=/', 'embed/', $partner->youtube);
                        $youtube = str_replace('https://youtu.be/', 'https://www.youtube.com/embed/', $youtube);
                        ?>
                    <iframe width="420" height="315" src="<?php echo e($youtube); ?>" frameborder="0"
                            allowfullscreen></iframe>
                <?php endif; ?>
                <?php if($partner->vimeo): ?>
                    <iframe width="420" height="315"
                            src="<?php echo e(str_replace('https://vimeo.com/', 'https://player.vimeo.com/video/', $partner->vimeo)); ?>"
                            frameborder="0" allow="fullscreen"></iframe>
                <?php endif; ?>
            </div>
        </div>
        </div>


        <div class="row justify-content-center mt-30">
            <div class="col-md-3">
                <div class="contact-block">


                </div>
            </div>

            <div class="col-md-9">


                <?php if(strtolower($partner->currentPlan->name) == 'basic'): ?>
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong><?php echo e($message); ?></strong>
                        </div>
                    <?php endif; ?>

                    <!-- Button trigger modal -->
                    <div class="d-flex">
                        <button type="button" data-type="claim" class="button claim-request btn-orange mr-2"
                                data-toggle="modal" data-target="#claim">
                            <?php echo e(__('service.claim')); ?>

                        </button>

                        <button type="button" data-type="delete" class="button claim-request btn-orange"
                                data-toggle="modal" data-target="#claim"><?php echo e(__('service.delete')); ?></button>
                    </div>

                    <!-- Modal -->
                    <div class="standart-modal modal fade" id="claim" tabindex="-1" role="dialog"
                         aria-labelledby="claimLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">


                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <form id="claim-request-form" method="post"
                                          action="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/contacts/claim-requests')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <h3><?php echo e(__('service.claim_account')); ?></h3>
                                        <p><?php echo e(__('service.claim_account_expl')); ?></p>
                                        <input type="hidden" id="request-type" name="request_type">
                                        <input type="hidden" name="partner_id" value="<?php echo e($partner->id); ?>">
                                        <input type="email" name="email" placeholder="<?php echo e(__('service.email')); ?>">
                                        <input type="text" name="phone" placeholder="<?php echo e(__('service.phone')); ?>">
                                        <button type="submit" id="fs"
                                                class="button btn-orange"><?php echo e(__('service.submit_request')); ?></button>
                                        <div style="color: black;" class="messages-list">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row mt-30">
            <div class="col-12 gallery">
                <?php $locale = app()->getLocale(); ?>
                <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="gal-img">
                        <img src="<?php echo e(asset('storage/images/thumbnails/' . $img->image_name)); ?>"
                             alt="<?php echo e($img['image_alt_' . $locale]); ?>" img-id="<?php echo e($img->id); ?>"/>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <section id="service" class="location location-form-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-7 ml-auto pl-md-5" id="request-form">
                    <?php if(strtolower($partner->currentPlan->name) == 'commission'): ?>
                        <form method="post"
                              action="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/request/partner')); ?>">
                            <h3><?php echo e(__('service.contact_us')); ?></h3>
                            <p><?php echo e(__('service.contact_us_description')); ?></p>
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="partner_id" value="<?php echo e($partner->id); ?>">
                            <input type="text" placeholder="<?php echo e(__('service.name')); ?>*" require name="name"
                                   required>
                            <input type="email" placeholder="<?php echo e(__('service.email')); ?>*" require name="email"
                                   required>
                            <input type="text" placeholder="<?php echo e(__('service.phone')); ?>*" require name="phone"
                                   required>
                            <input type="text" placeholder="<?php echo e(__('service.type_of_event')); ?>*" require
                                   name="event" required>
                            <input placeholder="<?php echo e(__('service.date_of_event')); ?>*" require name="event_date"
                                   type="text" onfocus="(this.type='date')" onblur="(this.type='text')">
                            <input placeholder="<?php echo e(__('service.alternative_date')); ?>?" name="alternative_date"
                                   type="text" onfocus="(this.type='date')" onblur="(this.type='text')">
                            <input type="text" placeholder="<?php echo e(__('service.amount_of_participants')); ?>*" require
                                   name="participant" required>
                            <button type="submit" class="btn-submit btn-transparent"><?php echo e(__('service.send')); ?></button>
                        </form>
                    <?php elseif(\in_array('cat4_1', $subCategories) || \in_array('cat4_2', $subCategories) || \in_array('cat2_5', $subCategories)): ?>
                        <form class="form-contact" method="post"
                              action="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/request/caterer')); ?>">
                            <h3><?php echo e(__('service.contact_us')); ?></h3>
                            <p><?php echo e(__('service.contact_us_description')); ?></p>
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="partner_id" value="<?php echo e($partner->id); ?>">
                            <input type="text" placeholder="<?php echo e(__('service.name')); ?>*" require name="name"
                                   required>
                            <input type="email" placeholder="<?php echo e(__('service.email')); ?>*" require name="email"
                                   required>
                            <input type="text" placeholder="<?php echo e(__('service.phone')); ?>*" require name="phone"
                                   required>
                            <input type="text" placeholder="<?php echo e(__('service.type_of_event')); ?>*" require
                                   name="event" required>
                            <input placeholder="<?php echo e(__('service.date_of_event')); ?>*" name="event_date" require
                                   type="text" onfocus="(this.type='date')" onblur="(this.type='text')" required>
                            <input placeholder="<?php echo e(__('service.alternative_date')); ?>?" name="alternative_date"
                                   type="text" onfocus="(this.type='date')" onblur="(this.type='text')">
                            <input type="text" placeholder="<?php echo e(__('service.amount_of_participants')); ?>*" require
                                   name="participant" required>
                            <input type="text" placeholder="<?php echo e(__('service.guests_profile')); ?>" name="guests">
                            <input type="text" placeholder="<?php echo e(__('service.language')); ?>*" require name="language"
                                   required>
                            <input type="text" placeholder="<?php echo e(__('service.geographic_zone')); ?>" name="zone">
                            <input type="text" placeholder="<?php echo e(__('service.approximate_budget')); ?>" name="budget">
                            <span class="description"><?php echo e(__('service.want_book_catering')); ?>*</span>
                            <div class="radio-block">
                                <input class="radio" type="radio" name="caterer" value="yes" id="caterer-yes"
                                       required> <label for="caterer-yes"><?php echo e(__('service.yes')); ?></label>
                                <input class="radio" type="radio" name="caterer" value="no"
                                       id="caterer-no"><label for="caterer-no"><?php echo e(__('service.no')); ?></label>
                                <input class="radio" type="radio" name="caterer" value="maybe" id="caterer-maybe">
                                <label for="caterer-maybe"><?php echo e(__('service.maybe')); ?></label>
                            </div>
                            <button type="submit" class="btn-submit btn-transparent"><?php echo e(__('service.send')); ?></button>
                        </form>
                    <?php else: ?>
                        <form class="form-contact" method="post"
                              action="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/request/general')); ?>">
                            <h3><?php echo e(__('service.contact_us')); ?></h3>
                            <p><?php echo e(__('service.contact_us_description')); ?></p>
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="partner_id" value="<?php echo e($partner->id); ?>">
                            <input type="text" placeholder="<?php echo e(__('service.name')); ?>*" name="name" required>
                            <input type="email" placeholder="<?php echo e(__('service.email')); ?>*" name="email" required>
                            <input type="text" placeholder="<?php echo e(__('service.phone')); ?>*" name="phone" required>
                            <input placeholder="<?php echo e(__('service.date_of_event')); ?>" type="text" name="event_date"
                                   onfocus="(this.type='date')" onblur="(this.type='text')">
                            <input placeholder="<?php echo e(__('service.alternative_date')); ?>?" type="text"
                                   name="alternative_date" onfocus="(this.type='date')" onblur="(this.type='text')">
                            <input type="text" placeholder="<?php echo e(__('service.amount_of_participants')); ?>*" require
                                   name="participant" required>
                            <textarea placeholder="<?php echo e(__('service.message')); ?>" name="message"></textarea>
                            <button type="submit" class="btn-submit btn-transparent"><?php echo e(__('service.send')); ?></button>
                        </form>
                    <?php endif; ?>

                    <div class="form-contact" style="display: none">
                        <br>
                        <h2><?php echo e(__('service.thank_you')); ?>!</h2>
                        <p>
                            <?php echo e(__('service.contact_soon')); ?>

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="map" class="abs" data-lat="<?php echo e($partner->lat); ?>" data-lon="<?php echo e($partner->lon); ?>"
             data-code="<?php echo e(__('cantons.' . strtolower($partner->location_code) . '_loc')); ?>"
             data-address="<?php echo e($partner->address); ?>"
             data-icon="<?php echo e(isset($partner->categories->first()->primaryCategory) ? $partner->categories->first()->primaryCategory->code : 'cat1'); ?>"
             <?php if(app()->getLocale() == 'en'): ?> data-name="<?php echo e($partner->en_company_name); ?>"
             <?php else: ?>
                 data-name="<?php echo e($partner->fr_company_name); ?>" <?php endif; ?>
             data-cat="<?php echo e(isset($partner->categories->first()->primaryCategory) ? $partner->categories->first()->primaryCategory->lang->name : ''); ?>"
             data-image="<?php echo e(asset('storage/images/' . $partner->main_img)); ?>">
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php if(strtolower($partner->currentPlan->name) == 'basic'): ?>
    <?php $__env->startPush('footer'); ?>
        <script type="text/javascript">
            $('button.claim-request').click(function (e) {
                var $type = $(this).attr('data-type');
                $("form#claim-request-form input#request-type").val($type);
            });

            $('form#claim-request-form').on('submit', function (e) {
                e.preventDefault();

                var form = $(this);
                var url = form.attr('action');
                $('#fs').attr('disabled', true);
                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(),
                    success: function (data) {
                        $('.messages-list').text(data.message);
                        window.location = window.location;
                    },
                    error: function (r) {
                        var data = JSON.parse(r.responseText);
                        $('.messages-list').text(data.message);
                        $('#fs').attr('disabled', false)
                    }
                });

                return false;
            });
        </script>
    <?php $__env->stopPush(); ?>
<?php endif; ?>

<?php $__env->startPush('footer'); ?>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDpzw9SH97G5L9Af-dR5TeixK8OEPqocY&callback=initMap"
            type="text/javascript"></script>

    <script>
        $('form.form-contact').on('submit', function (e) {
            e.preventDefault();
            var form = $(this);
            $('button.btn-submit').attr('disabled', 'disabled');
            $.ajax({
                method: form.attr('method'),
                url: form.attr('action'),
                data: form.serialize(),
                success: function (data) {
                    $('form.form-contact').remove();
                    $('div.form-contact').show();
                },
                error: function (r) {
                    $('button.btn-submit').attr('disabled', false);
                }
            });
        });
        var OFFSET_TOP = 40;

        function scrollTo(target) {
            var targetOffset = typeof target === 'number' ? target : $(target).offset().top + parseInt($(target).css(
                'padding-top'));


            if (targetOffset !== undefined) {
                window.scroll({
                    top: targetOffset - $('.header').outerHeight() + 200,
                    left: 0,
                    behavior: 'smooth'
                });
            }
        }

        $('.js-scroll-to').click(function (e) {
            e.preventDefault();
            var target = $(this).data('target') || $(this).attr('href') || 0;
            if (target) {
                scrollTo(target);
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('main-listings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/service.blade.php ENDPATH**/ ?>