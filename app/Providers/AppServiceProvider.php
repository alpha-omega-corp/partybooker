<?php

namespace App\Providers;

use App\Interfaces\IImageService;
use App\Interfaces\IPartnerPlanOptionService;
use App\Http\Middleware\LocaleMiddleware;
use App\Models\Category;
use App\Models\CategoryLocale;
use App\Services\ImageService;
use App\Services\IPaymentTransactionService;
use App\Services\PartnerPlanOptionService;
use App\Services\PaymentTransactionService;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


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

        if ($this->app->environment() !== 'production') {
            $this->app->register(IdeHelperServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    private function getFooterCategories()
    {

        $lang = LocaleMiddleware::getLocale() ? 'en' : 'fr';
        $categories = $value = Cache::get($lang . '_footer_categories');
        if (!$categories) {
            $categories = Category::with(['lang'])->whereNull('parent_id')->get();
            Cache::put($lang . '_footer_categories', $categories, 60000);
        }
        return $categories;
    }
}
