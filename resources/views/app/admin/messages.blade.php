@php use App\Http\Middleware\LocaleMiddleware; @endphp
@extends('main')


@section('title')
    <title>Advert | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <div class="p-5">
        <x-tab :pages="[
            'Partnership',
            'Help',
            'Service',
            ]"
        >
            <x-tab.item>
                @include('app.admin.partials.notifications', ['notifications' => $partnerships])
            </x-tab.item>

            <x-tab.item>
                @include('app.admin.partials.notifications', ['notifications' => $helps])
            </x-tab.item>

            <x-tab.item>
                @include('app.admin.partials.notifications', ['notifications' => $services])
            </x-tab.item>
        </x-tab>
    </div>
@endsection
