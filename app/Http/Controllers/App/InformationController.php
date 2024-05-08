<?php

namespace App\Http\Controllers\App;

use App\Enums\Language;
use App\Http\Controllers\Controller;
use App\Http\Requests\InformationRequest;
use App\Models\AppInformation;
use App\Models\AppInformationLocale;
use Illuminate\Http\RedirectResponse;

class InformationController extends Controller
{
    public function store(InformationRequest $request)
    {
        $data = $request->validated();

        $information = AppInformation::create();

        AppInformationLocale::create([
            'app_information_id' => $information->id,
            'lang' => Language::FR->value,
            'title' => $data['title_fr'],
            'content' => $data['content_fr']
        ]);

        AppInformationLocale::create([
            'app_information_id' => $information->id,
            'lang' => Language::EN->value,
            'title' => $data['title_fr'],
            'content' => $data['content_fr']
        ]);

        return back()->with('success', 'Information added successfully');
    }

    public function update(AppInformation $information, InformationRequest $request)
    {
        $data = $request->validated();

        $information->ofLang(Language::FR)->first()->locale->update([
            'title' => $data['title_fr'],
            'content' => $data['content_fr'],
        ]);

        $information->ofLang(Language::EN)->first()->locale->update([
            'title' => $data['title_en'],
            'content' => $data['content_en']
        ]);

        return back()->with('success', 'Information updated successfully');
    }

    public function destroy(AppInformation $information): RedirectResponse
    {
        $information->locales()->delete();
        $information->delete();
        return back()->with('success', 'Information deleted successfully');
    }
}
