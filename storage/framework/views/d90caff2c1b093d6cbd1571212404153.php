<?php if(!isset($_COOKIE['cookies-policy'])): ?>
    <div class="cookies-container">
        <div x-data="cookies" x-show="open" class="cookies">
            <div class="container text-center">
                <div class="row">
                    <div class="col-2 my-auto mx-auto">
                        <img src="<?php echo e(asset('images/cookie.svg')); ?>" alt="Accept cookies" class="my-auto" />
                    </div>
                    <div class="col-10">
                        <p class="text-start">
                            <?php echo e(__('main.cookies_text')); ?>

                        </p>
                        <div class="d-flex gap-2" aria-label="Cookies">
                            <button @click="accept" class="btn btn-primary">
                                <?php echo e(__('main.cookies_accept')); ?>

                            </button>

                            <a href="<?php echo e(url(\App\Http\Middleware\LocaleMiddleware::getLocale() . '/user-terms')); ?>">
                                <button type="button" CLASS="btn btn-info">
                                    <?php echo e(__('main.cookies_info')); ?>

                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('cookies', () => ({
            open: true,

            accept() {
                this.open = false;
                createCookie("cookies-policy", 1, 350);
            }
        }))
    })

    function createCookie(name, value, days) {
        var expires;

        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toGMTString();
        } else {
            expires = "";
        }
        document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + expires + "; path=/";
    }
</script>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/common/cookies.blade.php ENDPATH**/ ?>