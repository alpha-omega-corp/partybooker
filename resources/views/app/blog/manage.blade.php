@extends('admin.admin')

@section('page')
    page="blog"
@endsection

@section('title')
    <title>{{ __('partybooker-cp.blog')}} | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <div class="container">
        <x-utils.card title="Blog">
            @include('app.blog.partials.create')
            @include('app.blog.partials.table')
        </x-utils.card>
    </div>
@endsection
