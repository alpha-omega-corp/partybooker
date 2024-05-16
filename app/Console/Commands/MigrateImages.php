<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\ImageManager;
use Storage;

class MigrateImages extends Command
{
    protected $signature = 'app:webp';

    protected $description = 'Create webp files';

    public function handle(): void
    {

        $manager = new ImageManager(new Driver());
        $image = Storage::disk('public')->get('images/background.jpg');
        $manager->read($image)->toWebp(90)->save('public/storage/images/background.webp');
        
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
