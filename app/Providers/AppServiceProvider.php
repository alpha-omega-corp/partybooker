<?php

namespace App\Providers;

use App\Models\User;
use App\View\Composers\FooterComposer;
use App\View\Composers\IconComposer;
use App\View\Composers\SettingComposer;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;
use Laravel\Cashier\Cashier;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->register(TelescopeServiceProvider::class);
    }

    public function boot(): void
    {
        Vite::macro('app', fn(string $img) => $this->asset(trim("resources/images/$img")));
        Vite::macro('social', fn(string $name) => $this->asset(trim("resources/images/socials/$name.png")));

        View::composer("*", IconComposer::class);
        View::composer("*", SettingComposer::class);
        View::composer("*", FooterComposer::class);

        Paginator::useBootstrapFive();
        Cashier::useCustomerModel(User::class);
    }


}
