<x-modal.index
    :name="ModalName::APP_FAQ"
    :type="ModalType::CREATE"
    :size="ModalSize::MD"
    :hidden="true"
    :route="route('admin.faq.store')"
>

    <x-tab.locale>
        <x-slot:french>
            <x-forms.textarea
                name="question_fr"
                label="Question"
            />
            <x-forms.textarea
                name="answer_fr"
                label="Answer"
            />
        </x-slot:french>

        <x-slot:english>
            <x-forms.textarea
                name="question_en"
                label="Question"
            />
            <x-forms.textarea
                name="answer_en"
                label="Answer"
            />
        </x-slot:english>
    </x-tab.locale>

</x-modal.index>
