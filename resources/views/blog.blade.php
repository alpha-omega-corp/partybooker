@extends('main')

@section('page')
    page="blog"
@endsection

@section('title')
    <title>BLOG | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')
    <section class="blog-section">
        <div class="container">
            <h1 class="text-center text-uppercase fw-bold display-1 mb-5">{{__('main.blog_page')}}</h1>
            <div class="row">
                <?php $locale = app()->getLocale() == 'en' ? 'main_img_alt' : 'main_img_alt_fr'; ?>
                @foreach ($blog as $post)
                    <div class="col-lg-4 col-sm-6 p-md-2 blog">

                        <div class="card">
                            <div class="card-img">
                                @if($post->main_img === 'null')
                                    <img src="//via.placeholder.com/500x500/fc0?text=6" alt="...">
                                @else
                                    <img src="{{ asset('storage/posts/' . $post->main_img) }}"
                                         alt="<?php echo $post->$locale; ?>">
                                @endif
                            </div>

                            <div class="card-body">
                                <div class="post-author-date">
                                    By <span
                                        class="text-primary fw-bold">{{ $post->author ? $post->author : 'Admin' }}</span>,
                                    {{ date(app()->getLocale() == 'en' ? 'm/d/Y' : 'd/m/Y', strtotime($post->created)) }}
                                </div>
                                <div class="text-uppercase mt-1">
                                    @if (app()->getLocale() == 'en')
                                        <h6 class="fw-bold">{{ $post->title_en }}</h6>
                                    @else
                                        <h6 class="fw-bold">{{ $post->title_fr }}</h6>
                                    @endif
                                </div>

                                <hr>
                                <p>
                                    @if (app()->getLocale() == 'en')
                                        {{ $post->article_en }}
                                    @else
                                        {{ $post->article_fr }}
                                    @endif
                                </p>

                                <div class="sharing-wrapper">
                                    <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/blog/' . $post->slug) }}"
                                       class="btn btn-primary">Read more</a>
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
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
