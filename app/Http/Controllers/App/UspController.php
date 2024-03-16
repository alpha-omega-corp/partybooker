<?php

namespace App\Http\Controllers\App;

use App\Enums\Language;
use App\Http\Controllers\Controller;
use App\Http\Requests\UspRequest;
use App\Models\AppUsp;
use App\Models\AppUspLocale;
use Illuminate\Http\RedirectResponse;

class UspController extends Controller
{
    public function store(UspRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $usp = AppUsp::create([
            'position' => count(AppUsp::all()) + 1,
        ]);

        AppUspLocale::create([
            'app_usp_id' => $usp->id,
            'lang' => Language::FR,
            'title' => $data['title_fr'],
            'description' => $data['description_fr'],
        ]);

        AppUspLocale::create([
            'app_usp_id' => $usp->id,
            'lang' => Language::EN,
            'title' => $data['title_en'],
            'description' => $data['description_en'],
        ]);

        return back()->with('success', 'USP created successfully!');
    }

    public function update(AppUsp $usp, UspRequest $request)
    {
        $data = $request->validated();

        $usp->ofLang(Language::FR)->first()->locale->update([
            'title' => $data['title_fr'],
            'description' => $data['description_fr'],
        ]);

        $usp->ofLang(Language::EN)->first()->locale->update([
            'title' => $data['title_en'],
            'description' => $data['description_en'],
        ]);

        return back()->with('success', 'USP updated successfully!');
    }

    public function destroy(AppUsp $usp)
    {
        $usp->delete();
        return back()->with('success', 'USP deleted successfully!');
    }
}
