<div class="d-flex">
    <?php if($settings[0]->facebook): ?>
        <a href="<?php echo e($settings[0]->facebook); ?>" target="_blank">
            <img src="<?php echo e(Vite::image('facebook.svg')); ?>" alt="party-booker-facebook"/>
        </a>
    <?php endif; ?>
    <?php if($settings[0]->linkedin): ?>
        <a href="<?php echo e($settings[0]->linkedin); ?>" target="_blank">
            <img src="<?php echo e(Vite::image('linkedin.svg')); ?>" alt="party-booker-linkedin"/>
        </a>
    <?php endif; ?>
    <?php if($settings[0]->instagram): ?>
        <a href="<?php echo e($settings[0]->instagram); ?>" target="_blank">
            <img src="<?php echo e(Vite::image('instagram.svg')); ?>" alt="party-booker-instagram"/>
        </a>
    <?php endif; ?>
    <?php if($settings[0]->googleplus): ?>
        <a href="<?php echo e($settings[0]->googleplus); ?>" target="_blank">
            <img src="<?php echo e(Vite::image('google.svg')); ?>" alt="party-booker-google"/>
        </a>
    <?php endif; ?>
    <?php if($settings[0]->twitter): ?>
        <a href="<?php echo e($settings[0]->twitter); ?>" target="_blank">
            <img src="<?php echo e(Vite::image('twitter.svg')); ?>" alt="party-booker-twitter"/>
        </a>
    <?php endif; ?>


</div>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/common/social.blade.php ENDPATH**/ ?>