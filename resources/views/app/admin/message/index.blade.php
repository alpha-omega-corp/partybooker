@php use App\Http\Middleware\LocaleMiddleware; @endphp
@extends('main')

@section('title')
    <title>Advert | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <x-card.panel :title="__('nav.admin.messages')">
        <x-slot:breadcrumbs>
            {{Breadcrumbs::render('admin.messages')}}
        </x-slot:breadcrumbs>
        <x-app.section>
            <x-accordion
                name="adminMessages"
            >
                <x-accordion.item
                    accordion="adminMessages"
                    name="help"
                    :padding="false"
                >
                    <x-slot:title>
                        {{__('admin.message.help')}}
                    </x-slot:title>

                    <x-slot:content>
                        @include('app.admin.message.partials.notifications', ['notifications' => $helps])
                    </x-slot:content>
                </x-accordion.item>

                <x-accordion.item
                    accordion="adminMessages"
                    name="partnership"
                    :padding="false"
                >
                    <x-slot:title>
                        {{__('admin.message.partnership')}}
                    </x-slot:title>

                    <x-slot:content>
                        @include('app.admin.message.partials.notifications', ['notifications' => $partnerships])
                    </x-slot:content>
                </x-accordion.item>

                <x-accordion.item
                    accordion="adminMessages"
                    name="service"
                    :padding="false"
                >
                    <x-slot:title>
                        {{__('admin.message.service')}}
                    </x-slot:title>

                    <x-slot:content>
                        @include('app.admin.message.partials.notifications', ['notifications' => $services])
                    </x-slot:content>
                </x-accordion.item>
            </x-accordion>
        </x-app.section>
    </x-card.panel>
@endsection
