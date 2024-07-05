@extends('main')

@section('content')

    <x-card.panel
        :title="__('home.faq')"
        class="home-faq"
    >
        <div class="container">
            <x-accordion.index
                name="faqAccordion"
            >
                @foreach($faqs as $faq)
                    <x-accordion.item
                        :name="$faq->id"
                        accordion="faqAccordion"
                        class="faq-card"
                    >
                        <x-slot:title>
                            <div class="faq-header">
                                <li class="faq-title">
                                    <p>{{$faq->locale->question}}</p>
                                </li>
                            </div>

                        </x-slot:title>

                        <x-slot:content>
                            {{$faq->locale->answer}}
                        </x-slot:content>
                    </x-accordion.item>
                @endforeach
            </x-accordion.index>
        </div>

    </x-card.panel>

@endsection
