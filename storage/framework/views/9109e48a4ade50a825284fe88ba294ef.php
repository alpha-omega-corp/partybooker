<?php use App\Http\Middleware\LocaleMiddleware; ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'partner',
    'service'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'partner',
    'service'
]); ?>
<?php foreach (array_filter(([
    'partner',
    'service'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.card','data' => ['title' => $partner->fr_company_name]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($partner->fr_company_name)]); ?>
     <?php $__env->slot('badge', null, []); ?> 
        <?php if($partner->public == 0): ?>
            <span
                class="status-badge badge text-bg-danger text-white"><?php echo e(__('partner.not_published')); ?></span>
        <?php else: ?>
            <span
                class="status-badge badge text-bg-primary text-white"><?php echo e(__('partner.published')); ?></span>
        <?php endif; ?>
     <?php $__env->endSlot(); ?>

    <?php if($service->canPublish($partner->id_partner) || \Illuminate\Support\Facades\Auth::user()->type === 'admin'): ?>
        <div class="d-flex flex-column m-0">
            <?php if($partner->public == 0): ?>
                <a class="status-button text-primary shadow-lg" role="button"
                   data-id="<?php echo e($partner->id_partner); ?>">
                    <?php echo e(__('partner.publish')); ?>

                </a>
            <?php else: ?>
                <a class="status-button text-danger shadow-lg" role="button"
                   data-id="<?php echo e($partner->id_partner); ?>">
                    <?php echo e(__('partner.draft')); ?>

                </a>
            <?php endif; ?>
        </div>

    <?php endif; ?>

    <hr>
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.company-info','data' => ['tooltip' => __('partner.link'),'icon' => 'heroicon-o-globe-alt']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.company-info'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tooltip' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('partner.link')),'icon' => 'heroicon-o-globe-alt']); ?>
        <a target="_blank" class="text-gray"
           href="<?php echo e(url(LocaleMiddleware::getLocale() . '/' . __('urls.listing') . '/' . $partner->slug)); ?>">
            <?php echo e('partybooker.ch/' . __('urls.listing') . '/' . $partner->slug); ?>

        </a>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

<script type="module">
    $('.status-button').on('click', function (e) {
        e.preventDefault();
        if (!$(this).hasClass('disabled')) {
            $('.dashboard-card-badge .status-badge').removeClass('text-bg-primary').removeClass('text-bg-danger');
            $('.status-button').removeClass('text-danger').removeClass('text-primary');

            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            var id = $(this).data('id');
            var admin = $('.partner-cp').data('type');
            if (admin == 'admin') {
                var url = '/cp/partner-cp/publish';
            } else {
                var url = '/partner-cp/publish';
            }
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _token: CSRF_TOKEN,
                    id_partner: id
                },
                success: function (data) {
                    $('.status-button').html(data.msg);
                    $('.dashboard-card-badge .status-badge').html(data.stat);

                    if (data.status) {
                        $('.dashboard-card-badge .status-badge').addClass('text-bg-primary');
                        $('.status-button').addClass('text-danger');
                    } else {
                        $('.dashboard-card-badge .status-badge').addClass('text-bg-danger');
                        $('.status-button').addClass('text-primary');

                    }


                }
            });
        }
    });
</script>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/components/dashboard/profile/publish.blade.php ENDPATH**/ ?>