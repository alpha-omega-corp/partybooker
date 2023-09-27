@extends('admin.admin')

@section('title')
    <title>{{ __('partybooker-cp.add_new_partner') }} | {{ __('partybooker-cp.www') }}</title>
@endsection


@section('content')
    <div id="page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ __('partybooker-cp.add_new_partner') }}. {{ __('partybooker-cp.step_1') }}</h1>
                    <h2>{{ __('partybooker-cp.general_info') }}</h2>
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST"
                action="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/cp/create-new-partner') }}"
                class="add-partner" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        <h4>{{ __('partybooker-cp.contact_details') }}</h4>
                    </div>
                    <div class="col-md-3">
                        <label>{{ __('partybooker-cp.contact_name') }}</label>
                        <input id="name" type="text"
                            class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus
                            placeholder="{{ __('partybooker-cp.enter_contact_name') }}">
                    </div>
                    <div class="col-md-3">
                        <label>{{ __('partybooker-cp.contact_email') }}</label>
                        <input id="email" type="email"
                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                            value="{{ old('email') }}" required autocomplete="email"
                            placeholder="{{ __('partybooker-cp.enter_contact_email') }}">
                    </div>

                    <div class="col-md-3">
                        <label>{{ __('partybooker-cp.contact_phone') }}</label>
                        <input type="text" value="{{ old('phone') }}" name="phone"
                            placeholder="{{ __('partybooker-cp.enter_contact_phone') }}" required>
                    </div>
                    <div class="col-md-3">
                        <label>{{ __('partybooker-cp.password') }}</label>
                        <input id="password" type="password"
                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                            required autocomplete="new-password" placeholder="demo123" minlength="6" maxlength="15"
                            value="{{ old('password') }}" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <label>{{ __('partybooker-cp.is_commission') }}</label>
                        <span class="checkbox-item">
                            <input type="checkbox" id="is-commission" name="is_commission"
                                {{ isset($languages['is_commission']) ? 'checked' : '' }} value="1">
                        </span>
                    </div>
                    <div class="col-md-3 commission-amount" style="display: none">
                        <label>{{ __('partybooker-cp.commission_amount') }}</label>
                        <input type="number" value="{{ old('commission') }}" name="commission"
                            placeholder="{{ __('partybooker-cp.commission_amount') }} %">
                    </div>

                    <div class="col-md-3">
                        <label>{{ __('partybooker-cp.discount') }}</label>
                        <input type="number" min="0" max="100" value="{{ old('discount') }}" name="discount"
                            placeholder="{{ __('partybooker-cp.discount_amount') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 margin-t-30">
                        <h4>{{ __('partybooker-cp.company_main_info') }}</h4>
                    </div>
                    <div class="col-md-4">
                        <label class="padding-l-25"><img src="{{ Vite::image('images/en.png') }}"
                                alt="en" />{{ __('partybooker-cp.company_name') }}</label>
                        <input type="text" value="{{ old('en_company_name') }}" name="en_company_name"
                            placeholder="{{ __('partybooker-cp.enter_company_name') }}" maxlength="50" required>

                        <label class="padding-l-25"><img src="{{ Vite::image('images/fr.png') }}"
                                alt="fr" />{{ __('partybooker-cp.company_name') }}</label>
                        <input type="text" value="{{ old('fr_company_name') }}" name="fr_company_name"
                            placeholder="{{ __('partybooker-cp.enter_company_name') }}" maxlength="50" required>


                    </div>
                    <div class="col-md-4">
                        <label>{{ __('partybooker-cp.location') }}</label>
                        <select name="location" id="location" required>
                            <option selected disabled></option>
                            @include('common.cantons')
                        </select>

                        <label>{{ __('partybooker-cp.address') }}</label>
                        <input type="text" name="address" id="address_full" value="{{ old('address') }}"
                            placeholder="{{ __('partybooker-cp.full_address') }}" maxlength="100" required>
                    </div>
                    <div class="col-md-4">
                        <label>{{ __('partybooker-cp.phone') }}</label>
                        <input type="text" value="{{ old('company_phone') }}" name="company_phone"
                            placeholder="{{ __('partybooker-cp.fixed_phone') }}">

                        <label>{{ __('partybooker-cp.fax') }}</label>
                        <input type="text" value="{{ old('company_fax') }}" name="company_fax"
                            placeholder="{{ __('partybooker-cp.fax_number') }}">
                    </div>

                    @include('partial.map')


                    <div class="col-md-12  margin-t-30 dropzone">
                        <label for="logo">Logo
                            <div class="button" onclick="document.getElementById('logo').click();">Choose a file</div>
                            <div class="zone">Drag and drop file her or</div>
                            <input type="file" id="logo" name="logo">
                        </label>
                        <div id="filename"></div>
                    </div>

                    <div class="col-md-6">
                        <label class="padding-l-25"><img src="{{ Vite::image('images/en.png') }}"
                                alt="en" />{{ __('partybooker-cp.slogan') }}</label>
                        <textarea name="en_slogan" maxlength="250" placeholder="{{ __('partybooker-cp.activity_slogan') }}" rows="3">{{ old('en_slogan') }}</textarea>

                        <label class="padding-l-25"><img src="{{ Vite::image('images/en.png') }}"
                                alt="en" />{{ __('partybooker-cp.short_description') }}</label>
                        <textarea name="en_short_descr" maxlength="350" placeholder="{{ __('partybooker-cp.short_description_pl') }}"
                            rows="4" required class="textarea-wysiwyg">{{ old('en_short_descr') }}</textarea>

                        <label class="padding-l-25"><img src="{{ Vite::image('images/en.png') }}"
                                alt="en" />{{ __('partybooker-cp.full_description') }}</label>
                        <textarea name="en_full_descr" maxlength="3000" placeholder="{{ __('partybooker-cp.full_description_pl') }}"
                            rows="6" required class="textarea-wysiwyg">{{ old('en_full_descr') }}</textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="padding-l-25"><img src="{{ Vite::image('images/fr.png') }}"
                                alt="en" />{{ __('partybooker-cp.slogan') }}</label>
                        <textarea name="fr_slogan" maxlength="250" placeholder="{{ __('partybooker-cp.activity_slogan') }}" rows="3">{{ old('fr_slogan') }}</textarea>

                        <label class="padding-l-25"><img src="{{ Vite::image('images/fr.png') }}"
                                alt="en" />{{ __('partybooker-cp.short_description') }}</label>
                        <textarea name="fr_short_descr" maxlength="350" placeholder="{{ __('partybooker-cp.short_description_pl') }}"
                            rows="4" required class="textarea-wysiwyg">{{ old('fr_short_descr') }}</textarea>

                        <label class="padding-l-25"><img src="{{ Vite::image('images/fr.png') }}"
                                alt="en" />{{ __('partybooker-cp.full_description') }}</label>
                        <textarea name="fr_full_descr" maxlength="3000" placeholder="{{ __('partybooker-cp.full_description_pl') }}"
                            rows="6" required class="textarea-wysiwyg">{{ old('fr_full_descr') }}</textarea>
                    </div>
                    <?php $languages = old('languages') ? array_flip(old('languages')) : []; ?>
                    <div class="col-md-12">
                        <label>{{ __('partybooker-cp.languages') }}</label>
                        <span class="checkbox-item">
                            <input type="checkbox" name="languages[]" {{ isset($languages['french']) ? 'checked' : '' }}
                                value="french">
                            <span>{{ __('partybooker-cp.french') }}</span>
                        </span>
                        <span class="checkbox-item">
                            <input type="checkbox" name="languages[]" {{ isset($languages['english']) ? 'checked' : '' }}
                                value="english">
                            <span>{{ __('partybooker-cp.english') }}</span>
                        </span>
                        <span class="checkbox-item">
                            <input type="checkbox" name="languages[]" {{ isset($languages['german']) ? 'checked' : '' }}
                                value="german">
                            <span>{{ __('partybooker-cp.german') }}</span>
                        </span>
                        <span class="checkbox-item">
                            <input type="checkbox" name="languages[]" {{ isset($languages['italian']) ? 'checked' : '' }}
                                value="italian">
                            <span>{{ __('partybooker-cp.italian') }}</span>
                        </span>
                        <span class="checkbox-item">
                            <input type="checkbox" name="languages[]" value="other"
                                {{ isset($languages['other']) ? 'checked' : '' }} class="other">
                            <span>{{ __('partybooker-cp.other') }}</span>
                        </span>
                    </div>
                    <div class="col-md-6 additional-field margin-t-30">
                        <label>{{ __('partybooker-cp.enter_other_languages') }}</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 margin-t-30">
                        <h4>WWW</h4>
                    </div>
                    <div class="col-md-4">
                        <label>{{ __('partybooker-cp.website') }}</label>
                        <input type="url" value="{{ old('company_url') }}" name="company_url" class="url"
                            placeholder="{{ __('partybooker-cp.url_website') }}">

                        <label>Facebook</label>
                        <input type="url" value="{{ old('facebook') }}" name="facebook"
                            placeholder="{{ __('partybooker-cp.url_facebook') }}">

                        <label>Twitter</label>
                        <input type="url" value="{{ old('twitter') }}" name="twitter"
                            placeholder="{{ __('partybooker-cp.url_twitter') }}">
                    </div>
                    <div class="col-md-4">
                        <label>Instagram</label>
                        <input type="url" value="{{ old('instagram') }}" name="instagram"
                            placeholder="{{ __('partybooker-cp.url_instagram') }}">

                        <label>LinkedIn</label>
                        <input type="url" value="{{ old('linkedin') }}" name="linkedin"
                            placeholder="{{ __('partybooker-cp.url_linkedin') }}">
                    </div>
                    <div class="col-md-4">
                        <label>Youtube</label>
                        <input type="url" value="{{ old('youtube') }}" name="youtube"
                            placeholder="{{ __('partybooker-cp.url_youtube') }}">

                        <label>Vimeo</label>
                        <input type="url" value="{{ old('vimeo') }}" name="vimeo"
                            placeholder="{{ __('partybooker-cp.url_vimeo') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 margin-t-30">
                        <h4>SEO</h4>
                    </div>
                    <div class="col-md-6">
                        <label>Title EN</label>
                        <input type="text" value="{{ old('en_seo_title') }}" name="en_seo_title" class="url"
                            placeholder="En Seo title">
                        <label>Description EN</label>
                        <textarea value="{{ old('en_seo_desc') }}" name="en_seo_desc" placeholder="En SEO description"></textarea>

                    </div>
                    <div class="col-md-6">
                        <label>Title FR</label>
                        <input type="text" value="{{ old('fr_seo_title') }}" name="fr_seo_title"
                            placeholder="Fr SEO title">
                        <label>Description FR</label>
                        <textarea value="{{ old('fr_seo_desc') }}" name="fr_seo_desc" placeholder="Fr SEO description"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label>Keywords EN</label>
                        <input type="text" value="{{ old('en_seo_keywords') }}" name="en_seo_keywords"
                            placeholder="En SEO Keywords">
                    </div>
                    <div class="col-md-6">
                        <label>Keywords FR</label>
                        <input type="text" value="{{ old('fr_seo_keywords') }}" name="fr_seo_keywords"
                            placeholder="Fr SEO Keywords">
                    </div>
                </div>

                {{ csrf_field() }}
                <button type="submit">{{ __('partybooker-cp.submit') }}</button>
            </form>

        </div>
    </div>
    @if (old('location'))
        <script>
            $(document).ready(function() {
                $("#location").val('{{ old('location') }}')
            });
        </script>
    @endif
