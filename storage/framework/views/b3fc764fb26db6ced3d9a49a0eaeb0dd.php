<?php use App\Models\Advert; ?>

<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'partner',
    'activeOptions',
    'partnerCategories',
    'categories',
    'partnerOptions',
    'user',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'partner',
    'activeOptions',
    'partnerCategories',
    'categories',
    'partnerOptions',
    'user',
]); ?>
<?php foreach (array_filter(([
    'partner',
    'activeOptions',
    'partnerCategories',
    'categories',
    'partnerOptions',
    'user',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div>
    <?php echo $__env->make('web.partner.popup.edit-category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(count($partnerCategories) === 0): ?>
        <br>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.card-info','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.card-info'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php echo e(__('partner.choose_category')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php $__currentLoopData = $activeOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($item['group'] === $partner->plan_option_group): ?>
            <div class="option-active-content">
                <?php $__currentLoopData = $partnerCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iterator => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $advert = Advert::where('partners_info_id', $partner->id)
                        ->where('view_name', $category->form_name)->first();
                    ?>

                    <?php if(!$advert): ?>

                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.card-info','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.card-info'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <br>
                            <?php echo e(__('form.unknown_active_category')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    <?php else: ?>
                        <div wire:key="<?php echo e($iterator); ?>">
                            <div class="category-option-card position-relative mt-3"
                                 x-data="{show: false}">

                                <div class="text-uppercase fw-bold text-start w-100 p-2">
                                    <?php echo e($category->lang->name); ?>

                                </div>

                                <ul class="text-start category-option-ul">
                                    <ul>
                                        <?php $__currentLoopData = $category->subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($sub->lang->name); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </ul>

                                <?php if($advert->status == Advert::STATUS_DRAFT): ?>
                                    <hr>
                                    <?php switch($advert->view_name):
                                        case ('event-place'): ?>
                                            <?php break; ?>

                                        <?php case ('caterer'): ?>
                                            <?php ($action = Auth::user()->type == 'admin'
                                                ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/caterer')
                                                : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/caterer')
                                            ); ?> <?php break; ?>

                                        <?php case ('wine'): ?>
                                            <?php ($action = Auth::user()->type == 'admin'
                                                ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/wine-lovers')
                                                : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/wine-lovers')
                                            ); ?> <?php break; ?>

                                        <?php case ('equipment'): ?>
                                            <?php ($action = Auth::user()->type == 'admin'
                                                ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/equipment')
                                                : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/equipment')
                                            ); ?> <?php break; ?>

                                        <?php case ('entertainment'): ?>
                                            <?php ($action = Auth::user()->type == 'admin'
                                                ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/entertainment')
                                                : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/entertainment')
                                            ); ?> <?php break; ?>
                                    <?php endswitch; ?>

                                    <a class="show" id="<?php echo e('create' . $iterator); ?>"
                                       href="<?php echo e(route('create-' . $advert->view_name, [
                                   'partnerId' => $partner->id_partner,
                                   'advertId' => $advert->id
                                   ])); ?>">
                                        <?php echo e(__('partner.create_new_service')); ?>

                                    </a>

                                <?php else: ?>

                                    <hr>

                                    <div x-show="show">
                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partner.service-details','data' => ['advert' => $advert,'partner' => $partner,'iterator' => $iterator]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partner.service-details'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['advert' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($advert),'partner' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($partner),'iterator' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($iterator)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                    </div>

                                    <a class="show" x-show="!show"
                                       @click="show = true">
                                        <?php echo e(__('form.show')); ?>

                                    </a>

                                    <a class="show" x-show="show"
                                       @click="show = false;">
                                        <span><?php echo e(__('form.hide')); ?></span>
                                    </a>

                                    <div class="edit-service">
                                        <a id="<?php echo e('create' . $iterator); ?>"
                                           href="<?php echo e(route('create-' . $advert->view_name, [
                                   'partnerId' => $partner->id_partner,
                                   'advertId' => $advert->id
                                   ])); ?>">
                                            <?php echo e(svg('heroicon-o-cog-6-tooth')); ?>
                                        </a>
                                    </div>

                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(!$loop->last): ?>
                        <hr>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/components/dashboard/profile/category.blade.php ENDPATH**/ ?>