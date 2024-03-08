@php use App\Http\Middleware\LocaleMiddleware; @endphp
@extends('main')

@section('title')
    <title>Advert | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <x-card.dashboard :title="__('admin.messages')">
        <x-tab :items="[
            'Partnership',
            'Help',
            'Service',
            ]"
        >
            <x-tab.item :information="__('admin.message.partnership')">
                @include('app.admin.message.partials.notifications', ['notifications' => $partnerships])
            </x-tab.item>

            <x-tab.item :information="__('admin.message.help')">
                @include('app.admin.message.partials.notifications', ['notifications' => $helps])
            </x-tab.item>

            <x-tab.item :information="__('admin.message.service')">
                @include('app.admin.message.partials.notifications', ['notifications' => $services])
            </x-tab.item>
        </x-tab>
    </x-card.dashboard>
@endsection
