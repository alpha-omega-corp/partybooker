@extends('main')

@section('title')
    <title>Partners | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <x-card.dashboard :title="__('admin.content')">

        <div class="app-admin-content">

            <div class="row">

                <div class="col-6">
                    <x-card :title="__('admin.categories')">
                        @include('app.admin.content.categories.index')
                    </x-card>
                </div>

                <div class="col-6">

                    <div class="d-flex flex-column gap-4">
                        <x-card :title="__('admin.comments')" class="admin-comments">
                            @include('app.admin.content.comments.index')
                        </x-card>

                        <x-card :title="__('admin.information')" class="admin-information">
                            @include('app.admin.content.information.index')
                        </x-card>

                        <x-card :title="__('admin.posts')" class="admin-posts">
                            @include('app.admin.content.posts.index')
                        </x-card>
                    </div>

                </div>

            </div>


        </div>

    </x-card.dashboard>
@endsection
