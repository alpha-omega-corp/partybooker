<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Saloon\XmlWrangler\Exceptions\XmlReaderException;
use Saloon\XmlWrangler\XmlReader;
use Throwable;

class CreateAccess extends Command
{
    protected $signature = 'app:create-access';

    protected $description = 'Create .htaccess file';


    public function handle(): void
    {
        try {
            $reader = XmlReader::fromFile('public/sitemap.xml');
            $urls = $reader->value('urlset.url.loc')->collect();
            dd($urls->sort());

        } catch (XmlReaderException $e) {
            $this->error($e->getMessage());
        } catch (Throwable $e) {
            $this->error($e->getMessage());
        }
    }
}
