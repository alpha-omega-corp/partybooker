<div class="modal fade" id="loginModalToggle" aria-hidden="true" aria-labelledby="login" tabindex="-1">
    <form method="POST" action="<?php echo e(route('login')); ?>">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-uppercase fw-bold text-primary" id="login">
                        <?php echo e(__('main.login')); ?>

                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php echo csrf_field(); ?>

                    <div class="mb-5">
                        <h6 class="text-dark text-uppercase fw-bold text-center"><?php echo e(__('login.log')); ?></h6>

                        <div class="d-flex justify-content-center">
                            <div>
                                <a href="/auth/redirect/google">
                                    <img src="<?php echo e(Vite::image('google.svg')); ?>" alt="google-login" width="30px"
                                         height="30px"/>
                                </a>
                                <a href="/auth/redirect/facebook">
                                    <img src="<?php echo e(Vite::image('facebook.svg')); ?>" alt="facebook-login" width="30px"
                                         height="30px"/>
                                </a>
                            </div>
                            
                        </div>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="email" name="email"
                               class="form-control <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" id="email"
                               value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                        <label for="email">Email address</label>
                        <?php if($errors->has('email')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"
                               id="password" name="password" required autocomplete="current-password">
                        <label for="password">Password</label>
                        <?php if($errors->has('password')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>

                    <?php if(Route::has('password.request')): ?>
                        <div class="text-end">
                            <a class="text-primary" href="<?php echo e(route('password.request')); ?>">
                                <?php echo e(__('login.forgot')); ?>

                            </a>
                        </div>
                    <?php endif; ?>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" name="remember" id="remember"
                               checked hidden>
                        <label class="form-check-label" for="remember">

                        </label>
                    </div>
                </div>
                <div class="modal-footer hstack">
                    <div>
                        <button type="submit" class="btn btn-primary text-white">
                            <?php echo e(__('main.login')); ?>

                        </button>
                    </div>
                    <div class="ms-auto">
                        <button type="button" class="btn btn-secondary" data-bs-target="#registerModalToggle"
                                data-bs-toggle="modal">
                            <?php echo e(__('main.register')); ?>

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
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/auth/login.blade.php ENDPATH**/ ?>