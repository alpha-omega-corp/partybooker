@extends('main')

@section('title')
    <title>BLOG | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')

    <x-card.panel :title="__('home.post')">
        <x-slot:breadcrumbs>
            {{Breadcrumbs::render('post', $post)}}
        </x-slot:breadcrumbs>

    </x-card.panel>

@endsection
