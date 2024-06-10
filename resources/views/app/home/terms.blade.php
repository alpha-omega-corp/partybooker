@extends('main')

@section('content')
    <x-card.panel
        :title="__('nav.terms')"
        class="home-partnership"
    >
        <x-app.section>
            <div class="d-flex flex-column gap-5">
                <div class="text-center">
                    <x-app.title
                        :value="$userTerms->locale->title"
                        :color="AppColor::BLUE"
                        :size="TitleSize::MEDIUM"
                    />

                    {!! $userTerms->locale->content !!}
                </div>

                <div class="text-center">
                    <x-app.title
                        :value=" $serviceTerms->locale->title"
                        :color="AppColor::BLUE"
                        :size="TitleSize::MEDIUM"
                    />

                    {!! $serviceTerms->locale->content !!}
                </div>
            </div>
        </x-app.section>


    </x-card.panel>
@endsection
