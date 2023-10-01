<div class="socials bg-primary">

    <?php if(isset($settings)): ?>
        <?php if($settings[0]->facebook): ?>
            <a href="<?php echo e($settings[0]->facebook); ?>" target="_blank"><i class="icon-facebook"></i></a>
        <?php endif; ?>
        <?php if($settings[0]->linkedin): ?>
            <a href="<?php echo e($settings[0]->linkedin); ?>" target="_blank"><i class="icon-linkedin"></i></a>
        <?php endif; ?>
        <?php if($settings[0]->instagram): ?>
            <a href="<?php echo e($settings[0]->instagram); ?>" target="_blank"><i class="icon-instagram "></i></a>
        <?php endif; ?>
        <?php if($settings[0]->googleplus): ?>
            <a href="<?php echo e($settings[0]->googleplus); ?>" target="_blank"><i class="icon-googleplus "></i></a>
        <?php endif; ?>
        <?php if($settings[0]->twitter): ?>
            <a href="<?php echo e($settings[0]->twitter); ?>" target="_blank"><i class="icon-twitter "></i></a>
        <?php endif; ?>
    <?php endif; ?>

</div>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/common/social.blade.php ENDPATH**/ ?>