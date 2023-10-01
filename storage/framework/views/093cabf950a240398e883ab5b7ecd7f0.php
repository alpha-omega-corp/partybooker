<?php $__env->startSection('page'); ?>
page="blog"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
<title><?php echo e(__('partybooker-cp.blog')); ?> | <?php echo e(__('partybooker-cp.www')); ?></title>
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
					<ul class="blog-filter">
						<li><a href="#" class="active" status="all"><?php echo e(__('partybooker-cp.show_all')); ?></a></li>
						<li><a href="#" status="1"><?php echo e(__('partybooker-cp.show_published')); ?></a></li>
						<li><a href="#" status="0"><?php echo e(__('partybooker-cp.show_draft')); ?></a></li>
					</ul>
					<a href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/blog/new-post')); ?>" class="button"><?php echo e(__('partybooker-cp.add_new_article')); ?></a>
				</div>
			</div>
			
			<div class="col-md-9">	
				<h1><?php echo e(__('partybooker-cp.blog')); ?></h1>
				
				<div class="blog-list">
					<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($post->status == 1): ?>
						<a href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/blog/post/'.$post->slug)); ?>" status="1">
						<?php else: ?>
						<a href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/blog/post/'.$post->slug)); ?>" status="0">	
						<?php endif; ?>
							<div class="post">
								<ul>
									<li><?php echo e($post->updated); ?></li>
									<?php if(app()->getLocale() == 'en'): ?>
										<li><?php echo e($post->title_en); ?></li>
									<?php else: ?>
										<li><?php echo e($post->title_fr); ?></li>
									<?php endif; ?>
									<?php if($post->status == 1): ?>
										<li><?php echo e(__('partybooker-cp.published')); ?></li>
									<?php else: ?>
										<li><?php echo e(__('partybooker-cp.not_published')); ?></li>
									<?php endif; ?>
								</ul>
							</div>
						</a>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>			
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/admin/blog.blade.php ENDPATH**/ ?>