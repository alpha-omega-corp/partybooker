<?php

use App\Models\ServiceImage;
use App\Services\ImageService;
use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
	$this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');


Artisan::command('resize-images', function () {
	$images = ServiceImage::all();
	Storage::makeDirectory('images/thumbnails');


	$imageService = new ImageService();

	$count = 0;
	foreach ($images as $image) {
		$count++;
		if (!is_file(Storage::path('images/' . $image->image_name))) {
			continue;
		}

		$imageService->createThumbnail('images/' . $image->image_name, 'images/thumbnails/' . $image->image_name);
		$this->comment("{$count}/{$images->count()}");
	}
})->describe("Resize existing images for max width 500px");
