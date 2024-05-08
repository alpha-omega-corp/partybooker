@extends('main')

@section('title')
    <title>Partners | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <x-card.panel :title="__('admin.categories')" :color="AppColor::PINK" class="app-admin-listing">
        <x-app.section>
            @include('app.admin.content.categories.index')
        </x-app.section>
    </x-card.panel>
@endsection
