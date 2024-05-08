<?php

namespace App\Http\Controllers\App;

use App\Enums\FormType;
use App\Enums\Language;
use App\Http\Controllers\Controller;
use App\Http\Requests\AppFormRequest;
use App\Models\AppForm;
use App\Models\AppFormLocale;

class FormController extends Controller
{
    public function store(string $type, AppFormRequest $request)
    {
        $data = $request->validated();

        $form = AppForm::create([
            'type' => FormType::from($type)->name,
        ]);

        AppFormLocale::create([
            'app_form_id' => $form->id,
            'lang' => Language::FR,
            'label' => $data['label_fr'],
        ]);

        AppFormLocale::create([
            'app_form_id' => $form->id,
            'lang' => Language::EN,
            'label' => $data['label_en'],
        ]);

        return redirect()->back()->with('success', 'Form created successfully.');
    }

    public function update(AppForm $form, AppFormRequest $request)
    {
        $data = $request->validated();

        $form->ofLang(Language::FR)->first()->locale->update([
            'label' => $data['label_fr'],
        ]);

        $form->ofLang(Language::EN)->first()->locale->update([
            'label' => $data['label_en'],
        ]);

        return redirect()->back()->with('success', 'Form updated successfully.');
    }

    public function destroy(AppForm $form)
    {
        $form->locales()->delete();
        $form->delete();

        return redirect()->back()->with('success', 'Form deleted successfully.');
    }
}
