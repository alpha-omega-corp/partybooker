<?php

namespace App\Services;

use App\Interfaces\IFileService;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class FileService implements IFileService
{
    public function blogThumbnail(UploadedFile $file): string
    {
        return $this->store($file, 'images/blog/thumbnails', true);
    }

    private function store(UploadedFile $file, string $path, bool $resize, ?int $size = 500): string
    {
        $filename = time() . '_' . $file->getClientOriginalName();
        $destination = "storage/$path/$filename";
        $intervention = Image::make($file);

        if ($resize) {
            return $intervention->resize($size, $size)->save($destination)->basePath();
        }

        return $intervention->save($destination)->basePath();
    }

    public function companyLogo(UploadedFile $file): string
    {
        return $this->store($file, 'images/companies', false);
    }

    public function advertImage(UploadedFile $file): string
    {
        return $this->store($file, 'images/adverts', true);
    }

    public function advertFile(UploadedFile $file, string $dest): string
    {
        return $this->store($file, "images/adverts/$dest", false);
    }

    public function aboutImage(UploadedFile $file): string
    {
        return $this->store($file, 'images/app/about', true, 100);
    }

    public function delete(string $path): void
    {
        Storage::delete($path);
    }
}
