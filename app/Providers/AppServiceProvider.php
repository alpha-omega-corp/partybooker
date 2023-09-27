<?php

namespace App\Providers;

use App\Interfaces\IImageService;
use App\Interfaces\IPartnerPlanOptionService;
use App\Services\ImageService;
use App\Services\IPaymentTransactionService;
use App\Services\PartnerPlanOptionService;
use App\Services\PaymentTransactionService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Vite;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IPaymentTransactionService::class, PaymentTransactionService::class);
        $this->app->bind(IPartnerPlanOptionService::class, PartnerPlanOptionService::class);
        $this->app->bind(IImageService::class, ImageService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Vite::macro('image', fn (string $img) => $this->asset("resources/images/{$img}"));
        Schema::defaultStringLength(191);
    }
}
