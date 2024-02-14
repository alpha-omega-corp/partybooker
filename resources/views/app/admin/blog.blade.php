@extends('main')

@section('title')
    <title>{{ __('partybooker-cp.blog')}} | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <div class="container p-5">
        <x.card title="Blog">
            @include('app.blog.partials.create')
            @include('app.blog.partials.table')
        </x.card>
    </div>
@endsection
