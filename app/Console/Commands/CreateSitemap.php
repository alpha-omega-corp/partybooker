<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class CreateSitemap extends Command
{
    protected $signature = 'app:create-sitemap {segment}';

    protected $description = 'Generate sitemap file';


    public function handle(): void
    {
        $segment = $this->argument('segment');
        $url = 'https://www.partybooker.ch';

        switch ($segment) {
            case 'all':
                SitemapGenerator::create($url)
                    ->writeToFile('public/sitemap.xml');

                Sitemap::create()
                    ->add(Url::create($url)->addImage("$url/images/background.jpg", 'Home Image'));
                break;
            case 'listing':
                SitemapGenerator::create('https://www.partybooker.ch')->getSitemap()->writeToFile('public/maps/listing.xml');
                break;
        }

    }
}
