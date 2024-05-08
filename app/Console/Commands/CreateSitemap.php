<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class CreateSitemap extends Command
{
    protected $signature = 'app:create-sitemap';

    protected $description = 'Generate sitemap file';


    public function handle(): void
    {
        SitemapGenerator::create('https://partybooker.ch')->writeToFile('public/sitemap.xml');
    }
}
