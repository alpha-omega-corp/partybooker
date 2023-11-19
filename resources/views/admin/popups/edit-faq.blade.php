<div id="edit-faq" class="popup">
    <div class="popup_form">
        <form method="POST" action="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/cp/faq/edit-faq') }}">
            {{ csrf_field() }}
            <div class="close">X</div>
            <h4>{{ __('partybooker-cp.edit_faq') }}</h4>
            <input type="text" name="faq-id" hidden/>
            <label>{{ __('partybooker-cp.select_type_faq') }}</label>
            <select name="type" required>
                <option value="0">{{ __('partybooker-cp.general_faq') }}</option>
                <option value="1">{{ __('partybooker-cp.partner_faq') }}</option>
            </select>
            <div class="row">
                <div class="col-md-6">
                    <label><img src="{{ Vite::image('en.png') }}"
                                alt="en"/>{{ __('partybooker-cp.question_faq') }}</label>
                    <textarea name="question_en" rows="3" required></textarea>

                    <label><img src="{{ Vite::image('en.png') }}"
                                alt="en"/>{{ __('partybooker-cp.answer_faq') }}</label>
                    <textarea name="answer_en" rows="5" required></textarea>
                </div>
                <div class="col-md-6">
                    <label><img src="{{ Vite::image('fr.png') }}"
                                alt="fr"/>{{ __('partybooker-cp.question_faq') }}</label>
                    <textarea name="question_fr" rows="3" required></textarea>

                    <label><img src="{{ Vite::image('fr.png') }}"
                                alt="fr"/>{{ __('partybooker-cp.answer_faq') }}</label>
                    <textarea name="answer_fr" rows="5" required></textarea>
                </div>
            </div>
            <button type="submit">{{ __('partybooker-cp.submit') }}</button>
        </form>
    </div>
</div>
