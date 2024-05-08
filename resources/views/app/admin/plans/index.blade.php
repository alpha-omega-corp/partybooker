@extends('main')

@section('title')
    <title>Partners | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')

    <x-card.panel :title="__('admin.plans')" :color="AppColor::PINK" class="app-admin-plans">
        <x-app.section>
            @include('app.admin.content.plans.index')
        </x-app.section>
    </x-card.panel>
@endsection
