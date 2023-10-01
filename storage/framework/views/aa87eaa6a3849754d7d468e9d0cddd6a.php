<div class="modal fade" id="registerModalToggle" aria-hidden="true" aria-labelledby="register" tabindex="-1">
    <form method="POST" action="<?php echo e(route('register')); ?>">

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-uppercase fw-bold text-primary" id="register">
                        <?php echo e(__('main.register')); ?>

                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <?php echo csrf_field(); ?>

                    <?php echo csrf_field(); ?>

                    <div class="form-floating mb-3">
                        <input type="text" name="name"
                            class="form-control <?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" id="email"
                            value="<?php echo e(old('name')); ?>" required autofocus>
                        <label for="name">
                            Username
                        </label>
                        <?php if($errors->has('name')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('name')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" name="email"
                            class="form-control <?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" id="email"
                            value="<?php echo e(old('name')); ?>" required>
                        <label for="name">
                            Email
                        </label>
                        <?php if($errors->has('name')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('name')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"
                            id="password" name="password" required>
                        <label for="password">Password</label>
                        <?php if($errors->has('password')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="form-floating">
                        <input type="password"
                            class="form-control <?php echo e($errors->has('password_repeat') ? ' is-invalid' : ''); ?>"
                            id="password-repeat" name="password_repeat" required>
                        <label for="password-repeat">
                            Password Confirmation
                        </label>
                        <?php if($errors->has('password_repeat')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('password_repeat')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="modal-footer hstack">
                    <div>
                        <button type="submit" class="btn btn-primary text-white">
                            <?php echo e(__('main.register')); ?>

                        </button>
                    </div>
                    <div class="ms-auto">
                        <button class="btn btn-secondary" data-bs-target="#loginModalToggle" data-bs-toggle="modal">
                            <?php echo e(__('main.login')); ?>

                        </button>
                    </div>
                    <div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <?php echo e(__('main.close')); ?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/auth/register.blade.php ENDPATH**/ ?>