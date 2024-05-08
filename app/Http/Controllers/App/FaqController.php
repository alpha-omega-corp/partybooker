<?php

namespace App\Http\Controllers\App;


use App\Enums\Language;
use App\Http\Controllers\Controller;
use App\Http\Requests\FaqRequest;
use App\Models\AppFaq;
use App\Models\AppFaqLocale;
use Illuminate\Http\RedirectResponse;

class FaqController extends Controller
{
    public function store(FaqRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $faq = AppFaq::create();

        AppFaqLocale::create([
            'app_faq_id' => $faq->id,
            'lang' => Language::FR->value,
            'question' => $data['question_fr'],
            'answer' => $data['answer_fr']
        ]);

        AppFaqLocale::create([
            'app_faq_id' => $faq->id,
            'lang' => Language::EN->value,
            'question' => $data['question_en'],
            'answer' => $data['answer_en']
        ]);

        return back()->with('success', 'Faq added successfully');
    }

    public function update(AppFaq $faq, FaqRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $faq->ofLang(Language::FR)->first()->locale->update([
            'question' => $data['question_fr'],
            'answer' => $data['answer_fr'],
        ]);

        $faq->ofLang(Language::EN)->first()->locale->update([
            'question' => $data['question_en'],
            'answer' => $data['answer_en']
        ]);

        return back()->with('success', 'Faq updated successfully');
    }

    public function destroy(AppFaq $faq): RedirectResponse
    {
        $faq->locales()->delete();
        $faq->delete();
        return back()->with('success', 'Faq deleted successfully');
    }
}
