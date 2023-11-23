<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'eventTypes',
    'partnerEt',
    'user',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'eventTypes',
    'partnerEt',
    'user',
]); ?>
<?php foreach (array_filter(([
    'eventTypes',
    'partnerEt',
    'user',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<form method="POST" action="<?php echo e(route(Auth::user()->type === 'admin' ? 'update-et-admin' : 'update-et')); ?>">
    <?php echo csrf_field(); ?>

    <div class="d-flex flex-wrap justify-content-between">
        <?php $__currentLoopData = $eventTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $eventType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="event-type-item mt-3 <?php echo e(in_array($eventType->id, $partnerEt) ? 'shadow-lg border-accent' : ''); ?>">
                <div class="form-check m-0">
                    <input
                            name="eventTypes[]"
                            class="form-check-input"
                            type="checkbox"
                            id="<?php echo e($key); ?>"
                            value="<?php echo e($eventType->id); ?>"
                            <?php echo e(in_array($eventType->id, $partnerEt) ? 'checked' : ''); ?>

                    >
                    <label class="form-check-label border-0" for="<?php echo e($key); ?>">
                     <span class="d-flex">
                         <?php if(app()->getLocale() === 'en'): ?>
                             <?php echo e($eventType->en_name); ?>

                         <?php else: ?>
                             <?php echo e($eventType->fr_name); ?>

                         <?php endif; ?>
                     </span>
                    </label>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <input type="hidden" name="partnerId" value="<?php echo e($user->id_partner); ?>"/>


    <hr>
    <button type="submit" class="btn btn-accent mt-3 w-100">
        <?php echo e(__('partner.save')); ?>

    </button>
</form>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/components/dashboard/profile/event-types.blade.php ENDPATH**/ ?>