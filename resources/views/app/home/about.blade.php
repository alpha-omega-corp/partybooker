@extends('main')

@section('title')
@endsection

@section('content')

    <x-card.dashboard>
        <x-slot name="title">
            <h1>About</h1>
        </x-slot>

        <section class="about">

            <div class="about-description">
                <h6>{{$description->title}}</h6>
                {{$description->content}}
            </div>

            <div class="about-concept">
                <h6>{{$concept->title}}</h6>
                {{$concept->content}}
            </div>

            <div class="about-features">
                @foreach($abouts as $about)
                    <div class="about-feature-card shadow-lg">
                        <div class="feature-card-logo">
                            <img src="{{$about->image}}" alt="{{$about->name}}">
                        </div>

                        <div class="feature-card-content">
                            <ul>
                                @foreach($about->items as $item)
                                    <li>
                                        {{$item->locale->content}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </x-card.dashboard>
@endsection
