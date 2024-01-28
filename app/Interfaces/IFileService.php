<?php

namespace App\Interfaces;

use Illuminate\Http\UploadedFile;

interface IFileService
{
    public function blogThumbnail(UploadedFile $file): string;

    public function partnerThumbnail(UploadedFile $file): string;
}
