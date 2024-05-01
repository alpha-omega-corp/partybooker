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
        <x-app.action>
            <x-modal.open
                :name="ModalName::GUEST_PARTNERSHIP"
                :custom-color="AppColor::HOME_GREEN"
                :singleton="true"
                :fit="true"
                :radius="false"
                :text="strtoupper(__('form.join_title'))"
            />
        </x-app.action>

        <x-app.section>
            @include('app.home.partials.partnership.benefits')
        </x-app.section>

        <x-app.title
            :size="TitleSize::MEDIUM"
            :color="AppColor::BLUE"
            :border="true"
            :background="true"
            :value="__('home.plans')"
        />

        <x-app.section>
            @include('app.home.partials.partnership.plans')
        </x-app.section>

        <x-app.title
            :size="TitleSize::MEDIUM"
            :color="AppColor::BLUE"
            :border="true"
            :background="true"
            :value="__('home.usp')"
        />

        <x-app.section>
            @include('app.home.partials.partnership.usp')
        </x-app.section>

        <x-app.title
            :size="TitleSize::SMALL"
            :color="AppColor::BLUE"
            :value="__('home.help_title')"
            :background="true"
            class="partnership-help-title"
        />

        <x-app.section>
            <div class="container text-center p-2">
                <p>{{__('home.help')}}</p>
                <x-modal.open
                    :name="ModalName::APP_HELP"
                    :type="ModalType::CREATE"
                    :custom-color="AppColor::PINK"
                    :fit="true"
                    :singleton="true"
                    :icon="$checkIcon"
                    :title="__('home.help_title')"
                    class="app-help-button"/>
            </div>

            @include('app.home.partials.partnership.help')
        </x-app.section>
    </x-card.panel>

    @include('app.home.partials.partnership.join')
@endsection



