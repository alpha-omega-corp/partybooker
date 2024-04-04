<?php

namespace App\Providers;

use App\Models\User;
use App\View\Composers\DashboardComposer;
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
        View::composer("*", IconComposer::class);
        View::composer("*", SettingComposer::class);
        View::composer([
            'app.admin.partner.index',
            'app.partner.dashboard',
        ], DashboardComposer::class);
        Paginator::useBootstrapFive();

        Vite::macro('app', fn(string $img) => $this->asset(trim("resources/images/app/$img")));
        Vite::macro('categories', fn(string $img) => $this->asset(trim("resources/images/categories/$img")));
        Vite::macro('flag', fn(string $name) => $this->asset(trim("resources/images/flags/$name")));
        Vite::macro('payment', fn(string $name) => $this->asset(trim("resources/images/payments/$name")));
        Vite::macro('social', fn(string $name) => $this->asset(trim("resources/images/socials/$name.png")));

        Cashier::useCustomerModel(User::class);
    }


}
