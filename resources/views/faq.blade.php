@extends('main')

@section('page')
    page="faqs"
@endsection

@section('title')
    <title>{{ __('main.faq_page_title') }} | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')
    <section class="faq">
        <div class="container">
            <h1 class="display-1 fw-bold">
                {{ __('main.faqs_page') }}
            </h1>
            <hr>
            <div class="accordion" id="faqAccordion">
                @foreach ($faqs as $key => $faq)
                    <div class="accordion-item">
                        <h2 class="accordion-header text-uppercase">
                            <button class="accordion-button"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="{{'#collapse' . $key }}"
                                    aria-expanded="false"
                                    aria-controls="{{'collapse' . $key }}">

                                <span class="faq-question">
                                    @if (app()->getLocale() == 'en')
                                        {{ $faq->question_en }}
                                    @else
                                        {{ $faq->question_fr }}
                                    @endif
                                </span>
                            </button>
                        </h2>


                        <div
                            id="{{'collapse' . $key }}"
                            class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}"
                            data-bs-parent="#faqAccordion">

                            <div class="accordion-body">
                                <hr>
                                @if (app()->getLocale() == 'en')
                                    {{ $faq->answer_en }}
                                @else
                                    {{ $faq->answer_fr }}
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
