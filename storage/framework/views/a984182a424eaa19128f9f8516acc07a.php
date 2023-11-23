<section class="contact-section mt-4">
    <div class="d-flex justify-content-center">
        <div class="contact-card">
            <div class="d-flex">
                <div class="d-flex align-items-center justify-content-center">
                    <img src="<?php echo e(Vite::image('contacts.svg')); ?>" alt="" width="120">
                </div>

                <div class="w-100">
                    <form method="POST"
                          action="<?php echo e(route('partner-contact')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="input-group mb-3">
                                                    <span class="input-group-text" id="contact-message">
                                                        <?php echo e(svg('heroicon-o-chat-bubble-bottom-center-text')); ?>
                                                    </span>

                            <textarea name="message"
                                      class="form-control"
                                      placeholder="<?php echo e(__('main.contacts_message')); ?>"
                                      aria-label="<?php echo e(__('main.contacts_message')); ?>"
                                      aria-describedby="contact-message"></textarea>
                        </div>

                        <button class="btn btn-accent w-100">
                            <?php echo e(svg('heroicon-o-arrow-right')); ?>
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <hr>
    <div class="d-flex justify-content-center">
        <div>
            <ul>
                <li>
                    <a href="mailto:contact@partybooker.ch" class="email">
                        <?php echo e($settings[0]->email); ?>

                    </a>
                </li>

                <li>
                    <a href="tel:<?php echo e($settings[0]->phone); ?>" class="phone">
                        <?php echo e($settings[0]->phone); ?>

                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/components/dashboard/profile/contact.blade.php ENDPATH**/ ?>