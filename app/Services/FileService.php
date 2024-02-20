<?php

namespace App\Services;

use App\Interfaces\IFileService;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class FileService implements IFileService
{
    public function blogThumbnail(UploadedFile $file): string
    {
        return $this->store($file, 'images/blog/thumbnails');
    }

    private function store(UploadedFile $file, string $path): string
    {
        $filename = time() . '_' . $file->getClientOriginalName();
        Storage::putFileAs($path, $file, $filename);
        return 'storage/' . $path . '/' . $filename;
    }

    public function partnerLogo(UploadedFile $file): string
    {
        return $this->store($file, 'images/partner/logos');
    }
}
