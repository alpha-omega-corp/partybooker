<div id="del-faq" class="popup">
	<div class="popup_form">
		<form method="POST" action="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/faq/del-faq')); ?>">
			<?php echo e(csrf_field()); ?>

			<div class="close">X</div>
			<h4><?php echo e(__('partybooker-cp.delete_faq')); ?></h4>
			<h5><?php echo e(__('partybooker-cp.really_delete_faq')); ?></h5>			
			<input type="text" name="faq-id" hidden />
			<button type="submit"><?php echo e(__('partybooker-cp.submit')); ?></button> 
		</form>
	</div>
</div><?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/admin/popups/conf-del-faq.blade.php ENDPATH**/ ?>