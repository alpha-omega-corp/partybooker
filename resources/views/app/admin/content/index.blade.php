@extends('main')

@section('title')
    <title>Partners | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <x-card.panel :title="__('admin.contents')" :color="AppColor::PINK" class="app-admin-content">
        @include('app.admin.content.content.index')
    </x-card.panel>
@endsection
