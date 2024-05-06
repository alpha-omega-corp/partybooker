@php use App\Http\Middleware\LocaleMiddleware; @endphp
@extends('main')

@section('page')
    page="partner"
@endsection

@section('title')
    <title>{{ __('become_partner.title') }} | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')
    <x-card.panel
        :title="__('home.partnership')"
        class="home-partnership"
    >
        <x-slot:breadcrumbs>
            {{Breadcrumbs::render('partnership', Request::segments())}}
        </x-slot:breadcrumbs>

        <x-app.section>
            <div class="d-flex justify-content-center p-3">
                <x-modal.open
                    :name="ModalName::GUEST_PARTNERSHIP"
                    :custom-color="AppColor::HOME_GREEN"
                    :singleton="true"
                    :fit="true"
                    :text="strtoupper(__('form.join_title'))"
                />
            </div>
            @include('app.home.partials.partnership.benefits')

        </x-app.section>

        <x-app.title
            :size="TitleSize::MEDIUM"
            :color="AppColor::BLUE"
            :value="__('home.plans')"
        />

        <x-app.section>
            @include('app.home.partials.partnership.plans')
        </x-app.section>

        <x-app.title
            :size="TitleSize::MEDIUM"
            :color="AppColor::BLUE"
            :value="__('home.usp')"
        />

        <x-app.section>
            @include('app.home.partials.partnership.usp')
        </x-app.section>

        <x-app.title
            :size="TitleSize::MEDIUM"
            :color="AppColor::BLUE"
            :value="__('home.help_title')"
            class="partnership-help-title"
        />

        <x-app.section>
            <div class="container">
                <x-modal.open
                    :name="ModalName::APP_HELP"
                    :type="ModalType::CREATE"
                    :custom-color="AppColor::PINK"
                    :singleton="true"
                    :fit="true"
                    :icon="$checkIcon"
                    :title="__('home.help_title')"
                    class="app-help-button"/>
                <p class="p-4 text-center">{{ucfirst(__('home.help'))}}</p>

            </div>

        </x-app.section>
    </x-card.panel>

    @include('app.home.partials.partnership.help')
    @include('app.home.partials.partnership.join')
@endsection



