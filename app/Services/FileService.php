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
        return $this->store($file, 'images/blog/thumbnails');
    }

    private function store(UploadedFile $file, string $path, int $size = 500): string
    {
        $intervention = Image::make($file);
        $filename = time() . '_' . $file->getClientOriginalName();

        $image = $intervention->resize($size, $size)->save("storage/$path/$filename");
        return $image->basePath();
    }

    public function companyLogo(UploadedFile $file): string
    {
        return $this->store($file, 'images/companies', 100);
    }

    public function advertImage(UploadedFile $file): string
    {
        return $this->store($file, 'images/adverts');
    }

    public function advertMenu(UploadedFile $file): string
    {
        return $this->store($file, 'images/adverts/menus');
    }

    public function aboutImage(UploadedFile $file): string
    {
        return $this->store($file, 'images/app/about');
    }

    public function delete(string $path): void
    {
        Storage::delete($path);
    }
}
