<x-modal.index
    :iterator="$item->id"
    :name="ModalName::APP_FAQ"
    :type="ModalType::UPDATE"
    :size="ModalSize::MD"
    :background="false"
    :route="route('admin.faq.update', ['faq' => $item])"
>

    <x-tab.locale>
        <x-slot:french>
            @php($locale = $item->ofLang(Language::FR)->first()->locale)
            <x-forms.textarea
                name="question_fr"
                label="Question"
                :value="$locale->question"
            />
            <x-forms.textarea
                name="answer_fr"
                label="Answer"
                :value="$locale->answer"
            />
        </x-slot:french>

        <x-slot:english>
            @php($locale = $item->ofLang(Language::EN)->first()->locale)

            <x-forms.textarea
                name="question_en"
                label="Question"
                :value="$locale->question"
            />
            <x-forms.textarea
                name="answer_en"
                label="Answer"
                :value="$locale->answer"
            />
        </x-slot:english>
    </x-tab.locale>

</x-modal.index>
