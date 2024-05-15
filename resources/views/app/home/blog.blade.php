@extends('main')

@section('content')

    <x-card.panel
        :title="__('home.blog')"
        class="home-blog"
    >
        <x-slot:breadcrumbs>
            {{Breadcrumbs::render('blog', Request::segments())}}
        </x-slot:breadcrumbs>

        <x-app.section class="blog-content-card">
            @foreach($posts as $post)
                <div class="post-card">
                    <div class="post-card-logo">
                        <x-logo :is-link="false" class="blog-logo-item"></x-logo>
                    </div>

                    <a href="{{route(__('route.post'), ['post' => $post->locale])}}">
                        <div class="post-card-header">
                            <img src="{{$post->image}}" alt="{{$post->title}}"/>
                            <h6 class="post-card-title">{{$post->locale->title}}</h6>
                        </div>

                        <div class="post-card-content">
                            <div class="post-card-date">
                                {{$post->created_at}}
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </x-app.section>
    </x-card.panel>
@endsection
