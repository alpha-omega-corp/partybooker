<?php

namespace App\Http\Controllers\App;

use App\Enums\Language;
use App\Http\Controllers\Controller;
use App\Http\Requests\AppContentRequest;
use App\Models\AppContent;
use Illuminate\Http\RedirectResponse;

class ContentController extends Controller
{
    public function update(AppContent $content, AppContentRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $content->ofLang(Language::FR)->first()->locale->update([
            'title' => $data['title_fr'],
            'content' => $data['content_fr'],
        ]);

        $content->ofLang(Language::EN)->first()->locale->update([
            'title' => $data['title_en'],
            'content' => $data['content_en'],
        ]);

        return back()->with('success', 'Content updated successfully');
    }
}
