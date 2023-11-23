<?php use App\Models\PartnerPlanOption;use App\Models\PlanOption; ?>

<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'categories',
    'partnerCategories',
    'options',
    'partnerOptions',
    'partner'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'categories',
    'partnerCategories',
    'options',
    'partnerOptions',
    'partner'
]); ?>
<?php foreach (array_filter(([
    'categories',
    'partnerCategories',
    'options',
    'partnerOptions',
    'partner'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>


<div class="plan-options-item-card">
    <div class="d-flex justify-content-around">

        <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $indexOption = PlanOption::where('group', $option['group'])
                    ->where('plans_id', $partner->plans_id)
                    ->first();
            ?>

            <div
                class="plan-option-item <?php echo e($option['group'] === $partner->plan_option_group ? 'plan-options-item-active' : ''); ?>"
                x-data="{key: '<?php echo e($key); ?>'}"
                @click="
                        document.getElementById('option_' + key).click();
                        document.getElementById('editOption-button').click();
                    "
                data-tippy-content="<?php echo e(__('form.switch')); ?>">

                <div class="text-uppercase text-center d-flex justify-content-start">
                    <div>
                        <?php echo e(svg('heroicon-o-newspaper')); ?>
                    </div>
                    <div class="option-description">
                        <small>
                            <?php echo e($indexOption->categories_count); ?>

                            <?php echo e(Str::plural(__('partner.category'), $indexOption->categories_count)); ?>

                        </small>

                        <small>
                            <?php echo e($indexOption->sub_categories_count); ?>

                            <?php echo e(Str::plural(__('partner.subcategory'), $indexOption->sub_categories_count)); ?>

                        </small>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php echo $__env->make('web.partner.popup.edit-option', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/components/dashboard/profile/options.blade.php ENDPATH**/ ?>