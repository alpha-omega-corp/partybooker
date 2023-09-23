@extends('main')

@section('page')
    page="home"
@endsection

@section('title')
    @if (app()->getLocale() == 'fr')
        <title>Partybooker - Les meilleures idéés d'événements</title>
        <meta name="description"
            content="Retrouvez notre sélection des meilleures idées d'événement à faire en Suisse romande. Pour les familles, les sorties entre amis ou entreprise et même les mariages. ">
        <meta name="keywords" content="événements, idées d'événements">
    @else
        <title>Partybooker - Best Event Ideas</title>
        <meta name="description"
            content="Find our selection of the best event ideas to do in French-speaking Switzerland. For families, outings with friends or business and even weddings.">
        <meta name="keywords" content="events, event ideas">
    @endif
@endsection

@section('content')
    <div class="wrapper">
        <div class="parallax__group_welcome hero-container hero">
            <div class="parallax__layer blob"></div>

            <div class="parallax__layer hero-text">
                <section>
                    <div class="welcome">
                        <div class="container my-auto">
                            <h1 class="text-white display-1 fw-bold">
                                {{ __('main.title_home_h1') }}
                            </h1>

                            <div class="accordion" id="welcomeAccordion">
                                <div class="card-group">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12">

                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="card-text">
                                                        <div class="accordion-item">
                                                            <div class="d-flex">
                                                                <button class="accordion-button text-uppercase"
                                                                    id="controlOne" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseOne" aria-expanded="false"
                                                                    aria-controls="collapseOne">

                                                                    <img src="{{ asset('images/ape.svg') }}" class="d-block"
                                                                        alt="...">
                                                                </button>
                                                                <h2 class="accordion-header text-uppercase fw-bold"
                                                                    x-data="{ c: 'controlOne' }" @click="open(c)"
                                                                    id="headingOne">
                                                                    {{ __('main.info-block-title-1') }}
                                                                </h2>
                                                            </div>

                                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                                aria-labelledby="headingOne"
                                                                data-bs-parent="#welcomeAccordion">
                                                                <div class="accordion-body body-one">
                                                                    <p>
                                                                        <span>{{ __('main.info-block-1') }}</span>

                                                                        <br>
                                                                        <hr>
                                                                        <span>{{ __('main.info-block-1-1') }}</span>
                                                                    <p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-4 col-xs-12">

                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="card-text">
                                                        <div class="accordion-item">


                                                            <div class="d-flex">

                                                                <button class="accordion-button text-uppercase"
                                                                    type="button" data-bs-toggle="collapse" id="controlTwo"
                                                                    data-bs-target="#collapseTwo" aria-expanded="false"
                                                                    aria-controls="collapseTwo">
                                                                    <img src="{{ asset('images/party-popper.svg') }}"
                                                                        class="d-block" alt="...">

                                                                </button>
                                                                <h2 class="accordion-header text-uppercase fw-bold"
                                                                    x-data="{ c: 'controlTwo' }" @click="open(c)"
                                                                    id="headingTwo">
                                                                    {{ __('main.info-block-title-2') }}
                                                                </h2>
                                                            </div>



                                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                                aria-labelledby="headingTwo"
                                                                data-bs-parent="#welcomeAccordion">
                                                                <div class="accordion-body">
                                                                    <p>
                                                                        <span>{{ __('main.info-block-2') }}</span>
                                                                        <b>{{ __('main.info-block-2-1') }}</b>
                                                                        <span>{{ __('main.info-block-2-2') }}</span>

                                                                        <br>
                                                                        <hr>
                                                                        <span>{{ __('main.info-block-2-3') }}</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-4 col-xs-12">

                                            <div class="card card-focus">
                                                <div class="card-body">
                                                    <div class="card-text">
                                                        <div class="accordion-item">

                                                            <div class="d-flex">

                                                                <button
                                                                    class="accordion-button accordion-button-register collapsed text-uppercase"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    id="controlThree" data-bs-target="#collapseThree"
                                                                    aria-expanded="false" aria-controls="collapseThree">
                                                                    <img src="{{ asset('images/heart.svg') }}"
                                                                        class="d-block" alt="...">
                                                                </button>

                                                                <h2 class="accordion-header text-uppercase fw-bold "
                                                                    x-data="{ c: 'controlThree' }" @click="open(c)"
                                                                    id="headingThree">
                                                                    {{ __('main.info-block-title-3') }}
                                                                </h2>
                                                            </div>

                                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                                aria-labelledby="headingThree"
                                                                data-bs-parent="#welcomeAccordion">
                                                                <div class="accordion-body">
                                                                    <p>
                                                                        <span>{{ __('main.info-block-at') }}</span>
                                                                        <b>{{ __('main.info-block-pb') }}</b>
                                                                        <span>{{ __('main.info-block-3') }}</span>

                                                                        <br>
                                                                        <hr>
                                                                        <i>{{ __('main.info-block-3-1') }}</i>
                                                                    </p>

                                                                    <a
                                                                        href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.partner')) }}">
                                                                        <button type="button"
                                                                            class="btn btn-primary register">
                                                                            <i class="bi bi-arrow-right"></i>
                                                                        </button>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>


        <div class="parallax__group_services hero-container hero">
            <div class="parallax__layer peaks"></div>


            <div class="parallax__layer hero-text-two">
                <section class="top-services">
                    @include('common.top-services')
                </section>
            </div>
        </div>

        <section class="categories">
            <div class="row">

                <div class="col-6">
                    <div class="list-group" id="list-tab" role="tablist">
                        @foreach ($menuCats as $key => $category)
                            @php
                                $listKey = 'list-category-' . $key;
                                $listId = $listKey . '-list';
                            @endphp


                            <a class="link-underline link-underline-primarytext-uppercase display-5 {{ $key === 0 ? 'active' : '' }}"
                                id="{{ $listId }}" data-bs-toggle="list" href="{{ '#' . $listKey }}"
                                role="tab" aria-controls="{{ $listKey }}">
                                {{ $category->lang->name }}
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="col-6">
                    <div class="tab-content bg-white" id="nav-tabContent">

                        <!-- Tabs -->
                        @foreach ($menuCats as $key => $category)
                            @php
                                $listKey = 'list-category-' . $key;
                                $listId = $listKey . '-list';
                            @endphp

                            <!-- Content -->
                            <div class="tab-pane show position-relative {{ $key === 0 ? 'active' : '' }}"
                                id="{{ $listKey }}" role="tabpanel" aria-labelledby="{{ $listId }}">

                                @switch($listKey)
                                    @case('list-category-1')
                                        <img src="{{ asset('images/flip2.jpg') }}" class="img-showcase mx-auto d-block"
                                            alt="...">
                                    @break

                                    @case('list-category-2')
                                        <img src="{{ asset('images/flip3.jpg') }}" class="img-showcase mx-auto d-block"
                                            alt="...">
                                    @break

                                    @case('list-category-3')
                                        <img src="{{ asset('images/flip4.jpg') }}" class="img-showcase mx-auto d-block"
                                            alt="...">
                                    @break

                                    @case('list-category-4')
                                        <img src="{{ asset('images/flip5.jpg') }}" class="img-showcase mx-auto d-block"
                                            alt="...">
                                    @break

                                    @case('list-category-5')
                                        <img src="{{ asset('images/flip6.jpg') }}" class="img-showcase mx-auto d-block"
                                            alt="...">
                                    @break

                                    @default
                                        <img src="{{ asset('images/flip1.jpg') }}" class="img-showcase mx-auto d-block"
                                            alt="...">
                                @endswitch


                                <p class="category-description">
                                    @if ($category->lang->description)
                                        {{ $category->lang->description }}
                                    @else
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus iaculis
                                        dolor ligula,
                                        quis commodo arcu sollicitudin eu. Phasellus feugiat nisl non ex iaculis
                                        dictum. Aliquam
                                        ultricies ultrices placerat. Sed augue nunc, malesuada id orci vitae,
                                        aliquet sodales
                                        ipsum. Integer congue, purus feugiat varius scelerisque, dolor diam eleifend
                                        ante, ut
                                        cursus urna sem vitae velit. Suspendisse potenti.
                                    @endif
                                </p>

                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                    <button type="button" class="btn btn-labeled btn-secondary text-uppercase"
                                        data-bs-toggle="offcanvas" data-bs-target="{{ '#category-' . $category->id }}"
                                        aria-controls="offcanvasScrolling">
                                        <span class="btn-label">
                                            <i class="bi bi-door-open"></i>
                                        </span>
                                        {{ __('main.see-items') }}
                                    </button>
                                    <a
                                        href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $category->lang->slug) }}">
                                        <button type="button" class="btn btn-labeled btn-secondary text-uppercase">
                                            <span class="btn-label">
                                                <i class="bi bi-eye"></i>
                                            </span>
                                            {{ __('main.see-all') }}
                                        </button>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Offcanvas -->
    @foreach ($menuCats as $key => $category)
        <div class="offcanvas offcanvas-end sub-categories-offcanvas" tabindex="-1"
            id="{{ 'category-' . $category->id }}" aria-labelledby="{{ $category->lang->name }}">
            <div class="offcanvas-body">

                <div class="mx-auto">
                    <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/') }}" class="nav-logo">
                        <img src="/images/logoPB.png" class="mx-auto"
                            alt="Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande.">
                    </a>

                </div>
                <ul class="sub-categories-list">
                    @foreach ($category->subCategories as $subCategory)
                        <li>
                            <a
                                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $category->lang->slug . '/' . $subCategory->lang->slug) }}">
                                {{ $subCategory->lang->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endforeach
@endsection

<script>
    function open(i) {
        document.getElementById(i).click();
    }
</script>
