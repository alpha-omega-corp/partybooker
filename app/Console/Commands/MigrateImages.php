<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\ImageManager;

class MigrateImages extends Command
{
    protected $signature = 'app:webp';

    protected $description = 'Create webp files';

    public function handle(): void
    {

        $manager = new ImageManager(new Driver());
        $image = Storage::disk('public')->get('images/placeholder.png');
        $manager->read($image)->toWebp(90)->save('public/storage/placeholder.webp');

        /*
        $manager = new ImageManager(new Driver());
        $files = Storage::disk('public')->files('images/adverts');

        foreach ($files as $file) {
            $path = "public/storage/$file";
            $image = $manager->read($path);

            $newPath = str_replace(['.jpg', '.png', '.jpeg', '.JPG'], '.webp', $path);
            $image->toWebp(90)
                ->save($newPath);
        }
         */
    }
}
