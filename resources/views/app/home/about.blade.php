@extends('main')
@section('content')
    <x-card.panel
        :title="__('nav.about')"
        class="home-about"
    >
        <x-app.section class="about-description-container">
            <div class="about-description-card">
                <div class="description-card-header">
                    <x-app.title
                        :size="TitleSize::SMALL"
                        :color="AppColor::BLUE"
                        :value="$description->title"
                        :border="false"
                        :padding="false"
                        class="description-card-title"
                    />
                </div>

                <x-app.text-more :content="$description->content"/>
            </div>

            <div class="about-description-card">
                <div class="description-card-header">
                    <x-app.title
                        :size="TitleSize::SMALL"
                        :color="AppColor::BLUE"
                        :value="$concept->title"
                        :padding="false"
                        :background="false"
                        class="description-card-title"
                    />
                </div>
                <x-app.text-more :content="$concept->content"/>
            </div>
        </x-app.section>
    </x-card.panel>
@endsection
