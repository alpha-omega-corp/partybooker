@extends('main')

@section('page')
    page="listing"
@endsection

@section('title')
    <title>{{ strtoupper(__('service.listings')) }} | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')
    <section class="listing">
        <div class="p-relative">
            <div class="container">
                <h1 class="display-1 fw-bold text-uppercase">
                    @if (isset($current))
                        {{ __('categories.' . $current->code) }}
                    @else
                        {{ __('service.listings') }}
                    @endif
                </h1>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        @if (!isset($current))
                            <li class="breadcrumb-item">
                                <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/') }}">
                                    <i class="bi bi-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active text-uppercase" aria-current="page">
                                <a href="#">{{ __('service.listings') }}</a>
                            </li>
                        @endif
                    </ol>
                </nav>

                <section>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-0">
                            <div class="hide-medium">
                                <h6 class="text-uppercase text-center fw-bold fs-2 filter-title">
                                    {{ __('main.category') }}
                                </h6>

                                <ul class="list-group category-filters">
                                    @foreach ($categories as $c)
                                        <li data-catfil="{{ $c->code }}"
                                            class="list-group-item list-group-item-parent">
                                            <a
                                                href="{{ url(\App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $c->lang->slug) }}">
                                                {{ $c->lang->name }}
                                            </a>
                                        </li>

                                        @foreach ($c->subcategories as $sub)
                                            <li data-catfil="{{ $sub->code }}"
                                                class="list-group-item list-group-item-child ">
                                                <a class="link-underline link-underline-primary text-truncate"
                                                    href="{{ url(\App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $c->lang->slug . '/' . $sub->lang->slug) }}">
                                                    {{ $sub->lang->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-7 col-11">
                            <section class="partner-listing">
                                @include('web.listings.partial.partial-list')
                            </section>
                        </div>

                        <div class="col-1">
                            <div class="filters hide-filters-lg-breakpoint">
                                <div class="hide-not-medium">
                                    @include('web.common.category-filter')
                                </div>




                                <div class="d-flex justify-content-end">
                                    @include('web.common.event-types-filter')
                                </div>

                                <div class="d-flex justify-content-end">
                                    @include('web.listings.partial.budget-filter')
                                </div>

                                <div class="d-flex justify-content-end">
                                    <a href="{{ request()->url() }}"
                                        class="btn btn-labeled btn-danger text-uppercase reset-filters">
                                        <span class="btn-label">
                                            <i class="bi bi-recycle"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                </section>
            </div>


            @include('web.listings.partial.pagination')



        </div>
    </section>
@endsection