@endsection

@push('footer')
    <script>
        $('input#is-commission').on('click', function() {
            if ($(this).prop('checked')) {
                $('div.commission-amount').show();
            } else {
                $('div.commission-amount').hide();
            }
        });
    </script>
    <script src="https://cdn.tiny.cloud/1/{{ env('TINYMCE_API_KEY') }}/tinymce/5/tinymce.min.js" referrerpolicy="origin">
    </script>
    <script>
        tinymce.init({
            selector: '.textarea-wysiwyg',
            // plugins: 'print preview fullpage paste  save code fullscreen link template codesample table charmap hr  advlist lists wordcount noneditable charmap',
            plugins: 'fullpage paste code fullscreen link template hr advlist lists wordcount noneditable charmap',
            menubar: 'edit view format table',
            toolbar: 'bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | removeformat | fullscreen  preview  | link anchor',
            toolbar_sticky: true,
            height: 900,
            setup: function(editor) {
                editor.on('change', function() {
                    editor.save();
                    var lang = $('div.lang-nav ul li.active').attr('lan');
                    if ($('#' + editor.id + '_ifr').contents().find('body')[0].innerText.length > 1) {
                        $('li.post.' + lang + ' span').addClass('ok').html('OK');
                    } else {
                        $('li.post.' + lang + ' span').removeClass('ok').html('NaN');
                    }
                });
            }
        });

        $(document).ready(function() {
            $('.tox-notification__dismiss').click();
        });
    </script>
@endpush
