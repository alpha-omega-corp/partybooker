@extends('main')

@section('content')

    <x-card.panel
        :title="__('nav.blog')"
        class="home-blog"
    >
        <x-app.section>
            <div class="blog-content-card">
                @foreach($posts as $post)
                    <div class="post-card">
                        <div class="post-card-logo">
                            <x-logo :is-link="false" class="blog-logo-item"></x-logo>
                        </div>

                        <a href="{{route(__('route.post'), ['post' => $post->locale->slug])}}">
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
            </div>
        </x-app.section>
    </x-card.panel>
@endsection
