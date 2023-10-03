@props([
    'tooltip'
])

<a href="{{ Request::server('HTTP_REFERER') ? URL::previous() : url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings')) }}"
   class="btn btn-primary back-page d-flex w-100" data-tippy-content="{{ $tooltip }}">
    @svg('heroicon-o-backward')
</a>
