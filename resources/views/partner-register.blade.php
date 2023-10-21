@extends('main')

@section('page')
    page="become_partner"
@endsection

@section('title')
    <title>{{ __('become_partner.title') }} | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')
    <div>
        <div class="container">
            <h1 class="modal-title text-uppercase fw-bold text-center mb-5" id="partnership">
                {{ __('become_partner.company_info') }}
            </h1>

            <form action="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/partner/reg') }}"
                  method="POST" enctype="multipart/form-data" class="partner-register">
                {{ csrf_field() }}

                <div class="col-md-12">
                    <label for="name" class="form-label">{{ __('become_partner.company_name') }}</label>
                    <input type="text" class="form-control" id="name" name="company_name">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="phone" class="form-label">{{ __('become_partner.phone') }}</label>
                        <input type="text" class="form-control" id="phone" name="company_phone">
                    </div>

                    <div class="col-md-6">
                        <label for="fax" class="form-label">{{ __('become_partner.fax') }}</label>
                        <input type="text" class="form-control" id="fax" name="company_phone">
                    </div>
                </div>

                @include('partial.map')

                <hr>

                <div class="input-group">
                            <span
                                class="input-group-text align-items-start text-uppercase text-accent fw-bold">
                                {{ __('become_partner.slogan') }}
                            </span>
                    <textarea class="form-control" aria-label="{{ __('become_partner.slogan') }}" name="slogan"
                              maxlength="250">

                            </textarea>

                </div>
                <br>

                <div class="input-group">
                            <span
                                class="input-group-text align-items-start text-uppercase bg-primary text-white fw-bold">
                              {{ __('become_partner.short_descr') }}
                            </span>
                    <textarea class="form-control" aria-label="{{ __('become_partner.short_descr') }}"
                              name="short_descr" maxlength="350" rows="4" required>

                            </textarea>
                </div>

                <div class="input-group">
                            <span
                                class="input-group-text align-items-start text-uppercase bg-primary text-white fw-bold">
                              {{ __('become_partner.full_descr') }}
                            </span>
                    <textarea class="form-control" aria-label="{{ __('become_partner.full_descr') }}"
                              name="full_descr" maxlength="3000" rows="6" required>

                            </textarea>
                </div>
                <hr>
                <label class="d-flex w-50 text-white bg-accent logoUpload"
                       for="customFile" x-data="{ files: null }">
                    <input type="file" hidden class="sr-only" id="customFile" name="logo"
                           x-on:change="files = Object.values($event.target.files)">
                    <span class="text-uppercase p-2 fw-bold "
                          x-text="files ? files.map(file => file.name).join(', ') : 'Company logo'"></span>
                </label>

                <h4 class="text-uppercase fw-bold mt-5">{{ __('become_partner.languages') }}</h4>

                <div class="d-flex flex-column">
                    <div class="form-check form-switch m-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="inputFrench"
                               name="languages[]" value="french">
                        <label class="form-check-label" for="inputFrench">
                            {{ __('become_partner.french') }}
                        </label>
                    </div>

                    <div class="form-check form-switch m-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="inputEnglish"
                               name="languages[]" value="english">
                        <label class="form-check-label" for="inputEnglish">
                            {{ __('become_partner.english') }}
                        </label>
                    </div>

                    <div class="form-check form-switch m-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="inputGerman"
                               name="languages[]" value="german">
                        <label class="form-check-label" for="inputGerman">
                            {{ __('become_partner.german') . ' German' }}
                        </label>
                    </div>

                    <div class="form-check form-switch m-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="inputItalian"
                               name="languages[]" value="italian">
                        <label class="form-check-label" for="inputItalian">
                            {{ __('become_partner.italian') }}
                        </label>
                    </div>
                </div>


                <h4 class="text-uppercase fw-bold mt-5">{{ __('become_partner.website') .'s' }}</h4>

                <div class="input-group mb-3">
                    <label class="input-group-text text-uppercase text-info bg-secondary fw-bolder"
                           for="company_url">Company</label>
                    <input type="url" name="company_url" id="company_url" placeholder="https://..."
                           class="form-control"/>
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text text-uppercase text-info bg-white fw-bolder" for="instagram">
                        <img src="{{Vite::image('instagram.svg')}}" alt="Instagram" width="20" height="20">
                    </label>
                    <input type="url" name="instagram" id="instagram" placeholder="https://..."
                           class="form-control"/>
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text text-uppercase text-info bg-white fw-bolder" for="youtube">
                        <img src="{{Vite::image('youtube.svg')}}" alt="Youtube" width="20" height="20">
                    </label>
                    <input type="url" name="youtube" id="youtube" placeholder="https://..."
                           class="form-control"/>
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text text-uppercase text-info bg-white fw-bolder" for="facebook">
                        <img src="{{Vite::image('facebook.svg')}}" alt="Facebook" width="20" height="20">
                    </label>
                    <input type="url" name="facebook" id="facebook" placeholder="https://..."
                           class="form-control"/>
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text text-uppercase text-info bg-white fw-bolder" for="twitter">
                        <img src="{{Vite::image('twitter.svg')}}" alt="Twitter" width="20" height="20">
                    </label>
                    <input type="url" name="twitter" id="twitter" placeholder="https://..."
                           class="form-control"/>
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text text-uppercase text-info bg-white fw-bolder" for="linkedin">
                        <img src="{{Vite::image('linkedin.svg')}}" alt="Linkedin" width="20" height="20">
                    </label>
                    <input type="url" name="linkedin" id="linkedin" placeholder="https://..."
                           class="form-control"/>
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text text-uppercase text-info bg-white fw-bolder" for="vimeo">
                        <img src="{{Vite::image('vimeo.svg')}}" alt="Vimeo" width="20" height="20">
                    </label>
                    <input type="url" name="vimeo" id="vimeo" placeholder="https://..." class="form-control"/>
                </div>


                <div class="form-check">
                    <div class="partner-register-terms">
                        <input class="form-check-input " type="checkbox" value=""
                               id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            <span>{{ __('become_partner.agree') }} {{ __('become_partner.sp') }}</span>
                            <br>
                            <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.partner-terms')) }}"
                               class="text-accent">
                                Voir
                            </a>
                        </label>
                        <br>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary text-white text-uppercase w-100">
                    {{ __('become_partner.register') }}
                </button>
            </form>
        </div>
    </div>

@endsection




