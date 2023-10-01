<?php if($partners->lastPage() > 1): ?>
    <nav aria-label="listing pagination">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
                <a class="page-link" href="<?php echo e($partners->url(1)); ?>">Previous</a>
            </li>

            <?php for($i = 1; $i <= $partners->lastPage(); $i++): ?>
                <li class="page-item <?php echo e($partners->currentPage() == $i ? ' active' : ''); ?>">
                    <a href="<?php echo e($partners->url($i)); ?>" class="page-link"><?php echo e($i); ?></a>
                </li>
            <?php endfor; ?>

            <?php if($partners->currentPage() != $partners->lastPage()): ?>
                <li class="page-item <?php echo e($partners->currentPage() == $partners->lastPage() ? ' disabled' : ''); ?>">
                    <a href="<?php echo e($partners->url($partners->currentPage() + 1)); ?>" class="page-link">
                        Next
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
<?php endif; ?>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/web/listings/partial/pagination.blade.php ENDPATH**/ ?>