@extends('main')

@section('title')
    <title>BLOG | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')
    <section class="blog-section">
        <div class="container">
            <h1 class="text-center text-uppercase fw-bold display-1 mb-5">{{__('main.blog_page')}}</h1>
            <div class="row">
                <?php $locale = app()->getLocale() == 'en' ? 'main_img_alt' : 'main_img_alt_fr'; ?>
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-sm-6 p-md-2 blog">
                        <a href="{{url(route('guest.blog.show', ['post' => $post]))}}">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset($post->image) }}"
                                         alt="<?php echo $post->$locale; ?>">
                                </div>

                                <div class="card-body">
                                    <div class="card-author">
                                        <div class="post-author-date">
                                            <span class="text-primary fw-bold">
                                                PartyBooker
                                            </span>

                                            {{$post->created_at->format('d.m.Y')}}
                                        </div>
                                        <hr>
                                    </div>

                                    <div class="text-uppercase text-nowrap text-truncate">
                                        @if (app()->getLocale() == 'en')
                                            <h6 class="fw-bold">{{ $post->title_en }}</h6>
                                        @else
                                            <h6 class="fw-bold">{{ $post->title_fr }}</h6>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                @endforeach
            </div>
        </div>
    </section>
@endsection
