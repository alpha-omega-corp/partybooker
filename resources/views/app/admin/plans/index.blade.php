@extends('management')

@section('content')

    <x-card.panel :title="__('nav.admin.plans')" class="app-admin-plans">
        <x-slot:breadcrumbs>
            {{Breadcrumbs::render('admin.plans')}}
        </x-slot:breadcrumbs>

        <x-app.section>
            @include('app.admin.content.plans.index')
        </x-app.section>
    </x-card.panel>
@endsection
