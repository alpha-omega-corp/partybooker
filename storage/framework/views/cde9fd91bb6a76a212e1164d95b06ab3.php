<div class="modal fade" id="partnershipModalToggle" aria-hidden="true" aria-labelledby="partnership" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <form action="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/partner/reg')); ?>"
              method="POST" enctype="multipart/form-data" class="partner-register">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title text-uppercase fw-bold" id="partnership">
                        <?php echo e(__('become_partner.company_info')); ?>

                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid row g-3">
                        <?php echo e(csrf_field()); ?>


                        <div class="col-md-12">
                            <label for="name" class="form-label"><?php echo e(__('become_partner.company_name')); ?></label>
                            <input type="text" class="form-control" id="name" name="company_name">
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label"><?php echo e(__('become_partner.phone')); ?></label>
                            <input type="text" class="form-control" id="phone" name="company_phone">
                        </div>

                        <div class="col-md-6">
                            <label for="fax" class="form-label"><?php echo e(__('become_partner.fax')); ?></label>
                            <input type="text" class="form-control" id="fax" name="company_phone">
                        </div>

                        <div class="col-md-12">
                            <label for="pac-input" class="form-label"><?php echo e(__('become_partner.address')); ?></label>
                            <input type="text" class="form-control" id="pac-input" name="map">

                            <br>
                            <div id="map" style="width: 100%; height: 400px;"></div>
                        </div>

                        <label class="d-flex bg-primary logoUpload justify-content-center align-items-center" for="customFile" x-data="{ files: null }">
                            <input type="file" hidden class="sr-only" id="customFile" name="logo" x-on:change="files = Object.values($event.target.files)">
                            <span class="text-uppercase p-2 fw-bold " x-text="files ? files.map(file => file.name).join(', ') : 'Company logo'"></span>
                        </label>

                        <hr>


                        <div class="input-group">
                            <span class="input-group-text align-items-start text-uppercase bg-premium text-white fw-bold">
                                <?php echo e(__('become_partner.slogan')); ?>

                            </span>
                            <textarea class="form-control" aria-label="<?php echo e(__('become_partner.slogan')); ?>" name="slogan" maxlength="250">

                            </textarea>

                        </div>
                        <br>

                        <div class="input-group">
                            <span class="input-group-text align-items-start text-uppercase bg-primary text-white fw-bold">
                              <?php echo e(__('become_partner.short_descr')); ?>

                            </span>
                            <textarea class="form-control" aria-label="<?php echo e(__('become_partner.short_descr')); ?>" name="short_descr" maxlength="350" rows="4" required>

                            </textarea>
                        </div>

                        <div class="input-group">
                            <span class="input-group-text align-items-start text-uppercase bg-primary text-white fw-bold">
                              <?php echo e(__('become_partner.full_descr')); ?>

                            </span>
                            <textarea class="form-control" aria-label="<?php echo e(__('become_partner.full_descr')); ?>" name="full_descr" maxlength="3000" rows="6" required>

                            </textarea>
                        </div>


                        <h4 class="text-uppercase fw-bold mt-5"><?php echo e(__('become_partner.languages')); ?></h4>

                        <div class="d-flex">
                            <div class="form-check form-switch m-2">
                                <input class="form-check-input" type="checkbox" role="switch" id="inputFrench" name="languages[]" value="french">
                                <label class="form-check-label" for="inputFrench">
                                    <?php echo e(__('become_partner.french')); ?>

                                </label>
                            </div>

                            <div class="form-check form-switch m-2">
                                <input class="form-check-input" type="checkbox" role="switch" id="inputEnglish" name="languages[]" value="english">
                                <label class="form-check-label" for="inputEnglish">
                                    <?php echo e(__('become_partner.english')); ?>

                                </label>
                            </div>

                            <div class="form-check form-switch m-2">
                                <input class="form-check-input" type="checkbox" role="switch" id="inputGerman" name="languages[]" value="german">
                                <label class="form-check-label" for="inputGerman">
                                    <?php echo e(__('become_partner.german') . ' German'); ?>

                                </label>
                            </div>

                            <div class="form-check form-switch m-2">
                                <input class="form-check-input" type="checkbox" role="switch" id="inputItalian" name="languages[]" value="italian">
                                <label class="form-check-label" for="inputItalian">
                                    <?php echo e(__('become_partner.italian')); ?>

                                </label>
                            </div>
                        </div>


                        <h4 class="text-uppercase fw-bold mt-5"><?php echo e(__('become_partner.website') .'s'); ?></h4>

                        <div class="input-group mb-3">
                            <label class="input-group-text text-uppercase text-info bg-secondary fw-bolder" for="company_url">Company</label>
                            <input type="url" name="company_url" id="company_url" placeholder="https://..." class="form-control"/>
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text text-uppercase text-info bg-white fw-bolder" for="instagram">
                                <img src="<?php echo e(Vite::image('instagram.svg')); ?>" alt="Instagram" width="20" height="20">
                            </label>
                            <input type="url" name="instagram" id="instagram" placeholder="https://..." class="form-control"/>
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text text-uppercase text-info bg-white fw-bolder" for="youtube">
                                <img src="<?php echo e(Vite::image('youtube.svg')); ?>" alt="Youtube" width="20" height="20">
                            </label>
                            <input type="url" name="youtube" id="youtube" placeholder="https://..." class="form-control"/>
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text text-uppercase text-info bg-white fw-bolder" for="facebook">
                                <img src="<?php echo e(Vite::image('facebook.svg')); ?>" alt="Facebook" width="20" height="20">
                            </label>
                            <input type="url" name="facebook" id="facebook" placeholder="https://..." class="form-control"/>
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text text-uppercase text-info bg-white fw-bolder" for="twitter">
                                <img src="<?php echo e(Vite::image('twitter.svg')); ?>" alt="Twitter" width="20" height="20">
                            </label>
                            <input type="url" name="twitter" id="twitter" placeholder="https://..." class="form-control"/>
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text text-uppercase text-info bg-white fw-bolder" for="linkedin">
                                <img src="<?php echo e(Vite::image('linkedin.svg')); ?>" alt="Linkedin" width="20" height="20">
                            </label>
                            <input type="url" name="linkedin" id="linkedin" placeholder="https://..." class="form-control"/>
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text text-uppercase text-info bg-white fw-bolder" for="vimeo">
                                <img src="<?php echo e(Vite::image('vimeo.svg')); ?>" alt="Vimeo" width="20" height="20">
                            </label>
                            <input type="url" name="vimeo" id="vimeo" placeholder="https://..." class="form-control"/>
                        </div>



                        <div class="form-check">
                            <div class="p-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label text-uppercase fs-6" for="flexCheckDefault">
                                        <span><?php echo e(__('become_partner.agree')); ?> <?php echo e(__('become_partner.sp')); ?></span>

                                    </label>


                            </div>
                        </div>

                        <a href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.partner-terms'))); ?>">
                            Voir
                        </a>






                    </div>
                </div>

                <div class="modal-footer hstack">



                    <div>
                        <button type="submit" class="btn btn-primary text-white text-uppercase">
                            <?php echo e(__('become_partner.register')); ?>

                        </button>
                    </div>

                    <div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <?php echo e(__('main.close')); ?>

                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/common/partner-register.blade.php ENDPATH**/ ?>