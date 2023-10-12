@extends('main')

@section('page')
    page="terms"
@endsection

@section('title')
    <title>{{strtoupper(__('main.user_terms'))}} | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <section class="terms-section">
        <div class="container">
            <h1 class="display-6 fw-bold text-center text-uppercase mb-5">
                {{__('main.user_terms')}}
            </h1>

            <div class="shadow-lg terms-list">
                @if (app()->getLocale() == 'en')
                    {!!$en_terms!!}
                @else
                    {!!$fr_terms!!}
                @endif
            </div>

        </div>
    </section>
@endsection
