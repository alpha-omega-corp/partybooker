@extends('main')

@section('title')
    <title>BLOG | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')

    <x-card.panel :title="__('home.blog')">
        <x-slot:breadcrumbs>
            {{Breadcrumbs::render('blog')}}
        </x-slot:breadcrumbs>

        <section class="blog">
            <div class="blog-content-card">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-4">
                            <div class="post-card">
                                <a href="{{route('guest.home.post', ['post' => $post])}}">

                                    <div class="post-card-header">
                                        <img src="{{$post->image}}" alt="{{$post->title}}"/>
                                        <h6 class="post-card-title">{{$post->locale->title}}</h6>
                                    </div>
                                </a>
                                <div class="post-card-content">
                                    <div class="post-card-preview">
                                        <p>{{$post->locale->preview}}</p>
                                    </div>

                                    <div class="post-card-date">
                                        {{$post->created_at}}
                                    </div>

                                    <div class="post-card-logo">
                                        <x-logo class="blog-logo-item"/>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </x-card.panel>
@endsection
