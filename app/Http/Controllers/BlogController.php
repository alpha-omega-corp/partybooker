<?php

namespace App\Http\Controllers;

use App\Enums\Language;
use App\Http\Requests\UpdatePostRequest;
use App\Interfaces\IFileService;
use App\Models\AppPost;
use App\Models\AppPostLocale;
use App\Services\FileService;
use Illuminate\Http\RedirectResponse;

class BlogController extends Controller
{
    private IFileService $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function show(AppPost $post)
    {
        return view('app.blog.post', [
            'post' => $post
        ]);
    }

    public function store(UpdatePostRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $post = AppPost::create([
            'slug' => $data['slug'],
            'image' => $this->fileService->blogThumbnail($data['image']),
            'status' => false
        ]);

        AppPostLocale::create([
            'app_post_id' => $post->id,
            'lang' => Language::FR,
            'alt' => $data['alt_fr'],
            'title' => $data['title_fr'],
            'content' => $data['content_fr'],
        ]);

        AppPostLocale::create([
            'app_post_id' => $post->id,
            'lang' => Language::EN,
            'alt' => $data['alt_en'],
            'title' => $data['title_en'],
            'content' => $data['content_en'],
        ]);

        return back()->with('success', 'Blog post created successfully');
    }

    public function destroy(AppPost $post): RedirectResponse
    {
        $post->delete();
        return redirect()->back()->with('success', 'Blog post deleted successfully');
    }

    public function status(AppPost $post): RedirectResponse
    {
        $post->update([
            'status' => !$post->status
        ]);

        return redirect()->back()->with('success', 'AppPost status changed');
    }

    public function update(AppPost $post, UpdatePostRequest $request): RedirectResponse
    {
        $data = $request->validated();
        dd($data);

        /*
         *  if ($upload != null) {
             $thumbnail = $this->fileService->blogThumbnail($upload);
         }
         */

        $post->update([
            'slug' => $data['slug'],
            'image' => $thumbnail ?? $post->image,
        ]);

        $post->ofLang(Language::FR)->first()->locale->update([
            'alt' => $data['alt_fr'],
            'title' => $data['title_fr'],
            'content' => $data['content_fr'],
        ]);

        $post->ofLang(Language::EN)->first()->locale->update([
            'alt' => $data['alt_en'],
            'title' => $data['title_en'],
            'content' => $data['content_en'],
        ]);

        return back()->with('success', 'Blog post updated successfully');
    }


}
