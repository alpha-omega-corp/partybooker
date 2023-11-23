<div class="rating-stat">

    <?php if($user->partnerInfo->votes): ?>
        <div class="rating-stat-average">
            <div class="d-flex align-items-center mt-1">
                <ul class="stars">
                    <?php for($i = 1; $i <= 5; $i++): ?>
                        <?php if($user->partnerInfo->average_rate >= $i): ?>
                            <?php echo $__env->make('common.star-selected', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php else: ?>
                            <?php echo $__env->make('common.star', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>
                    <?php endfor; ?>
                </ul>
            </div>
        </div>
        <hr>
    <?php endif; ?>

    <div class="rating-stat-votes">
        <div class="rated">
            <?php for($i = 5; $i > 0; $i--): ?>
                <ul class="stars">
                    <?php for($j = 1; $j <= $i; $j++): ?>
                        <?php echo e(svg('heroicon-m-star')); ?>
                    <?php endfor; ?>
                    <li class="pointed w-100">
                        <div class="d-flex justify-content-end">
                            <div>
                                <span class="fw-bold">
                                    <?php echo e(isset($user->partnerInfo->rateGroup[$i]) ? $user->partnerInfo->rateGroup[$i] : 0); ?>

                                </span>
                                <?php echo e(Str::plural(__('partner.rates'), isset($user->partnerInfo->rateGroup[$i]) ? $user->partnerInfo->rateGroup[$i] : 1)); ?>

                            </div>
                        </div>
                    </li>
                </ul>
            <?php endfor; ?>
        </div>
    </div>


</div>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/web/partner/partials/dashboard/evaluation.blade.php ENDPATH**/ ?>