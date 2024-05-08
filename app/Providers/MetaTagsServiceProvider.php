<?php

namespace App\Providers;

use Butschster\Head\Contracts\MetaTags\MetaInterface;
use Butschster\Head\Contracts\Packages\ManagerInterface;
use Butschster\Head\MetaTags\Meta;
use Butschster\Head\Providers\MetaTagsApplicationServiceProvider as ServiceProvider;

class MetaTagsServiceProvider extends ServiceProvider
{
    protected function packages()
    {
        // Create your own packages here
    }

    protected function registerMeta(): void
    {
        $this->app->singleton(MetaInterface::class, function () {
            $meta = new Meta(
                $this->app[ManagerInterface::class],
                $this->app['config']
            );

            if (file_exists(public_path('favicon.ico'))) {
                $meta->setFavicon('/favicon.ico');
            }

            $meta->initialize();

            return $meta;
        });
    }
}
