<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.modal','data' => ['id' => 'editCompany','title' => __('form.edit-company-modal'),'button' => __('partner.edit'),'action' => Auth::user()->type == 'admin'
        ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/edit-company')
        : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/edit-company'),'hasFiles' => true,'size' => 'modal-md','method' => 'POST']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'editCompany','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('form.edit-company-modal')),'button' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('partner.edit')),'action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Auth::user()->type == 'admin'
        ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/edit-company')
        : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/edit-company')),'hasFiles' => true,'size' => 'modal-md','method' => 'POST']); ?>


    <div class="logo-file position-relative">
        <div class="d-flex flex-column">
            <label for="logo">
                <div class="d-flex">
                    <div id="logo-btn"
                         class="button btn btn-primary d-none">
                        <?php echo e(__('partner.choose_logo')); ?>

                    </div>

                </div>
                <div class="zone"></div>

                <input type="file" id="logo" name="logo" class="imagesFileUpload" hidden>
            </label>

        </div>
    </div>


    <div id="filename" class="m-2 text-dark d-flex align-items-center justify-content-center logo-edit"
         x-data="{target: 'logo-btn'}" @click="document.getElementById(target).click()">
        <?php if($partner->logo): ?>
            <div class="d-flex flex-column edit-logo">
                <img src="<?php echo e(asset('/storage/logos/'.$partner->logo)); ?>" alt="logo"
                     class="cp-company-logo"
                     width="100">

                <div class="d-flex align-items-center justify-content-center edit-logo-icon">
                    <?php echo e(svg('heroicon-o-cog-6-tooth')); ?>
                </div>

            </div>
        <?php else: ?>
            <div class="logo-placeholder" x-data="{target: 'logo-btn'}"
                 @click="document.getElementById(target).click()">
                <?php echo e(svg('heroicon-o-photo', 'text-gray')); ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="d-flex flex-column p-3">
        <div class="edit-company-details w-100 p-2">
            <label class="label-underline">
                <?php echo e(__('become_partner.company_info')); ?>

            </label>
            <div class="pt-1">
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.input','data' => ['name' => 'company_name','value' => $partner->en_company_name,'placeholder' => __('partybooker-cp.company_name'),'icon' => 'heroicon-o-home-modern','max' => 50]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'company_name','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($partner->en_company_name),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('partybooker-cp.company_name')),'icon' => 'heroicon-o-home-modern','max' => 50]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.input','data' => ['name' => 'company_phone','value' => $partner->company_phone,'placeholder' => __('partybooker-cp.phone'),'icon' => 'heroicon-o-phone']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'company_phone','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($partner->company_phone),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('partybooker-cp.phone')),'icon' => 'heroicon-o-phone']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>


                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.input','data' => ['name' => 'company_fax','value' => $partner->fax,'placeholder' => __('become_partner.fax'),'required' => false,'icon' => 'heroicon-o-paper-airplane']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'company_fax','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($partner->fax),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('become_partner.fax')),'required' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'icon' => 'heroicon-o-paper-airplane']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            </div>
        </div>

        <div class="languages p-2">
            <label><?php echo e(__('partybooker-cp.languages')); ?></label>

            <div class="p-1">
                <div class="language-list">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.checkbox','data' => ['name' => 'languages[]','value' => 'french','label' => __('partybooker-cp.french'),'checked' => str_contains($partner->language, 'french')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'languages[]','value' => 'french','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('partybooker-cp.french')),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(str_contains($partner->language, 'french'))]); ?>
                        <img src="<?php echo e(Vite::image('french.svg')); ?>" alt="french"/>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.checkbox','data' => ['name' => 'languages[]','value' => 'english','label' => __('partybooker-cp.english'),'checked' => str_contains($partner->language, 'english')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'languages[]','value' => 'english','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('partybooker-cp.english')),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(str_contains($partner->language, 'english'))]); ?>
                        <img src="<?php echo e(Vite::image('english.svg')); ?>" alt="english"/>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.checkbox','data' => ['name' => 'languages[]','value' => 'german','label' => __('partybooker-cp.german'),'checked' => str_contains($partner->language, 'german')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'languages[]','value' => 'german','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('partybooker-cp.german')),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(str_contains($partner->language, 'german'))]); ?>
                        <img src="<?php echo e(Vite::image('german.svg')); ?>" alt="german"/>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.checkbox','data' => ['name' => 'languages[]','value' => 'italian','label' => __('partybooker-cp.italian'),'checked' => str_contains($partner->language, 'italian')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'languages[]','value' => 'italian','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('partybooker-cp.italian')),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(str_contains($partner->language, 'italian'))]); ?>
                        <img src="<?php echo e(Vite::image('italian.svg')); ?>" alt="italian"/>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </div>
            </div>
        </div>
    </div>


    <?php if(Auth::user()->type == 'admin'): ?>
        <input type="text" name="id_partner" value="<?php echo e($partner->id_partner); ?>" hidden/>
    <?php else: ?>
        <input type="text" name="id_partner" value="<?php echo e(Auth::user()->id_partner); ?>" hidden/>
    <?php endif; ?>

    <input type="text" name="current_logo" value="<?php echo e($partner->logo); ?>" hidden/>
    <input type="text" name="current_loc" value="<?php echo e($partner->location_code); ?>" hidden/>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>




<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/web/partner/popup/edit-company.blade.php ENDPATH**/ ?>