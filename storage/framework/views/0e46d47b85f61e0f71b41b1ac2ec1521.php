<?php $__env->startSection('page'); ?>
page="faq"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
<title><?php echo e(__('partybooker-cp.faq')); ?> | <?php echo e(__('partybooker-cp.www')); ?></title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="page">
	<div class="container">
		<div class="row">
			<div class="col-md-3 border-right">
				<div class="messages">
					<div class="success"><?php echo e(__('partybooker-cp.edit_success')); ?></div>
					<div class="error"><?php echo e(__('partybooker-cp.edit_error')); ?></div>
				</div>
				<div class="setting-nav faq-nav">
					<ul>
						<li><a href="#" faq-type="all" class="active"><?php echo e(__('partybooker-cp.all_faqs')); ?></a></li>
						<li><a href="#" faq-type="general"><?php echo e(__('partybooker-cp.general_faqs')); ?></a></li>
						<li><a href="#" faq-type="partner"><?php echo e(__('partybooker-cp.partners_faqs')); ?></a></li>
					</ul>
				</div>
				<a href="#" class="button" id="new-faq-btn"><?php echo e(__('partybooker-cp.add_new_faq')); ?></a>
			</div>
			
			<div class="col-md-9">	
				<h1><?php echo e(__('partybooker-cp.faq')); ?></h1>
				<div class="faqs-list">
					<?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($faq->relation == 0): ?>
							<div class="faq" faq-type="general" faq-id="<?php echo e($faq->id); ?>">
						<?php else: ?> 
							<div class="faq" faq-type="partner" faq-id="<?php echo e($faq->id); ?>">
						<?php endif; ?>
								<div class="edit"></div>
								<div class="del"></div>
							<?php if(app()->getLocale() == 'en'): ?>
								<div class="question q-en" lan="en" faq="<?php echo e($faq->id); ?>">
									<?php echo e($faq->question_en); ?>

								</div>
								<div class="answer a-en" lan="en" ans="<?php echo e($faq->id); ?>">
									<?php echo e($faq->answer_en); ?>

								</div>
								<div class="question q-fr hidden" lan="fr" faq="<?php echo e($faq->id); ?>">
									<?php echo e($faq->question_fr); ?>

								</div>
								<div class="answer a-fr hidden" lan="fr" ans="<?php echo e($faq->id); ?>">
									<?php echo e($faq->answer_fr); ?>

								</div>
							<?php else: ?>
								<div class="question q-en hidden" lan="en" faq="<?php echo e($faq->id); ?>">
									<?php echo e($faq->question_en); ?>

								
								</div>
								<div class="answer a-en hidden" lan="en" ans="<?php echo e($faq->id); ?>">
									<?php echo e($faq->answer_en); ?>

								</div>
								<div class="question q-fr" lan="fr" faq="<?php echo e($faq->id); ?>">
									<?php echo e($faq->question_fr); ?>

								</div>
								<div class="answer a-fr" lan="fr" ans="<?php echo e($faq->id); ?>">
									<?php echo e($faq->answer_fr); ?>

								</div>
							<?php endif; ?>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $__env->make('admin.popups.new-faq', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.popups.edit-faq', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.popups.conf-del-faq', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/admin/faq.blade.php ENDPATH**/ ?>