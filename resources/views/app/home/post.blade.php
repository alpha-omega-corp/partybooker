@extends('main')

@section('title')
    <title>BLOG | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')

    <x-card.panel :title="__('home.post')">
        <x-slot:breadcrumbs>
            {{Breadcrumbs::render('post', $post)}}
        </x-slot:breadcrumbs>

        <div class="app-post">
            <div class="app-post-image">
                <img src="{{asset($post->image)}}" alt="post image">
            </div>

            <div class="app-post-content">
                {!! $post->locale->content !!}
            </div>
        </div>

    </x-card.panel>

@endsection
