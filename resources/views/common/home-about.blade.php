<div class="welcome">
    <div class="accordion" id="infoAccordion">
        <div class="card-group">
            <div class="card-container">
                <div class="card mb-5 shadow-lg">
                    <div class="card-body" x-data="{ c: 'controlTwo' }"
                         @click="open(c)">
                        <div class="card-text">
                            <div class="accordion-item">
                                <div class="accordion-item-flex">
                                    <button class="accordion-button text-uppercase"
                                            type="button" data-bs-toggle="collapse"
                                            id="controlTwo"
                                            data-bs-target="#collapseTwo"
                                            aria-expanded="false"
                                            aria-controls="collapseTwo">
                                        <img src="{{ Vite::image('rocket.svg') }}"
                                             class="d-block" alt="...">

                                    </button>

                                    <div class="card-title-container">
                                        <h3
                                            class="accordion-header text-uppercase fw-bold"
                                            id="headingTwo">
                                            {{ __('main.info-block-title-2') }}
                                        </h3>
                                    </div>

                                </div>

                                <div id="collapseTwo" class="accordion-collapse collapse"
                                     aria-labelledby="headingTwo"
                                     data-bs-parent="#infoAccordion">
                                    <div class="accordion-body">
                                        <span>{{ __('main.info-block-2') }}</span>
                                        <b>{{ __('main.info-block-2-1') }}</b>
                                        <span>{{ __('main.info-block-2-2') }}</span>
                                        <br>
                                        <hr>
                                        <span>{{ __('main.info-block-2-3') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card shadow-lg">
                    <div class="card-body" x-data="{ c: 'controlThree' }" @click="open(c)">
                        <div class="card-text">
                            <div class="accordion-item">
                                <div class="accordion-item-flex">
                                    <button
                                        class="accordion-button accordion-button-register collapsed text-uppercase"
                                        type="button" data-bs-toggle="collapse"
                                        id="controlThree" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        <img src="{{ Vite::image('group-icon.svg') }}"
                                             class="d-block" alt="...">
                                    </button>

                                    <div class="card-title-container">
                                        <h3
                                            class="accordion-header text-uppercase fw-bold "
                                            id="headingThree">
                                            {{ __('main.info-block-title-3') }}
                                        </h3>
                                    </div>

                                </div>

                                <div id="collapseThree" class="accordion-collapse collapse"
                                     aria-labelledby="headingThree"
                                     data-bs-parent="#infoAccordion">
                                    <div class="accordion-body">

                                        <span>{{ __('main.info-block-at') }}</span>
                                        <b>{{ __('main.info-block-pb') }}</b>
                                        <span>{{ __('main.info-block-3') }}</span>
                                        <br>
                                        <hr>
                                        <i>{{ __('main.info-block-3-1') }}</i>
                                        <a
                                            href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.partner')) }}">
                                            <button type="button"
                                                    class="btn btn-primary register">
                                                @svg('heroicon-m-arrow-long-right')
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
