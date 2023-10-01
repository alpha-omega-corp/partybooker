<?php $__env->startSection('page'); ?>
page="main"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
<title><?php echo e(__('partybooker-cp.main')); ?> | <?php echo e(__('partybooker-cp.www')); ?></title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php echo e(__('partybooker-cp.main')); ?></h1>
			</div>
		</div>
		<div class="row qab">
			<div class="col-md-4">
				<a href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/add-new-partner')); ?>" class="button"><?php echo e(__('partybooker-cp.add_new_partner')); ?></a>
			</div>
			<div class="col-md-4">
				<a href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/blog/new-post')); ?>" class="button"><?php echo e(__('partybooker-cp.add_new_article')); ?></a>
			</div>
			<div class="col-md-4">
				<a href="#" class="button" id="new-faq-btn"><?php echo e(__('partybooker-cp.add_new_faq')); ?></a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 messages-list">
				<h3><?php echo e(__('partybooker-cp.last_messages')); ?></h3>
				<div class="form-messages">
					<?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($message->contact_form == 'subscribe'): ?>
							<?php if($message->status == 0): ?>
								<div class="message unread" form-type="<?php echo e($message->contact_form); ?>" 
								data-id="<?php echo e($message->id); ?>"
								data-date="<?php echo e($message->message_sent); ?>" 
								data-type="<?php echo e(__('partybooker-cp.subscribe_form')); ?>"
								data-email="<?php echo e($message->email); ?>">
							<?php else: ?> 
								<div class="message" form-type="<?php echo e($message->contact_form); ?>" 
								data-id="<?php echo e($message->id); ?>"
								data-date="<?php echo e($message->message_sent); ?>" 
								data-type="<?php echo e(__('partybooker-cp.subscribe_form')); ?>"
								data-email="<?php echo e($message->email); ?>">
							<?php endif; ?>
								<ul>
									<li><?php echo e($message->message_sent); ?></li>
									<li><?php echo e(__('partybooker-cp.subscribe_form')); ?></li>
									<li><?php echo e($message->email); ?></li>
								</ul>
							</div>
						<?php endif; ?>
						<?php if($message->contact_form == 'request'): ?>
							<?php if($message->status == 0): ?>
								<div class="message unread" form-type="<?php echo e($message->contact_form); ?>" 
								data-id="<?php echo e($message->id); ?>"
								data-date="<?php echo e($message->message_sent); ?>"
								data-type="<?php echo e(__('partybooker-cp.request_form')); ?>" 
								data-name="<?php echo e($message->name); ?>"
								data-email="<?php echo e($message->email); ?>"
								data-emailto="<?php echo e($message->emailto); ?>"
								data-partnerid="<?php echo e($message->id_partner); ?>"
								data-phone="<?php echo e($message->phone); ?>"
								data-message="<?php echo e($message->message); ?>">
							<?php else: ?>
								<div class="message" form-type="<?php echo e($message->contact_form); ?>" 
								data-id="<?php echo e($message->id); ?>"
								data-date="<?php echo e($message->message_sent); ?>"
								data-type="<?php echo e(__('partybooker-cp.request_form')); ?>" 
								data-name="<?php echo e($message->name); ?>"
								data-email="<?php echo e($message->email); ?>"
								data-emailto="<?php echo e($message->emailto); ?>"
								data-partnerid="<?php echo e($message->id_partner); ?>"
								data-phone="<?php echo e($message->phone); ?>"
								data-message="<?php echo e($message->message); ?>">
							<?php endif; ?>
								<ul>
									<li><?php echo e($message->message_sent); ?></li>
									<li><?php echo e(__('partybooker-cp.request_form')); ?></li>
									<li><?php echo e($message->email); ?></li>
								</ul>
							</div>
						<?php endif; ?>
						<?php if($message->contact_form == 'partner'): ?>
							<?php if($message->status == 0): ?>
								<div class="message unread" form-type="<?php echo e($message->contact_form); ?>" 
								data-id="<?php echo e($message->id); ?>"
								data-date="<?php echo e($message->message_sent); ?>"
								data-type="<?php echo e(__('partybooker-cp.partner_form')); ?>" 
								data-name="<?php echo e($message->name); ?>"
								data-email="<?php echo e($message->email); ?>"
								data-question="<?php echo e($message->message); ?>">
							<?php else: ?> 
								<div class="message" form-type="<?php echo e($message->contact_form); ?>" 
								data-id="<?php echo e($message->id); ?>"
								data-date="<?php echo e($message->message_sent); ?>"
								data-type="<?php echo e(__('partybooker-cp.partner_form')); ?>" 
								data-name="<?php echo e($message->name); ?>"
								data-email="<?php echo e($message->email); ?>"
								data-question="<?php echo e($message->message); ?>">
							<?php endif; ?>
								<ul>
									<li><?php echo e($message->message_sent); ?></li>
									<li><?php echo e(__('partybooker-cp.partner_form')); ?></li>
									<li><?php echo e($message->email); ?></li>
								</ul>
							</div>
						<?php endif; ?>
						<?php if($message->contact_form == 'contacts'): ?>
							<?php if($message->status == 0): ?>
								<div class="message unread" form-type="<?php echo e($message->contact_form); ?>"
								data-id="<?php echo e($message->id); ?>"
								data-date="<?php echo e($message->message_sent); ?>"
								data-type="<?php echo e(__('partybooker-cp.contacts_form')); ?>" 
								data-name="<?php echo e($message->name); ?>"
								data-email="<?php echo e($message->email); ?>"
								data-message="<?php echo e($message->message); ?>">
							<?php else: ?>
								<div class="message" form-type="<?php echo e($message->contact_form); ?>"
								data-id="<?php echo e($message->id); ?>"
								data-date="<?php echo e($message->message_sent); ?>"
								data-type="<?php echo e(__('partybooker-cp.contacts_form')); ?>" 
								data-name="<?php echo e($message->name); ?>"
								data-email="<?php echo e($message->email); ?>"
								data-message="<?php echo e($message->message); ?>">
							<?php endif; ?>
								<ul>
									<li><?php echo e($message->message_sent); ?></li>
									<li><?php echo e(__('partybooker-cp.contacts_form')); ?></li>
									<li><?php echo e($message->email); ?></li>
								</ul>
							</div>
						<?php endif; ?>
						<?php if($message->contact_form == 'question'): ?>
							<?php if($message->status == 0): ?>
								<div class="message unread" form-type="<?php echo e($message->contact_form); ?>"
								data-id="<?php echo e($message->id); ?>"
								data-date="<?php echo e($message->message_sent); ?>"
								data-type="<?php echo e(__('partybooker-cp.question_form')); ?>"
								data-phone="<?php echo e($message->phone); ?>">
							<?php else: ?>
								<div class="message" form-type="<?php echo e($message->contact_form); ?>"
								data-id="<?php echo e($message->id); ?>"
								data-date="<?php echo e($message->message_sent); ?>"
								data-type="<?php echo e(__('partybooker-cp.question_form')); ?>"
								data-phone="<?php echo e($message->phone); ?>">
							<?php endif; ?>
							<ul>
								<li><?php echo e($message->message_sent); ?></li>
								<li><?php echo e(__('partybooker-cp.question_form')); ?></li>
								<li><?php echo e($message->phone); ?></li>
							</ul>
						</div>
						<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
			
			<div class="col-md-6 events">
				<h3><?php echo e(__('partybooker-cp.notifications')); ?></h3>
				<?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($notification->event === 'User registration'): ?>
						<div class="row notifications orange" event-id="<?php echo $key ?>">
					<?php elseif($notification->event === 'Service provider registration'): ?>
						<div class="row notifications green" event-id="<?php echo $key ?>">
					<?php endif; ?>
						<div class="col-md-12"><strong><?php echo e($notification->event_date); ?></strong></div>
						<div class="col-md-5"><?php echo e($notification->event); ?></div>
						<div class="col-md-7"><?php echo e($notification->description); ?></div>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>
</div>
<?php echo $__env->make('admin.popups.new-faq', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.popups.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/admin/partybooker-cp.blade.php ENDPATH**/ ?>