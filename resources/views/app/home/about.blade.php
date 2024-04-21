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

        <div class="about-card">
            <div class="about-description w-100">
                <h6 class="about-card-title">{{$description->title}}</h6>
                <p>{{$description->content}}</p>
            </div>

            <div class="about-concept w-100">
                <h6 class="about-card-title">{{$concept->title}}</h6>
                <p>{{$concept->content}}</p>
            </div>
        </div>

        <div class="about-features-card">
            <x-app.title
                :size="TitleSize::MEDIUM"
                :color="AppColor::BLUE"
                :border="true"
                :value="__('home.features')"
                class="about-features-title"
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
