<?php

namespace App\Providers;

use App\Models\User;
use App\View\Composers\FooterComposer;
use App\View\Composers\IconComposer;
use App\View\Composers\SettingComposer;
use Exception;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\ImageManager;
use Laravel\Cashier\Cashier;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->register(TelescopeServiceProvider::class);
    }

    public function boot(): void
    {
        $manager = new ImageManager(new Driver());

        Vite::macro('advert', function (string $img) use ($manager) {
            $compressedPath = str_replace('.jpg', '.webp', $img);

            if (file_exists($compressedPath)) {
                return asset($compressedPath);
            }

            try {
                $image = $manager->read($img);
                $segments = explode('/', $img);
                $name = $segments[count($segments) - 1];
                $path = "storage/images/adverts/" . str_replace('.jpg', '.webp', $name);

                $image->toWebp(90)
                    ->save($path);
            } catch (Exception $e) {
                return asset($img);
            }

            return asset($compressedPath);
        });

        Vite::macro('app', fn(string $img) => $this->asset(trim("resources/images/$img")));
        Vite::macro('social', fn(string $name) => $this->asset(trim("resources/images/socials/$name.png")));

        View::composer("*", IconComposer::class);
        View::composer("*", SettingComposer::class);
        View::composer("*", FooterComposer::class);

        Paginator::useBootstrapFive();
        Cashier::useCustomerModel(User::class);
    }


}
