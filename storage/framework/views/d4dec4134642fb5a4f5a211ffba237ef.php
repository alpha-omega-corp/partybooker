<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.modal','data' => ['id' => 'editOption','title' => 'Configuration','button' => __('partner.edit'),'action' => Auth::user()->type == 'admin'
        ? route('option.update.admin')
        : route('option.update'),'hasButton' => false,'size' => 'modal-sm','saveLabel' => __('form.yes'),'method' => 'POST']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'editOption','title' => 'Configuration','button' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('partner.edit')),'action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Auth::user()->type == 'admin'
        ? route('option.update.admin')
        : route('option.update')),'has-button' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'size' => 'modal-sm','save-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('form.yes')),'method' => 'POST']); ?>

    <input type="hidden" id="optionChoice">

    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.card-info','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.card-info'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php echo e(ucfirst(__('form.edit-option-warning'))); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

    <div class="d-none" x-data="{option: document.getElementById('optionChoice').value}">
        <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <span class="radio-item">
                <?php echo e($partner->plan_option_group); ?>

                <label for="option_<?php echo e($k); ?>"></label>
                <input id="option_<?php echo e($k); ?>" type="radio"
                       name="option"
                       value="<?php echo e($option['group']); ?>"
                       x-model="option"/>
                <span class="text-gray"><?php echo e($option['name']); ?></span>
            </span>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


    <input type="hidden" name="id_partner" value="<?php echo e($partner->id_partner); ?>"/>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>


<?php $__env->startPush('footer'); ?>
    <script>
        let groupCurrent = '<?php echo e($partner->plan_option_group); ?>';
        $('#editOption .btn-primary').on('click', function () {
            $('.radio-item').append('<span class="checkmark"></span>');
            $('div.options #option_' + groupCurrent).click();
        });
    </script>
<?php $__env->stopPush(); ?>


<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/web/partner/popup/edit-option.blade.php ENDPATH**/ ?>