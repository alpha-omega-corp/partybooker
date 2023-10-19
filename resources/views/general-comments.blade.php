@extends('main')

@section('page')
    page="comments"
@endsection

@section('title')
    <title>{{strtoupper(__('about.about_us'))}} | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <div class="comments">
        <p>{{__('comments.item-1')}}</p>
        <p>{{__('comments.item-2')}}</p>
        <p>{{__('comments.item-3')}}</p>
        <p>{{__('comments.item-4')}}</p>
    </div>
@endsection
