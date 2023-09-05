@extends('main')

@section('page')
    page="blog"
@endsection

@section('title')
    <title>BLOG | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')
    <section class="header not-full">
        @include('common.header-nav')
        <div class="cover abs">
            <img src="/images/home-header-bg.jpg" class="bg abs"
                alt="Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande.">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1>BLOG</h1>
                </div>
            </div>
        </div>
        @include('common.social')
    </section>

    <section class="blog-section">
        <div class="container">
            <div class="row">
                <?php $locale = app()->getLocale() == 'en' ? 'main_img_alt' : 'main_img_alt_fr'; ?>
                @foreach ($blog as $post)
                    <div class="col-lg-4 col-sm-6 p-md-2 blog">

                        <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/blog/' . $post->slug) }}"
                            class="blog-img">
                            <img src="{{ asset('storage/posts/' . $post->main_img) }}" alt="<?php echo $post->$locale; ?>">
                        </a>
                        <div class="post-author-date">
                            By <span>{{ $post->author ? $post->author : 'Admin' }}</span>,
                            {{ date(app()->getLocale() == 'en' ? 'm/d/Y' : 'd/m/Y', strtotime($post->created)) }}
                        </div>
                        @if (app()->getLocale() == 'en')
                            <h6>{{ $post->title_en }}</h6>
                        @else
                            <h6>{{ $post->title_fr }}</h6>
                        @endif
                        <p>
                            @if (app()->getLocale() == 'en')
                                {{ $post->article_en }}
                            @else
                                {{ $post->article_fr }}
                            @endif
                        </p>

                        <div class="sharing-wrapper">
                            <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/blog/' . $post->slug) }}"
                                class="btn-read-more">Read more</a>
                            <div id="share">
                                <a class="facebook"
                                    href="https://www.facebook.com/sharer/sharer.php?u={{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/blog/' . $post->slug) }}&quote={{ app()->getLocale() == 'en' ? $post->title_en : $post->title_fr }}"
                                    title="Share on Facebook" target="_blank"><i class="icon-facebook"></i></a>
                                <a class="twitter"
                                    href="https://twitter.com/intent/tweet?source={{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/blog/' . $post->slug) }}&text={{ app()->getLocale() == 'en' ? $post->title_en : $post->title_fr }}:{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/blog/' . $post->slug) }}"
                                    target="_blank" title="Tweet"><i class="icon-twitter"></i></a>
                                <a class="linkedin"
                                    href="http://www.linkedin.com/shareArticle?mini=true&url={{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/blog/' . $post->slug) }}&title={{ app()->getLocale() == 'en' ? $post->title_en : $post->title_fr }}&summary=&source={{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/blog/' . $post->slug) }}"
                                    target="_blank" title="Share on LinkedIn"><i class="icon-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
