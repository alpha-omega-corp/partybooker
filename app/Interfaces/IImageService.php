<?php


namespace App\Interfaces;


interface IImageService
{
	public function createThumbnail($imagePath, $destinationPath, $widthSize = 500);
}
