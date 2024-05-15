@extends('main')

@section('content')

    <x-card.panel
        :title="__('nav.about')"
        class="home-about"
    >
        <x-slot:breadcrumbs>
            {{Breadcrumbs::render('about', Request::segments())}}
        </x-slot:breadcrumbs>


        <x-app.section class="about-features-container" :bg="AppColor::HOME_GRAY">
            @foreach($abouts as $about)
                <div class="about-feature-card shadow-lg">
                    <div class="feature-card-content">
                        <div class="feature-card-header">
                            <img src="{{$about->image}}" alt="{{$about->name}}">
                            <h6 class="feature-card-title">
                                {{$about->locale->title}}
                            </h6>
                        </div>
                        <ul>
                            @foreach($about->items as $item)
                                <li>
                                    <p>
                                        {{$item->locale->content}}
                                    </p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </x-app.section>

        <x-app.title
            :size="TitleSize::MEDIUM"
            :color="AppColor::BLUE"
            :background="false"
            :value="__('home.advantages')"
        />
        <x-app.section class="about-description-container" :bg="AppColor::HOME_GRAY">
            <div class="about-description-card">
                <div class="description-card-header">
                    <x-app.title
                        :size="TitleSize::SMALL"
                        :color="AppColor::PINK"
                        :value="$description->title"
                        :border="false"
                        :padding="false"
                        class="description-card-title"
                    />
                </div>

                <p>{{$description->content}}</p>
            </div>

            <div class="about-description-card">
                <div class="description-card-header">
                    <x-app.title
                        :size="TitleSize::SMALL"
                        :color="AppColor::PINK"
                        :value="$concept->title"
                        :padding="false"
                        :background="false"
                        class="description-card-title"
                    />
                </div>

                <p>{{$concept->content}}</p>
            </div>
        </x-app.section>
    </x-card.panel>
@endsection
