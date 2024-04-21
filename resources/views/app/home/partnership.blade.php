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

        <div class="partnership-register">
            <a href="#" class="btn btn-secondary text-white" x-data="{modal: 'modalBtnGUEST_PARTNERSHIP'}"
               @click="document.getElementById(modal).click()">
                <span>{{__('form.join_title')}}</span>
                @svg('heroicon-o-arrow-right')
            </a>
        </div>

        <div class="benefits-content-card">
            <div class="benefits-content">
                @foreach($benefits as $benefit)
                    <div class="benefit-card">
                        <div class="benefit-card-header">
                            <h6 class="benefit-card-title">
                                {{$benefit->locale->title}}
                            </h6>

                            <div>
                                <img src="{{ $benefit->image }}" alt="{{ $benefit->name }}" class="shadow-lg">
                            </div>
                        </div>

                        <div class="benefit-card-content">
                            @foreach($benefit->items as $item)
                                <p>{{ $item->locale->content }}</p>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <x-app.title
            :size="TitleSize::MEDIUM"
            :color="AppColor::BLUE"
            :border="true"
            :value="__('home.plans')"
            class="plans-title"
        />

        <div class="plans-content-card">
            @foreach($plans as $plan)
                <div class="w-100">
                    <x-plan.card :plan="$plan"></x-plan.card>
                </div>
            @endforeach
        </div>

        <x-app.title
            :size="TitleSize::MEDIUM"
            :color="AppColor::BLUE"
            :border="true"
            :value="__('home.usp')"
            class="usp-title"
        />

        <ul class="usp-content-card">
            @foreach($usps as $usp)
                <div class="usp-card">
                    <li>
                        <h6 class="usp-card-title">
                            {{$usp->locale->title}}
                        </h6>

                        <p>{{$usp->locale->description}}</p>
                    </li>
                </div>
            @endforeach
        </ul>

        <div class="partnership-help-card">
            <div class="partnership-help">
                <x-app.title
                    :size="TitleSize::SMALL"
                    :color="AppColor::BLUE"
                    :value="__('home.help_title')"
                    class="partnership-help-title"
                />

                <div class="partnership-help-content">
                    <p>{{__('home.help')}}</p>

                    @include('app.home.partials.partnership.help')
                </div>
            </div>
        </div>
    </x-card.panel>

    @include('app.home.partials.partnership.join')
@endsection



