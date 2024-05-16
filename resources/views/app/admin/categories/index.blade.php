@extends('management')

@section('content')
    <x-card.panel :title="__('nav.admin.categories')">

        <x-slot:breadcrumbs>
            {{Breadcrumbs::render('admin.categories')}}
        </x-slot:breadcrumbs>

        <x-app.section>
            @include('app.admin.content.categories.index')
        </x-app.section>
    </x-card.panel>
@endsection
