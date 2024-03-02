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

    public function companyLogo(UploadedFile $file): string
    {
        return $this->store($file, 'images/companies');
    }

    public function advertImage(UploadedFile $file): string
    {
        return $this->store($file, 'images/adverts');
    }

    public function delete(string $path): void
    {
        Storage::delete($path);
    }
}
