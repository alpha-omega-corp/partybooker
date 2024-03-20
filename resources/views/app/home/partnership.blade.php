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
                            <img
                                src="{{ Vite::app('partnership.jpg') }}"
                                class="register-image"
                                alt="Partybooker Partnership"
                            />
                            <a href="#" class="register-btn">
                                {{__('home.become_partner')}}
                            </a>
                        </div>
                    </div>

                    <div class="partnership-help">
                        <h6 class="partnership-help-title">
                            {{__('home.help_title')}}
                        </h6>

                        <div class="partnership-help-content">
                            <p>{{__('home.help')}}</p>

                            <x-modal.index
                                :iterator="$item->id"
                                :name="ModalName::APP_HELP"
                                :type="ModalType::CREATE"
                                :size="ModalSize::MD"
                                icon="heroicon-o-question-mark-circle"
                                :tooltip="__('home.help_title')"
                                custom-color="secondary"
                                :route="route('guest.home.help', [
                                    'plan' => $item
                                ])"
                            >

                                <x-slot:body>
                                    <x-forms.input
                                        name="phone"
                                        :label="__('home.phone')"
                                    >
                                        @svg($phoneIcon)
                                    </x-forms.input>
                                </x-slot:body>
                            </x-modal.index>
                        </div>
                    </div>


                </div>
            </div>

            <hr>

            <x-card.title :title="__('home.plans')"/>
            <div class="plans-content-card">
                @foreach($plans as $plan)
                    <x-plan.card :plan="$plan"></x-plan.card>
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

            <ul class="usp-list">

            </ul>
        </section>
    </x-card.panel>


    <script type="module">
        function contact() {
            document.getElementById('contactButton').click();
        }
    </script>
@endsection



