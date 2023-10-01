<div id="edit-faq" class="popup">
    <div class="popup_form">
        <form method="POST" action="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/cp/faq/edit-faq')); ?>">
            <?php echo e(csrf_field()); ?>

            <div class="close">X</div>
            <h4><?php echo e(__('partybooker-cp.edit_faq')); ?></h4>
            <input type="text" name="faq-id" hidden />
            <label><?php echo e(__('partybooker-cp.select_type_faq')); ?></label>
            <select name="type" required>
                <option value="0"><?php echo e(__('partybooker-cp.general_faq')); ?></option>
                <option value="1"><?php echo e(__('partybooker-cp.partner_faq')); ?></option>
            </select>
            <div class="row">
                <div class="col-md-6">
                    <label><img src="<?php echo e(Vite::image('images/en.png')); ?>"
                            alt="en" /><?php echo e(__('partybooker-cp.question_faq')); ?></label>
                    <textarea name="question_en" rows="3" required></textarea>

                    <label><img src="<?php echo e(Vite::image('images/en.png')); ?>"
                            alt="en" /><?php echo e(__('partybooker-cp.answer_faq')); ?></label>
                    <textarea name="answer_en" rows="5" required></textarea>
                </div>
                <div class="col-md-6">
                    <label><img src="<?php echo e(Vite::image('images/fr.png')); ?>"
                            alt="fr" /><?php echo e(__('partybooker-cp.question_faq')); ?></label>
                    <textarea name="question_fr" rows="3" required></textarea>

                    <label><img src="<?php echo e(Vite::image('images/fr.png')); ?>"
                            alt="fr" /><?php echo e(__('partybooker-cp.answer_faq')); ?></label>
                    <textarea name="answer_fr" rows="5" required></textarea>
                </div>
            </div>
            <button type="submit"><?php echo e(__('partybooker-cp.submit')); ?></button>
        </form>
    </div>
</div>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/admin/popups/edit-faq.blade.php ENDPATH**/ ?>