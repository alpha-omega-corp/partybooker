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

        <x-app.title
            :size="TitleSize::MEDIUM"
            :color="AppColor::BLUE"
            :background="false"
            :value="__('home.advantages')"
        />
        <x-app.section class="about-features-container" :bg="AppColor::HOME_GRAY">
            @foreach($features as $feature)
                @if($feature->locale)
                    <div class="about-feature-card shadow-lg">
                        <div class="feature-card-content">
                            <div class="feature-card-header">
                                <img src="{{$feature->image}}" alt="{{$feature->name}}">
                                <h6 class="feature-card-title">
                                    {{$feature->locale->title}}
                                </h6>
                            </div>
                            <ul>
                                @foreach($feature->items as $item)
                                    <li>
                                        <p>
                                            {{$item->locale->content}}
                                        </p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                @endif
            @endforeach
        </x-app.section>


    </x-card.panel>
@endsection
