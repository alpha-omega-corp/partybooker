@extends('main')

@section('title')
    <title>Partners | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <x-card.dashboard :title="__('admin.content')">

        <div class="app-admin-content">

            <div class="row">

                <div class="col-6">
                    <div class="d-flex flex-column gap-4">
                        <x-card :title="__('admin.categories')">
                            @include('app.admin.content.categories.index')
                        </x-card>

                        <x-card :title="__('admin.posts')" class="admin-posts">
                            @include('app.admin.content.posts.index')
                        </x-card>

                        <x-card :title="__('admin.usp')" class="admin-usp">
                            @include('app.admin.content.usp.index')
                        </x-card>
                    </div>
                </div>

                <div class="col-6">

                    <div class="d-flex flex-column gap-4">
                        <x-card :title="__('admin.information')" class="admin-information">
                            <x-slot:body>
                                @include('app.admin.content.information.index')
                            </x-slot:body>
                        </x-card>

                        <x-card :title="__('admin.plans')" class="admin-plans">
                            <x-slot:body>
                                @include('app.admin.content.plans.index')
                            </x-slot:body>
                        </x-card>

                        <x-card :title="__('admin.comments')" class="admin-comments">
                            <x-slot:body>
                                @include('app.admin.content.comments.index')
                            </x-slot:body>
                        </x-card>

                        <x-card :title="__('admin.faqs')" class="admin-faqs">
                            @include('app.admin.content.faqs.index')
                        </x-card>
                    </div>

                </div>

            </div>


        </div>

    </x-card.dashboard>
@endsection
