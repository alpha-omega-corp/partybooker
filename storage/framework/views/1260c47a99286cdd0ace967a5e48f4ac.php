<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
'gallery',
'user'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
'gallery',
'user'
]); ?>
<?php foreach (array_filter(([
'gallery',
'user'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="gallery position-relative">
    <?php $locale = app()->getLocale(); ?>
    <a type="button" class="dashboard-modal-button rounded-circle shadow-lg" data-tippy-content="<?php echo e(__('partner.edit')); ?>"
       data-bs-toggle="modal"
       id="galleryModal-button"
       data-bs-target="#galleryModal">
        <?php echo e(svg('heroicon-o-photo')); ?>
    </a>

    <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $images = count($data['images']) === 0 ? count($data['images']) : count($data['images']) - 1;
            $allowed = $data['count'];
        ?>

        <div class="imgNumber p-4" data-max="<?php echo e($data['count'] - 1); ?>">
            <p class="fw-bold text-center"><?php echo e($images . ' / ' . $allowed); ?></p>
        </div>

        <div class="d-flex flex-wrap justify-content-center">

            <?php if(count($data['images']) > 0): ?>
                <?php $__currentLoopData = $data['images']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(!$img['is_main']): ?>
                        <div class="gallery-item">
                            <img src="<?php echo e(asset('storage/images/'.$img['image_name'])); ?>"
                                 data-imageId="<?php echo e($img['id']); ?>"
                                 alt="<?php echo e($img['image_alt_'.$locale]); ?>"
                            />

                            <div class="delete-gallery-image">
                                <div class="del btn btn-danger"
                                     data-img="<?php echo e($img['image_name']); ?>"
                                     data-image-id="<?php echo e($img['id']); ?>"
                                     data-id="<?php echo e($user->id_partner); ?>">
                                    <?php echo e(svg('heroicon-o-trash')); ?>
                                </div>
                            </div>

                            <div class="edit-gallery-image">
                                <div class="btn btn-accent edit-gallery-button"
                                     x-data="{modal: 'editImageSeo<?php echo e($key); ?>'}"
                                     @click="openModalPrevent(modal)"
                                     data-tippy-content="SEO">

                                    <?php echo e(svg('heroicon-o-pencil-square')); ?>
                                </div>
                            </div>
                        </div>

                        <div class="image-alt-card">
                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.modal','data' => ['id' => 'editImageSeo'.e($key).'','button' => __('partner.edit'),'size' => 'modal-md','title' => 'SEO Image','hasButton' => false,'action' => route(\Illuminate\Support\Facades\Auth::user()->type == 'admin' ? 'alt.update.admin' : 'alt.update'),'method' => 'POST']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'editImageSeo'.e($key).'','button' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('partner.edit')),'size' => 'modal-md','title' => 'SEO Image','has-button' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route(\Illuminate\Support\Facades\Auth::user()->type == 'admin' ? 'alt.update.admin' : 'alt.update')),'method' => 'POST']); ?>
                                <div class="text-gray">

                                    <div class="d-flex justify-content-center">
                                        <div class="gallery-item">
                                            <img src="<?php echo e(asset('storage/images/'.$img['image_name'])); ?>"
                                                 data-imageId="<?php echo e($img['id']); ?>"
                                                 alt="<?php echo e($img['image_alt_'.$locale]); ?>"
                                                 width="200"
                                            />
                                        </div>

                                    </div>

                                    <input type="hidden" name="imageId" value="<?php echo e($img['id']); ?>"/>
                                    <input type="hidden" name="partnerId" value="<?php echo e($user->id_partner); ?>"/>
                                    <div class="d-flex align-items-center">
                                        <img src="<?php echo e(Vite::image('icons/uk-flag.svg')); ?>" class="flag-alt" alt="SEO"/>
                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.input','data' => ['name' => 'alt_fr','placeholder' => 'Description','value' => $img['image_alt_en'],'icon' => 'heroicon-o-megaphone']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'alt_fr','placeholder' => 'Description','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($img['image_alt_en']),'icon' => 'heroicon-o-megaphone']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <img src="<?php echo e(Vite::image('icons/france.svg')); ?>" class="flag-alt" alt="SEO"/>
                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.input','data' => ['name' => 'alt_en','placeholder' => 'Description','value' => $img['image_alt_fr'],'icon' => 'heroicon-o-megaphone']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'alt_en','placeholder' => 'Description','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($img['image_alt_fr']),'icon' => 'heroicon-o-megaphone']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                    </div>

                                </div>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/components/dashboard/profile/gallery.blade.php ENDPATH**/ ?>