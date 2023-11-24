<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'partner'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'partner'
]); ?>
<?php foreach (array_filter(([
    'partner'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<form method="POST"
      action="<?php echo e(\Illuminate\Support\Facades\Auth::user()->type === 'admin'
       ? route('company-description.update.admin')
       : route('company-description.update')); ?>">
    <?php echo csrf_field(); ?>
    <div class="edit-company-description">
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partner-category-tab','data' => ['tabs' => [
            ucfirst(__('become_partner.french')),
            ucfirst(__('become_partner.english'))
    ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partner-category-tab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tabs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
            ucfirst(__('become_partner.french')),
            ucfirst(__('become_partner.english'))
    ])]); ?>
            <!-- French -->
            <?php if (isset($component)) { $__componentOriginal5996464ce2057ee5b38b3f383ca2e441 = $component; } ?>
<?php $component = App\View\Components\Tab\Item::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Tab\Item::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <div class="edit-company-section">
                    <div class="description-card-title" id="companyDescription">
                        <img src="<?php echo e(Vite::image('icons/france.svg')); ?>" alt="english" class="me-2"/>
                    </div>


                    <div class="mt-2">
                        <div>
                            <div class="w-100">
                                <label for="fr_short_descr"><?php echo e(__('partybooker-cp.short_description')); ?>

                                    <span class="text-danger">*</span></label>
                                <textarea name="fr_short_descr" id="fr_short_descr" maxlength="350"
                                          rows="10" required
                                          class="textarea-wysiwyg"><?php echo e($partner->fr_short_descr); ?></textarea>
                            </div>

                            <div class="w-100">
                                <label for="fr_full_descr"><?php echo e(__('partybooker-cp.full_description')); ?>

                                    <span class="text-danger">*</span></label>
                                <textarea name="fr_full_descr" id="fr_full_descr" maxlength="3000"
                                          rows="10" required
                                          class="textarea-wysiwyg"><?php echo e($partner->fr_full_descr); ?></textarea>
                            </div>
                        </div>
                    </div>

                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.textarea','data' => ['name' => 'fr_slogan','label' => __('partybooker-cp.slogan'),'icon' => 'heroicon-o-chat-bubble-bottom-center-text',':r' => true,'max' => 250]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'fr_slogan','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('partybooker-cp.slogan')),'icon' => 'heroicon-o-chat-bubble-bottom-center-text',':r' => true,'max' => 250]); ?><?php echo e($partner->fr_slogan); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.profile.seo','data' => ['lang' => 'fr','partner' => $partner]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.profile.seo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['lang' => 'fr','partner' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($partner)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </div>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5996464ce2057ee5b38b3f383ca2e441)): ?>
<?php $component = $__componentOriginal5996464ce2057ee5b38b3f383ca2e441; ?>
<?php unset($__componentOriginal5996464ce2057ee5b38b3f383ca2e441); ?>
<?php endif; ?>

            <!-- English -->
            <?php if (isset($component)) { $__componentOriginal5996464ce2057ee5b38b3f383ca2e441 = $component; } ?>
<?php $component = App\View\Components\Tab\Item::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Tab\Item::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <div class="edit-company-section">
                    <div class="description-card-title">
                        <img src="<?php echo e(Vite::image('icons/uk-flag.svg')); ?>" alt="english"/>
                    </div>


                    <div class="mt-2">
                        <label for="en_short_descr"><?php echo e(__('partybooker-cp.short_description')); ?>

                            <span class="text-danger">*</span></label>
                        <textarea name="en_short_descr" id="en_short_descr" maxlength="350" required
                                  class="textarea-wysiwyg"><?php echo e($partner->en_short_descr); ?></textarea>

                        <label for="en_full_descr"><?php echo e(__('partybooker-cp.full_description')); ?>

                            <span class="text-danger">*</span></label>
                        <textarea name="en_full_descr" id="en_full_descr" maxlength="3000" required
                                  class="textarea-wysiwyg"><?php echo e($partner->en_full_descr); ?></textarea>

                    </div>

                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.textarea','data' => ['name' => 'en_slogan','label' => __('partybooker-cp.slogan'),'icon' => 'heroicon-o-chat-bubble-bottom-center-text','max' => 250]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'en_slogan','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('partybooker-cp.slogan')),'icon' => 'heroicon-o-chat-bubble-bottom-center-text','max' => 250]); ?><?php echo e($partner->en_slogan); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.profile.seo','data' => ['lang' => 'en','partner' => $partner]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.profile.seo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['lang' => 'en','partner' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($partner)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </div>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5996464ce2057ee5b38b3f383ca2e441)): ?>
<?php $component = $__componentOriginal5996464ce2057ee5b38b3f383ca2e441; ?>
<?php unset($__componentOriginal5996464ce2057ee5b38b3f383ca2e441); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    </div>

    <input type="hidden" name="id_partner" value="<?php echo e($partner->id_partner); ?>" hidden/>


    <div class="d-flex">
        <button type="submit" class="btn btn-accent mx-3 mb-3 w-100"><?php echo e(__('partner.save')); ?></button>
    </div>
</form>


<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/components/dashboard/profile/company-description.blade.php ENDPATH**/ ?>