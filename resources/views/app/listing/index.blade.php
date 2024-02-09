@extends('main')

@section('title')
    <title>{{ strtoupper(__('service.listings')) }} | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')
    <div class="p-relative listing">
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
                            <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . 'home.blade.php/') }}">
                                @svg('heroicon-o-home')
                            </a>
                        </li>
                        @foreach(Request::segments() as $breadcrumb)
                            <li class="breadcrumb-item active text-uppercase" aria-current="page">
                                <a href="{{config('app.url') . 'home.blade.php/'}}">
                                    {{str_replace('-', ' ', $breadcrumb)}}
                                </a>
                            </li>
                        @endforeach
                    @endif
                </ol>
            </nav>

            <hr>

            @include('app.listing.partials.listing')
        </div>

    </div>
@endsection
