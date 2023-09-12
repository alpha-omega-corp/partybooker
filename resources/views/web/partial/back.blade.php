<a href="{{ Request::server('HTTP_REFERER') ? URL::previous() : url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings')) }}"
    class="btn btn-primary">
    <i class="bi bi-arrow-bar-left"></i>
    {{ __('listing.back') }}
</a>
