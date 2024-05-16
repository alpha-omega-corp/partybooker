@extends('main')

@section('content')
    <x-card.panel :title="__('home.post')">
        <x-slot:breadcrumbs>
            {{Breadcrumbs::render('post', $post)}}
        </x-slot:breadcrumbs>

        <article>
            <x-app.section class="app-post">
                <div class="app-post-image">
                    <img src="{{asset($post->image)}}" alt="{{$post->locale->title}}" width="500" height="500">
                </div>

                <div class="app-post-content">
                    {!! $post->locale->content !!}
                </div>
            </x-app.section>
        </article>

    </x-card.panel>
@endsection
