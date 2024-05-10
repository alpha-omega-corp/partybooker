@extends('main')

@section('title')
    <title>Partners | {{ __('partybooker-cp.www')}}</title>
@endsection



@section('content')

    @php($contents = [
        __('nav.home') => 'app.admin.content.partials.home',
        __('nav.about') => 'app.admin.content.partials.about',
        __('nav.partnership') => 'app.admin.content.partials.partnership',
        __('nav.blog') => 'app.admin.content.partials.blog',
        __('nav.faq') => 'app.admin.content.partials.faq',
        __('nav.misc') => 'app.admin.content.partials.miscellaneous',
    ])

    <x-card.panel :title="__('nav.admin.content')" :color="AppColor::PINK" class="app-admin-content">
        <x-slot:breadcrumbs>
            {{Breadcrumbs::render('admin.content')}}
        </x-slot:breadcrumbs>
        <x-app.section>
            <x-accordion
                name="adminContents"
            >
                @foreach($contents as $key => $item)
                    <x-accordion.item
                        accordion="adminContents"
                        :name="$loop->index"
                        :padding="false"
                    >
                        <x-slot:title>
                            <div class="admin-content-header">
                                <div class="d-flex justify-content-between w-100">
                                    <span class="fw-bold text-blue">{{$loop->index + 1}}.</span>
                                    <span class="pe-2">{{$key}}</span>
                                </div>
                            </div>
                        </x-slot:title>

                        <x-slot:content>
                            @include($item)
                        </x-slot:content>
                    </x-accordion.item>
                @endforeach
            </x-accordion>
        </x-app.section>
    </x-card.panel>
@endsection
