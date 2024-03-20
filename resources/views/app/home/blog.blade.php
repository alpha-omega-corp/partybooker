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
                        <div class="col-3">
                            <div class="post-card">
                                <div class="post-card-header">
                                    <img src="{{$post->image}}" alt="{{$post->title}}"/>
                                </div>

                                <div class="post-card-content">
                                    {{$post->locale->title}}
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>

            </div>
        </section>
    </x-card.panel>
@endsection
