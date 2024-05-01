@extends('main')

@section('title')
@endsection

@section('content')

    <x-card.panel
        :title="__('home.about')"
        class="home-about"
    >

        <x-slot:breadcrumbs>
            {{Breadcrumbs::render('about', Request::segments())}}
        </x-slot:breadcrumbs>

        <x-app.section class="about-cards-container">
            <div>
                <x-app.title
                    :size="TitleSize::SMALL"
                    :color="AppColor::PINK"
                    :value="$description->title"
                    :border="false"
                />
                <p>{{$description->content}}</p>
            </div>


            <div>
                <x-app.title
                    :size="TitleSize::SMALL"
                    :color="AppColor::PINK"
                    :value="$concept->title"
                    :border="false"
                />
                <p>{{$concept->content}}</p>
            </div>
        </x-app.section>

        <div class="about-features-card">
            <x-app.title
                :size="TitleSize::MEDIUM"
                :color="AppColor::BLUE"
                :border="true"
                :background="true"
                :value="__('home.features')"
            />

            <div class="about-features-content">
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
            </div>
        </div>
    </x-card.panel>
@endsection
