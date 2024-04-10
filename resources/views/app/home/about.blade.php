@extends('main')

@section('title')
@endsection

@section('content')

    <x-card.panel :title="__('home.about')">
        <section class="about">

            <div class="about-content-card">

                <div class="about-description w-100">
                    <h6>{{$description->title}}</h6>
                    <p>{{$description->content}}</p>
                </div>

                <div class="about-concept w-100">
                    <h6>{{$concept->title}}</h6>
                    <p>{{$concept->content}}</p>
                </div>
            </div>

            <div class="about-features-card">

                <div class="about-features-header">
                    <x-app.title
                        :size="TitleSize::MEDIUM"
                        :color="AppColor::PINK"
                        :value="__('home.features')"
                        class="about-features-title"
                    />

                </div>

                <div class="about-features-content">
                    @foreach($abouts as $about)
                        <div class="about-feature-card shadow-lg">
                            <div class="feature-card-logo">
                                <img src="{{$about->image}}" alt="{{$about->name}}">
                            </div>

                            <div class="feature-card-content">
                                <div class="feature-card-header">
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
        </section>
    </x-card.panel>
@endsection
