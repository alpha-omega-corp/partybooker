@extends('main')

@section('title')
    <title>Partners | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <x-card.panel :title="__('admin.service')" class="app-admin-content">
        <x-card :title="__('admin.categories')">
            <x-slot:body>
                @include('app.admin.content.categories.index')
            </x-slot:body>
        </x-card>

        <x-card :title="__('admin.posts')" class="admin-posts">
            <x-slot:body>
                @include('app.admin.content.posts.index')
            </x-slot:body>
        </x-card>

        <x-card :title="__('admin.usp')" class="admin-usp">
            <x-tab.index
                :items="[
                        'USP',
                        'Benefits'
                    ]"
            >
                <x-tab.item :padding="false">
                    <x-slot:information>
                        Unique Selling Points
                    </x-slot:information>
                    @include('app.admin.content.usp.index')
                </x-tab.item>

                <x-tab.item :padding="false">
                    <x-slot:information>
                        Partnership Benefits
                    </x-slot:information>
                    @include('app.admin.content.benefits.index')
                </x-tab.item>

            </x-tab.index>
        </x-card>

        <x-card :title="__('admin.contacts')" class="admin-contacts">
            @include('app.admin.content.contacts.index')
        </x-card>

        <x-card :title="__('admin.about')" class="admin-about">
            @include('app.admin.content.about.index')
        </x-card>

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

        <x-card :title="__('admin.terms')" class="admin-terms">
            @include('app.admin.content.terms.index')
        </x-card>
    </x-card.panel>
@endsection
