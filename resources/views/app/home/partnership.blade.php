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
            :background="true"
            :value="__('home.plans')"
        />

        <div class="plans-content-card">
            @foreach($plans as $plan)
                <x-plan.card :plan="$plan"></x-plan.card>
            @endforeach
        </div>

        <x-app.title
            :size="TitleSize::MEDIUM"
            :color="AppColor::BLUE"
            :border="true"
            :background="true"
            :value="__('home.usp')"
        />

        <ul class="usp-content-card">
            @foreach($usps as $usp)
                <div class="usp-card">
                    <div class="usp-card-header">
                        <li>
                            <h6 class="usp-card-title">
                                {{$usp->locale->title}}
                            </h6>
                        </li>
                    </div>


                    <p>{{$usp->locale->description}}</p>

                </div>
            @endforeach
        </ul>

        <div class="partnership-help-card">
            <div class="partnership-help">
                <x-app.title
                    :size="TitleSize::SMALL"
                    :color="AppColor::BLUE"
                    :value="__('home.help_title')"
                    :background="true"
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



