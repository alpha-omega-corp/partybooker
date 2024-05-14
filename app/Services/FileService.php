<?php

namespace App\Services;

use App\Interfaces\IFileService;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;

class FileService implements IFileService
{
    public function blogThumbnail(UploadedFile $file): string
    {
        return $this->store($file, 'images/app/blog', true);
    }

    private function store(UploadedFile $file, string $path, bool $resize, ?int $size = 500): string
    {
        $filename = time() . '_' . $file->getClientOriginalName();
        $destination = "storage/$path/$filename";
        $intervention = ImageManager::imagick()->read($file);

        if ($resize) {
            $intervention = $intervention->resize($size, $size);
        }

        $intervention->save($destination);

        return $destination;
    }

    public function companyLogo(UploadedFile $file): string
    {
        return $this->store($file, 'images/company_logos', false);
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
        if (Storage::exists($path)) {
            Storage::delete($path);
        }
    }
}
