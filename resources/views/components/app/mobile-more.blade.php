@props([
    'route'
])

<div class="mobile-more">
    <a href="{{$route}}" class="btn btn-secondary text-center w-100 p-3">
        <div class="d-flex justify-content-between">
            <span class="text-uppercase fw-bold">{{__('app.mobile-more')}}</span>
            @svg('heroicon-o-chevron-right')
        </div>
    </a>

</div>
