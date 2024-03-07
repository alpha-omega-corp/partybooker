@extends('main')


@section('title')
    <title>Admin Listing</title>
@endsection

@section('content')
    <div class="admin-category">
        <x-card.dashboard :title="__('admin.categories')">
            <x-tab.locale>
                <x-slot:french>
                    @include('app.admin.category.partials.locale', ['lang' => Language::FR])
                </x-slot:french>

                <x-slot:english>
                    @include('app.admin.category.partials.locale', ['lang' => Language::EN])
                </x-slot:english>
            </x-tab.locale>

            @include('app.admin.category.partials.edit')
        </x-card.dashboard>
    </div>
@endsection
