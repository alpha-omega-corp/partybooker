<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" <?php echo $__env->yieldContent('page'); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php echo $__env->yieldContent('title'); ?>
    <?php echo $__env->yieldPushContent('header'); ?>

    <script>
        function openModalPrevent(modal) {
            !$('#' + modal).is(':visible') ? document.getElementById(modal + '-button').click() : ''
        }

        function targetMany(targets) {
            if (JSON.parse(targets)) {
                JSON.parse(targets).forEach(target => {
                    if (target) {
                        document.getElementById(target) !== null ? document.getElementById(target).click() : ''
                    }
                })
            }

        }
    </script>

    <script src="https://cdn.tiny.cloud/1/<?php echo e(config('app.tinymce')); ?>/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>

    <script src="<?php echo e(asset('/js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/jquery.mask.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/script.js')); ?>" defer></script>

    <script src="<?php echo e(asset('/plugins/kendo/kendo.all.min.js')); ?>"></script>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
    <?php echo \Filament\Support\Facades\FilamentAsset::renderStyles() ?>
</head>
<body class="body">
<?php echo $__env->make('common.header-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="main-content">
    <?php use App\Http\Middleware\LocaleMiddleware; ?>

    <section class="general-section partner-cp" data-type="<?php echo e(Auth::user()->type); ?>">
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app-notifications','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-notifications'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

        <div class="container">
            <div class="dashboard-container w-100 shadow-lg">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </section>

    <?php echo $__env->make('common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>
</body>

</html>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/web/main.blade.php ENDPATH**/ ?>