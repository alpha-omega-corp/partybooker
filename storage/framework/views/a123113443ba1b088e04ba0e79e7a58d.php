<a href="<?php echo e(Request::server('HTTP_REFERER') ? URL::previous() : url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings'))); ?>"
    class="btn btn-primary">
    <i class="bi bi-arrow-bar-left"></i>
    <?php echo e(__('listing.back')); ?>

</a>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/web/partial/back.blade.php ENDPATH**/ ?>