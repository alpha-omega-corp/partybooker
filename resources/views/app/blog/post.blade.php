@extends('main')

@section('page')
    page="blog"
@endsection

@section('title')
    @if (app()->getLocale() == 'en')
        <title>{{$post->title_en}} | {{ __('partybooker-cp.www')}}</title>
    @else
        <title>{{$post->title_fr}} | {{ __('partybooker-cp.www')}}</title>
    @endif
@endsection

@section('content')
    <section class="post-section">
        <div class="container">
            <div class="text-uppercase fw-bold">
                @if (app()->getLocale() == 'en')
                    <h1 class="m-145">{{$post->title_en}}</h1>
                @else
                    <h1 class="m-145">{{$post->title_fr}}</h1>
                @endif
            </div>

            <br>
            <div class="row">
                <div class="col-md-11 col-lg-10">
                    <img class="right-img" src="{{ asset($post->image) }}" alt="">

                    @if (app()->getLocale() == 'en')
                        {!!$post->content_en!!}
                    @else
                        {!!$post->content_fr!!}
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
