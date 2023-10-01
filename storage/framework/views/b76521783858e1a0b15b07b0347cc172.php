<?php $__env->startSection('page'); ?>
page="messages"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
<title><?php echo e(__('partybooker-cp.messages')); ?> | <?php echo e(__('partybooker-cp.www')); ?></title>
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
				<div class="setting-nav form-nav">
					<ul>
						<li><a href="#" form-type="all" class="active"><?php echo e(__('partybooker-cp.all_messages')); ?></a></li>
						<li><a href="#" form-type="subscribe"><?php echo e(__('partybooker-cp.subscribe_form')); ?></a></li>
						<li><a href="#" form-type="request"><?php echo e(__('partybooker-cp.request_form')); ?></a></li>
						<li><a href="#" form-type="question"><?php echo e(__('partybooker-cp.question_form')); ?></a></li>
						<li><a href="#" form-type="contacts"><?php echo e(__('partybooker-cp.contacts_form')); ?></a></li>
						<li><a href="#" form-type="partner"><?php echo e(__('partybooker-cp.partner_form')); ?></a></li>
					</ul>
				</div>
			</div>
			
			<div class="col-md-9">	
				<h1><?php echo e(__('partybooker-cp.messages')); ?></h1>
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
					<ul>
						<li>Date</li>
						<li>To partner</li>
						<li>From</li>
					</ul>
					<?php $__currentLoopData = $directMessages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($message): ?>
						<div class="message <?php if($message->status): ?> unread <?php endif; ?>" form-type="request"
						     data-id="<?php echo e($message->id); ?>"
						     data-date="<?php echo e($message->created_at); ?>"
						     data-type="<?php echo e(__('partybooker-cp.request_form')); ?>"
						     data-type_code="request"
						     data-name="<?php echo e($message->client_name); ?>"
						     data-email="<?php echo e($message->client_email); ?>"
						     data-emailto="<?php echo e((isset($message->partner))?$message->partner->fr_company_name . ' / ' . $message->partner->en_company_name:''); ?>"
						     data-partnerid="<?php echo e((isset($message->partner))?$message->partner->id_partner:''); ?>"

						     data-phone="<?php echo e($message->client_phone); ?>"
						     data-message="<?php echo e($message->message); ?>">
							<ul>
								<li><?php echo e($message->created_at); ?></li>

								<li><?php echo e((isset($message->partner))?$message->fr_company_name . ' / ' . $message->partner->en_company_name:''); ?></li>
								<li><?php echo e($message->client_email); ?></li>
							</ul>
						</div>
                                            <?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $__env->make('admin.popups.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/admin/messages.blade.php ENDPATH**/ ?>