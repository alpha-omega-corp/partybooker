<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" <?php echo $__env->yieldContent('page'); ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <?php if(env('APP_ENV') == 'production'): ?>
        <!-- Google Analytics -->
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-54557878-1', 'auto');
            ga('send', 'pageview');
        </script>
        <!-- Google Analytics -->
    <?php endif; ?>

    <?php echo $__env->yieldContent('title'); ?>
    <?php echo $__env->yieldPushContent('header'); ?>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>

</head>

<body class="body">
    <?php echo $__env->make('common.header-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <section>
        <?php echo $__env->make('common.cookies', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>

</body>

<?php echo $__env->yieldPushContent('footer'); ?>

</html>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/main.blade.php ENDPATH**/ ?>