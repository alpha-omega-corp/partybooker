<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'partner',
    'matrix'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'partner',
    'matrix'
]); ?>
<?php foreach (array_filter(([
    'partner',
    'matrix'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php ($canPublish = []); ?>
<?php $__currentLoopData = $matrix; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php ($canPublish[] = $value); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<div class="d-flex mb-4">
    <div class="matrix-card">
        <div class="d-flex flex-column">
            <?php if(!$matrix['chooseThumbnail']): ?>
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.card-info','data' => ['targets' => [
                        'editMainImageModel-button',
                    ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.card-info'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['targets' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
                        'editMainImageModel-button',
                    ])]); ?>
                    <?php echo e(__('partner.choose_thumbnail')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <?php else: ?>
                <div class="publish-matrix-check">
                    <div>
                        <?php echo e(svg('heroicon-o-check-circle')); ?>
                    </div>
                    <div class="matrix-check-content">
                        <span><?php echo e(__('partner.matrix_thumbnail_good')); ?></span>
                    </div>
                </div>
            <?php endif; ?>


            <?php if(!$matrix['chooseCategory']): ?>
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.card-info','data' => ['targets' => [
                        'tab-1-2',
                        'editCategory-button',
                    ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.card-info'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['targets' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
                        'tab-1-2',
                        'editCategory-button',
                    ])]); ?>
                    <?php echo e(__('partner.choose_category')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <?php else: ?>
                <div class="publish-matrix-check">
                    <div>
                        <?php echo e(svg('heroicon-o-check-circle')); ?>
                    </div>
                    <div class="matrix-check-content">
                        <span><?php echo e(__('partner.matrix_category_good')); ?></span>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(!$matrix['serviceDetails']): ?>
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.card-info','data' => ['targets' => [
                        'tab-1-2',
                        'create0'
                    ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.card-info'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['targets' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
                        'tab-1-2',
                        'create0'
                    ])]); ?>
                    <?php echo e(__('partner.fill_service_details')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <?php else: ?>
                <div class="publish-matrix-check">
                    <div>
                        <?php echo e(svg('heroicon-o-check-circle')); ?>
                    </div>
                    <div class="matrix-check-content">
                        <span><?php echo e(__('partner.matrix_service_good')); ?></span>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(!$matrix['companyDetails']): ?>
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.card-info','data' => ['targets' => [
                        'tab-2-2',
                        'companyDescription'
                    ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.card-info'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['targets' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
                        'tab-2-2',
                        'companyDescription'
                    ])]); ?>
                    <?php echo e(__('partner.fill_company_details')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <?php else: ?>
                <div class="publish-matrix-check">
                    <div>
                        <?php echo e(svg('heroicon-o-check-circle')); ?>
                    </div>
                    <div class="matrix-check-content">
                        <span><?php echo e(__('partner.matrix_company_good')); ?></span>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>


<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/components/partner/publication-matrix.blade.php ENDPATH**/ ?>