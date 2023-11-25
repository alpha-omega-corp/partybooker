<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'user'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'user'
]); ?>
<?php foreach (array_filter(([
    'user'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if(Auth::user()->type == 'admin'): ?>

    <div class="d-flex align-items-center">
        <h1 class="text-uppercase text-start p-3 fw-bold display-6">
            <?php echo e($user->partnerInfo->fr_company_name); ?>

        </h1>
        <div class="dashboard-plan-badge">
            <span class="badge text-bg-<?php echo e(strtolower($user->partnerInfo->plan)); ?> text-white">
                <?php echo e(__('plan.'.strtolower($user->partnerInfo->plan))); ?>

            </span>
            <?php if(\Illuminate\Support\Facades\Auth::user()->type === 'admin'): ?>
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.modal','data' => ['id' => 'editPlanAdmin','title' => __('partner.edit_links'),'button' => __('partner.edit'),'action' => route('plan.update.admin', ['id_partner' => $user->id_partner]),'hasFiles' => true,'hasButton' => true,'icon' => 'heroicon-o-pencil','size' => 'modal-md','method' => 'POST']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'editPlanAdmin','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('partner.edit_links')),'button' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('partner.edit')),'action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('plan.update.admin', ['id_partner' => $user->id_partner])),'hasFiles' => true,'has-button' => true,'icon' => 'heroicon-o-pencil','size' => 'modal-md','method' => 'POST']); ?>
                    WAD
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <?php endif; ?>

        </div>
    </div>

<?php else: ?>
    <h1 class="text-uppercase text-start p-3 fw-bold display-4">
        <?php echo e(__('partner.dashboard')); ?>

    </h1>
<?php endif; ?>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/components/dashboard/title.blade.php ENDPATH**/ ?>