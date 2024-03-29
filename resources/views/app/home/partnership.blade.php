@php use App\Http\Middleware\LocaleMiddleware; @endphp
@extends('main')

@section('page')
    page="partner"
@endsection

@section('title')
    <title>{{ __('become_partner.title') }} | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')

    <x-card.panel :title="__('home.partnership') . ' partybooker'">
        <x-slot:breadcrumbs>
            {{Breadcrumbs::render('partnership')}}
        </x-slot:breadcrumbs>

        <section class="partnership">

            <x-card.title :title="__('home.benefits')"/>

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

            <hr>

            <div class="partnership-register-content">
                <div class="d-flex gap-5">
                    <div class="app-card-rainbow">
                        <div class="partnership-register">

                            <div class="register-image">
                                <img
                                    src="{{ Vite::app('partnership.jpg') }}"
                                    class="register-image"
                                    alt="Partybooker Partnership"
                                />
                            </div>

                            <a href="#" class="register-btn" x-data="{modal: 'modalBtnGUEST_PARTNERSHIP'}"
                               @click="document.getElementById(modal).click()">
                                {{__('form.join_title')}}
                            </a>
                        </div>
                    </div>

                    <div class="partnership-help">
                        <h6 class="partnership-help-title">
                            {{__('home.help_title')}}
                        </h6>

                        <div class="partnership-help-content">
                            <p>{{__('home.help')}}</p>

                            @include('app.home.partials.partnership.help')
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <x-card.title :title="__('home.plans')"/>
            <div class="plans-content-card">
                @foreach($plans as $plan)
                    <div class="w-100">
                        <x-plan.card :plan="$plan"></x-plan.card>
                    </div>
                @endforeach
            </div>

            <hr>

            <x-card.title :title="__('home.usp')"/>

            <ul class="row usp-content-card">
                @foreach($usps as $usp)
                    <div class="col-6">
                        <div class="usp-card">
                            <li>
                                <h6 class="usp-card-title">
                                    {{$usp->locale->title}}
                                </h6>

                                <p>{{$usp->locale->description}}</p>
                            </li>
                        </div>
                    </div>
                @endforeach
            </ul>
        </section>
    </x-card.panel>

    @include('app.home.partials.partnership.join')

@endsection



