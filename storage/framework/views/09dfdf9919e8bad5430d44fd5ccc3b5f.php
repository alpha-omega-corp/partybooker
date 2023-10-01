<?php $__env->startSection('page'); ?>
page="listing"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
<title><?php echo e(__('partybooker-cp.listing')); ?> | <?php echo e(__('partybooker-cp.www')); ?></title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="page">
	<div class="container">
		<div class="filters" style="min-height: 650px">
			<div class="fil-cat">
				<h5><?php echo e(__('partybooker-cp.choose_category')); ?></h5>
				<select id="category-select">
					<option><?php echo e(__('partybooker-cp.display_all')); ?></option>
					<?php echo $__env->make('common.categories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				</select>
			</div>
			<div class="fil-subcat">
				<h5><?php echo e(__('partybooker-cp.choose_subcategory')); ?></h5>
				<select id="subcategory-select">
					<option><?php echo e(__('partybooker-cp.display_all')); ?></option>
					<?php echo $__env->make('common.subcat1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<?php echo $__env->make('common.subcat2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<?php echo $__env->make('common.subcat3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<?php echo $__env->make('common.subcat4', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<?php echo $__env->make('common.subcat5', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<?php echo $__env->make('common.subcat6', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				</select>
			</div>
			<div class="fil-name">
				<h5><?php echo e(__('partybooker-cp.filter_by_name')); ?></h5>
				<input type="text" />
			</div>
			<div class="fil-location">
				<h5><?php echo e(__('partybooker-cp.choose_location')); ?></h5>
				<select id="location-select">
					<option><?php echo e(__('partybooker-cp.display_all')); ?></option>
					<?php echo $__env->make('common.cantons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				</select>
			</div>
			<div class="fil-plan">
				<h5><?php echo e(__('partybooker-cp.choose_yearly_plan')); ?></h5>
				<select id="plan-select">
					<option><?php echo e(__('partybooker-cp.display_all')); ?></option>
					<?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e(strtolower($plan->name)); ?>"><?php echo e(\Lang::has('plan.' . strtolower($plan->name)) ? trans('plan.' . strtolower($plan->name)) : $plan->name); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</div>
			<div class="fil-status">
				<h5><?php echo e(__('partybooker-cp.choose_payment_status')); ?></h5>
				<select id="status-select">
					<option><?php echo e(__('partybooker-cp.display_all')); ?></option>
					<option value="0"><?php echo e(__('partybooker-cp.not_payed')); ?></option>
					<option value="1"><?php echo e(__('partybooker-cp.payed')); ?></option>
				</select>
			</div>
			<button class="button"><?php echo e(__('partybooker-cp.filter')); ?></button>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h1><?php echo e(__('partybooker-cp.listing')); ?></h1>
				<a href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/add-new-partner')); ?>" class="button list-btn"><?php echo e(__('partybooker-cp.add_new_partner')); ?></a>
				<div class="filter">
					<?php echo e(__('partybooker-cp.filter')); ?>

				</div>

				<div class="sort">
					<div><?php echo e(__('partybooker-cp.sort_by')); ?></div>
					<ul>
						<li class="up" sort="name"><?php echo e(__('partybooker-cp.sort_name')); ?> &darr;</li>
						<li class="down" sort="name"><?php echo e(__('partybooker-cp.sort_name')); ?> &uarr;</li>
						<li class="down" sort="date"><?php echo e(__('partybooker-cp.sort_date')); ?> &uarr;</li>
						<li class="up" sort="expiration"><?php echo e(__('partybooker-cp.sort_exp_date')); ?> &darr;</li>
						<li class="down" sort="expiration"><?php echo e(__('partybooker-cp.sort_exp_date')); ?> &uarr;</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="services">
			<?php if($errors->any()): ?>
				<div class="alert alert-danger">
					<ul>
						<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li><?php echo e($error); ?></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
				</div>
			<?php endif; ?>
			<?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="service-block" num="<?php echo e($key+1); ?>" data-name="<?php echo e($service->en_company_name); ?>" data-location="<?php echo e($service->location_code); ?>" data-date="<?php echo e($service->created_at); ?>" data-plan="<?php echo e($service->plan); ?>" data-status="<?php echo e($service->payment_status); ?>" data-expiration="<?php echo e($service->expiration_date); ?>" data-category="<?php echo e($service->category_1); ?> <?php echo e($service->category_2); ?> <?php echo e($service->category_3); ?>">
				<div class="row">
					<div class="offset-md-1 col-md-10">
						<div class="row">
							<div class="col-lg">
								<h3><?php echo e($service->en_company_name); ?></h3>
								<h6><?php echo e(__('cantons.' . strtolower($service->location_code) . '_loc')); ?></h6>
							</div>
							<a href="<?php echo e(url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/'.$service->id_partner)); ?>" class="button"><?php echo e(__('partybooker-cp.view_profile')); ?></a>
							<a href="#" id="remove-partner" data-partner="<?php echo e($service->id_partner); ?>" class="button btn-remove"><?php echo e(__('partybooker-cp.remove_partner')); ?></a>
						</div>
						<!-- <div class="clearfix"></div> -->
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="offset-md-1 col-md-4">
						<span class="title"><?php echo e(__('partybooker-cp.contacts')); ?></span>
						<p><span>ID:</span> <?php echo e($service->id_partner); ?></p>
						<p><span><?php echo e(__('partybooker-cp.name')); ?></span> <?php echo e($service->name); ?></p>
						<p><span><?php echo e(__('partybooker-cp.email')); ?></span> <?php echo e($service->email); ?></p>
					</div>
					<div class="col-md-3">
						<span class="title"><?php echo e(__('partybooker-cp.status')); ?></span>
						<p><span><?php echo e(__('partybooker-cp.created_at')); ?></span> <?php echo e($service->created_at); ?></p>
						<p><span><?php echo e(__('partybooker-cp.yearly_plan')); ?></span> <?php echo e(\Lang::has('plan.' . $service->plan) ? trans('plan.' . $service->plan) : $service->plan); ?></p>
						<?php if($service->payment_status == 0): ?>
						<p><span><?php echo e(__('partybooker-cp.payment_status')); ?></span> Not Payed</p>
						<?php else: ?>
						<p><span><?php echo e(__('partybooker-cp.payment_status')); ?></span> Payed</p>
						<?php endif; ?>
					</div>
					<div class="col-md-3">
						<span class="title"><?php echo e(__('partybooker-cp.payment')); ?></span>
						<p><span><?php echo e(__('partybooker-cp.payment_date')); ?></span> <?php echo e($service->payed); ?></p>
						<p><span><?php echo e(__('partybooker-cp.payment_exp_date')); ?></span> <?php echo e($service->expiration_date); ?></p>
					</div>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
		<div class="pagination">
			<ul></ul>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('footer'); ?>
<script>
	$('.filters').hide();
	$(document).on('click', 'div.filter', function() {
		if ($(this).hasClass('open')) {
			$('.filters').show();
		} else {
			$('.filters').hide();
		}
	});

	$(document).on('click', 'a#remove-partner', function(e) {
		var $this = $(this);
		if (confirm('Do yo want to delete this partner?')) {
			$.ajax({
				url: '/cp/partner-remove',
				method: 'post',
				data: {
					id_partner: $(this).data('partner')
				},
				success: function() {
					$this.closest('div.service-block').remove();
				},
				error: function(r) {
					var data = JSON.parse(r.responseText);
					alert(data.message);
				}
			})
		}
		return false;
	});
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/admin/listing.blade.php ENDPATH**/ ?>