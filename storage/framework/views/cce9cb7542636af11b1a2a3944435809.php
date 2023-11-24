<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.modal','data' => ['id' => 'editCategory','button' => __('partner.edit'),'icon' => 'heroicon-o-cube-transparent','size' => 'modal-md','action' => Auth::user()->type == 'admin'
        ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/edit-category')
        : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/edit-category'),'method' => 'POST']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'editCategory','button' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('partner.edit')),'icon' => 'heroicon-o-cube-transparent','size' => 'modal-md','action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Auth::user()->type == 'admin'
        ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/edit-category')
        : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/edit-category')),'method' => 'POST']); ?>

     <?php $__env->slot('image', null, []); ?> 
        <?php echo e(svg('heroicon-o-cube-transparent')); ?>
     <?php $__env->endSlot(); ?>

    <?php $cat = 1; ?>
    <div class="edit-category">

        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.card-info','data' => ['icon' => 'heroicon-o-check-circle','color' => 'text-primary']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.card-info'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'heroicon-o-check-circle','color' => 'text-primary']); ?>
            <?php echo e(__('form.change_categories')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

        <?php $__currentLoopData = $partnerOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="option-<?php echo e($cat); ?> text-dark">
                <div class="categories cat">
                    <label
                        class="select pb-2 text-center w-100 text-uppercase fw-bold"><?php echo e(__('partner.category')); ?></label>

                    <div class="d-flex">
                        <?php echo e(svg('heroicon-o-cube-transparent', 'mt-2 me-2')); ?>

                        <select option="<?php echo e($cat); ?>" required class="form-select">
                            <option value="" disabled selected></option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($categ->code); ?>"><?php echo e($categ->lang->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <div class="d-flex flex-column mt-3">
                    <?php for($i = 1; $i <= $option->sub_categories_count; $i++): ?>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="categories subcat w-100 <?php echo e($categ->code); ?>" style="display: none;">
                                <div class="d-flex flex-column w-100 mb-2">
                                    <div class="d-flex">
                                        <span class="text-bg-accent p-1 rounded text-center me-2 w-100">#<?php echo e($k); ?></span>
                                        <select name="category[<?php echo e($categ->id); ?>][]" class="form-select">
                                            <option selected disabled></option>
                                            <?php $__currentLoopData = $categ->subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($sub->id); ?>"><?php echo e($sub->lang->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endfor; ?>
                </div>
            </div>

            <hr>

                <?php $cat++; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <?php if(Auth::user()->type == 'admin'): ?>
        <input type="text" name="id_partner" value="<?php echo e($partner->id_partner); ?>" hidden/>
    <?php else: ?>
        <input type="text" name="id_partner" value="<?php echo e(Auth::user()->id_partner); ?>" hidden/>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

<script type="module">
    $('.edit-category .cat select').change(function () {
        var opt = $(this).attr('option');
        $('.option-' + opt + ' .subcat').hide();
        $('.option-' + opt + ' .subcat select').attr('required', false);
        var cat = $('.option-' + opt + ' .cat option:selected').val();

        $(".subcat select:hidden").val("");
        $('.option-' + opt + ' .' + cat).fadeIn().css('display', 'inline-flex');
        $('.option-' + opt + ' .' + cat + ' select').attr('required', true);
    });
</script>


<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/web/partner/popup/edit-category.blade.php ENDPATH**/ ?>