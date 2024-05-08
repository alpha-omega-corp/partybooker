@extends('main')

@section('title')
    <title>Partners | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <x-card.panel :title="__('admin.contents')" :color="AppColor::PINK" class="app-admin-content">
        <x-app.section>
            @include('app.admin.content.content.index')
        </x-app.section>
    </x-card.panel>
@endsection
