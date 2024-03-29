@extends('main')

@section('title')
    <title>FAQ | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')

    <x-card.panel :title="__('home.faq')">
        <x-slot:breadcrumbs>
            {{Breadcrumbs::render('faq')}}
        </x-slot:breadcrumbs>

        <section class="faq">
            <div class="faq-content-card">

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
                                <div class="d-flex gap-4 align-items-center">
                                    @svg($questionIcon, 'faq-icon')
                                    {{$faq->locale->question}}
                                </div>
                            </x-slot:title>

                            <x-slot:content>
                                {{$faq->locale->answer}}
                            </x-slot:content>
                        </x-accordion.item>
                    @endforeach

                </x-accordion.index>


            </div>
        </section>
    </x-card.panel>

@endsection
