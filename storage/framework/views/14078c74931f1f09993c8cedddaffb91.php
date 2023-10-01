<div class="btn-group dropstart">
    <button class="btn btn-labeled btn-primary text-uppercase" data-bs-toggle="dropdown" data-bs-display="static"
        aria-expanded="false">
        <span class="btn-label">
            <?php echo e(svg('heroicon-o-tag')); ?>
        </span>
        <span class="btn-text">
            <?php echo e(__('main.event-types')); ?>

        </span>
    </button>
    <ul class="dropdown-menu">
        <form action="<?php echo e($partners->url(1)); ?>" class="event-types">
            <?php $__currentLoopData = $eventTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $et): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="dropdown-item">
                    <div class="form-check form-switch" x-data=""
                        @click.debounce.100ms="document.getElementById('etSubmit').click()">
                        <input class="form-check-input" type="checkbox" role="switch" id="<?php echo e('eventType-' . $key); ?>"
                            <?php if(\Request::has('event_types') && in_array($et['slug'], \Request::get('event_types'))): ?> checked <?php endif; ?> name="event_types[]"
                            value="<?php echo e($et['slug']); ?>" />
                        <label class="form-check-label" for="<?php echo e('eventType-' . $key); ?>" x-data=""
                            @click.debounce.100ms="document.getElementById('etSubmit').click()">
                            <?php echo e($et['name']); ?>

                        </label>
                    </div>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <button id="etSubmit" type="submit" x-cloak></button>
        </form>
    </ul>
</div>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/web/common/event-types-filter.blade.php ENDPATH**/ ?>