@extends('main')

@section('title')
    <title>Partners | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')

    <x-card.panel :title="__('admin.plans')" class="app-admin-plans">
        @include('app.admin.content.plans.index')
    </x-card.panel>
@endsection
