<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" <?php echo $__env->yieldContent('page'); ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <?php echo $__env->yieldContent('title'); ?>

    <!-- Styles -->
    <link href="<?php echo e(asset('dist/admin.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('dist/legacy.css')); ?>" rel="stylesheet">

    <?php echo $__env->yieldContent('summernote-css'); ?>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/admin.js')); ?>"></script>
    <?php echo $__env->yieldContent('summernote-js'); ?>
    <?php echo $__env->yieldContent('bootstrap-js'); ?>
    <script src="<?php echo e(asset('js/jquery.mask.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('head'); ?>
</head>

<body class="body">

    <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldPushContent('footer'); ?>
</body>

</html>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/admin/admin.blade.php ENDPATH**/ ?>