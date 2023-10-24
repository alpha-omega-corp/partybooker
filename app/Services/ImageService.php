<?php


namespace App\Services;


use App\Interfaces\IImageService;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ImageService implements IImageService
{

    public function createThumbnail($imagePath, $destinationPath, $widthSize = 500): void
    {
        $file = Image::make(Storage::path($imagePath));

        $width = $file->width();
        $height = $file->height();

        if ($width > $widthSize) {
            $p = $widthSize * 100 / $width / 100;
            $height = $height * $p;
        }

        $file->resize(500, $height)->save(Storage::path($destinationPath));
    }

}
