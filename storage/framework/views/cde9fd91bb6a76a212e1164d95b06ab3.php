<div class="modal fade" id="partnershipModalToggle" aria-hidden="true" aria-labelledby="partnership" tabindex="-1">
    <form action="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/partner/reg')); ?>"
          method="POST" enctype="multipart/form-data">
        <div class="modal-dialog modal-lg">
            <div class="modal-content text-secondary">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-uppercase fw-bold text-primary" id="partnership">
                        <?php echo e(__('become_partner.title')); ?>

                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid row g-3">
                        <?php echo e(csrf_field()); ?>


                        <h6 class="text-uppercase fw-bold"><?php echo e(__('become_partner.company_info')); ?></h6>

                        <div class="col-md-6">
                            <label for="name" class="form-label"><?php echo e(__('become_partner.company_name')); ?></label>
                            <input type="text" class="form-control" id="name" name="company_name">
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label"><?php echo e(__('become_partner.phone')); ?></label>
                            <input type="text" class="form-control" id="phone" name="company_phone">
                        </div>

                        <div class="col-12 map">
                            <?php echo $__env->make('partial.map_partner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>






                        <label><?php echo e(__('become_partner.fax')); ?></label>
                        <input type="text" name="company_fax">


                            <label for="logo d-block">Logo
                                <div class="button" onclick="document.getElementById('logo').click();">
                                    <?php echo e(__('become_partner.choose')); ?></div>
                                <div class="zone"><?php echo e(__('become_partner.drop')); ?></div>
                                <input type="file" id="logo" name="logo" class="imagesFileUpload">
                            </label>
                            <div id="filename"></div>




                                <label><?php echo e(__('become_partner.slogan')); ?></label>
                                <textarea name="slogan" maxlength="250" rows="3"></textarea>

                                <label><?php echo e(__('become_partner.short_descr')); ?><span>*</span></label>
                                <textarea name="short_descr" maxlength="350" rows="4" required></textarea>

                                <label><?php echo e(__('become_partner.full_descr')); ?><span>*</span></label>
                                <textarea name="full_descr" maxlength="3000" rows="6" required></textarea>

                                <label class="w-100"><?php echo e(__('become_partner.languages')); ?><span>*</span></label>

                                <input type="checkbox" name="languages[]" value="french">
                                <span><?php echo e(__('become_partner.french')); ?></span>

                                <input type="checkbox" name="languages[]" value="english">
                                <span><?php echo e(__('become_partner.english')); ?></span>


                                <input type="checkbox" name="languages[]" value="german">
                                <span><?php echo e(__('become_partner.german')); ?>German</span>


                                <input type="checkbox" name="languages[]" value="italian">
                                <span><?php echo e(__('become_partner.italian')); ?></span>


                                <input type="checkbox" name="languages[]" value="other" class="other">
                                <span><?php echo e(__('become_partner.other')); ?></span>



                            <label><?php echo e(__('become_partner.website')); ?></label>
                            <input type="url" name="company_url" placeholder="https://..."/>

                            <label class="mt-10">Instagram</label>
                            <input type="url" name="instagram" placeholder="https://..."/>

                            <label class="mt-10">Youtube</label>
                            <input type="url" name="youtube" placeholder="https://..."/>

                            <label>Facebook</label>
                            <input type="url" name="facebook" placeholder="https://..."/>

                            <label>Twitter</label>
                            <input type="url" name="twitter" placeholder="https://..."/>

                            <label class="mt-10">LinkedIn</label>
                            <input type="url" name="linkedin" placeholder="https://..."/>


                            <label class="mt-10">Vimeo</label>
                            <input type="url" name="vimeo" placeholder="https://..."/>

                            <input type="checkbox" name="terms" value="1">
                            <span>
                                    <?php echo e(__('become_partner.agree')); ?> <a
                                    href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.partner-terms'))); ?>"><?php echo e(__('become_partner.sp')); ?></a>
                                </span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer hstack">
                    <div>
                        <button type="submit" class="btn btn-primary text-white">
                            <?php echo e(__('become_partner.register')); ?>

                        </button>
                    </div>
                    <div class="ms-auto">
                        <button type="button" class="btn btn-secondary" data-bs-target="#registerModalToggle"
                                data-bs-toggle="modal">
                            <?php echo e(__('main.register')); ?>

                        </button>
                    </div>
                    <div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <?php echo e(__('main.close')); ?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/common/partner-register.blade.php ENDPATH**/ ?>