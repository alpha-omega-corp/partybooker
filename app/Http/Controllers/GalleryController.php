<?php

namespace App\Http\Controllers;

use App\Interfaces\IFileService;
use App\Models\AdvertImage;
use App\Services\FileService;

class GalleryController extends Controller
{
    private IFileService $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function destroy(AdvertImage $image)
    {
        $this->fileService->delete($image->path);
        $image->delete();

        return back()->with('success', 'Image removed successfully');
    }

    public function update(AdvertImage $image)
    {
        $image->update([
            'is_primary' => true
        ]);

        return back()->with('success', 'Image updated successfully');
    }
}
