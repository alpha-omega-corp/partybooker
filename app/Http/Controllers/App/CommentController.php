<?php

namespace App\Http\Controllers\App;

use App\Enums\Language;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\AppComment;
use App\Models\AppCommentLocale;
use Illuminate\Http\RedirectResponse;

class CommentController extends Controller
{

    public function store(CommentRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $comment = AppComment::create([
            'name' => $data['name'],
        ]);

        AppCommentLocale::create([
            'app_comment_id' => $comment->id,
            'lang' => Language::FR->value,
            'content' => $data['content_fr']
        ]);

        AppCommentLocale::create([
            'app_comment_id' => $comment->id,
            'lang' => Language::EN->value,
            'content' => $data['content_en']
        ]);

        return back()->with('success', 'Comment added successfully');
    }

    public function update(AppComment $comment, CommentRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $comment->update(['name' => $data['name']]);
        $comment->ofLang(Language::FR)->first()->locale->update(['content' => $data['content_fr']]);
        $comment->ofLang(Language::EN)->first()->locale->update(['content' => $data['content_en']]);

        return back()->with('success', 'Comment updated successfully');
    }

    public function destroy(AppComment $comment): RedirectResponse
    {
        $comment->delete();
        return back()->with('success', 'Comment deleted successfully');
    }
}
