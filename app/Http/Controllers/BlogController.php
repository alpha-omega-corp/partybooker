<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Interfaces\IFileService;
use App\Models\Post;
use App\Services\FileService;
use Illuminate\Http\RedirectResponse;

class BlogController extends Controller
{
    private IFileService $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function index()
    {
        return view('app.blog.manage', [
            'posts' => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('app.blog.post', [
            'post' => $post
        ]);
    }

    public function store(StorePostRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['image'] = $this->fileService->blogThumbnail($data['image']);
        Post::create($data);

        return redirect()->back()->with('success', 'Post created');
    }

    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();

        return redirect()->back()->with('success', 'Post deleted');
    }

    public function status(Post $post): RedirectResponse
    {
        $post->update([
            'status' => !$post->status
        ]);

        return redirect()->back()->with('success', 'Post status changed');
    }

    public function update(UpdatePostRequest $request, Post $post): RedirectResponse
    {
        $data = $request->validated();
        if (!str_contains($post->image, $data['image']->getClientOriginalName())) {
            $data['image'] = $this->fileService->blogThumbnail($data['image']);
        }

        $post->update($data);

        return redirect()->back()->with('success', 'Post updated');
    }
}
