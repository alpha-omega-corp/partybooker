@php use App\Http\Middleware\LocaleMiddleware; @endphp
@extends('main')


@section('title')
    <title>Advert | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')

    <div class="p-5">
        <x-utils.tab
            :tabs="[
             'Partnership',
             'Help',
             'Service',
         ]">

            <x-utils.page>
                @include('app.admin.partials.notifications', ['notifications' => $partnerships])
            </x-utils.page>

            <x-utils.page>
                @include('app.admin.partials.notifications', ['notifications' => $helps])
            </x-utils.page>

            <x-utils.page>
                @include('app.admin.partials.notifications', ['notifications' => $services])
            </x-utils.page>

        </x-utils.tab>
    </div>
@endsection
