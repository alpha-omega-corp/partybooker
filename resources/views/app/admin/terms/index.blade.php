@extends('main')

@section('title')
    <title>Partners | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <x-card.panel :title="__('admin.terms')">
        <!-- Service Terms -->
        @php($item = $content[AppContentType::SERVICE_TERMS->name])
        @include('app.admin.content.content.partials.edit')

        {{$item->locale->title}}
        {{$item->locale->content}}

        <!-- User Terms -->
        @php($item = $content[AppContentType::USER_TERMS->name])
        @include('app.admin.content.content.partials.edit')

        {{$item->locale->title}}
        {{$item->locale->content}}
    </x-card.panel>
@endsection

