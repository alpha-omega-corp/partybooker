<?php

namespace App\Providers;

use App\Http\Middleware\LocaleMiddleware;
use App\Interfaces\IAdvertService;
use App\Interfaces\IImageService;
use App\Interfaces\ILocaleService;
use App\Interfaces\IPartnerPlanOptionService;
use App\Interfaces\IPaymentTransactionService;
use App\Interfaces\IPlanService;
use App\Models\Category;
use App\Services\AdvertService;
use App\Services\ImageService;
use App\Services\LocaleService;
use App\Services\PartnerPlanOptionService;
use App\Services\PaymentTransactionService;
use App\Services\PlanService;
use App\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;
use Laravel\Cashier\Cashier;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
        $this->app->register(TelescopeServiceProvider::class);
        $this->app->bind(IPaymentTransactionService::class, PaymentTransactionService::class);
        $this->app->bind(IPartnerPlanOptionService::class, PartnerPlanOptionService::class);
        $this->app->bind(IImageService::class, ImageService::class);
        $this->app->bind(IPlanService::class, PlanService::class);
        $this->app->bind(IAdvertService::class, AdvertService::class);
        $this->app->bind(ILocaleService::class, LocaleService::class);
    }

    public function boot(): void
    {
        Cashier::useCustomerModel(User::class);
        Vite::macro('image', fn(string $img) => $this->asset(trim("resources/images/$img")));

        Schema::defaultStringLength(191);
        $settings = DB::select('select * from settings');
        view()->share('settings', $settings);

        view()->share('footerCategories', $this->getFooterCategories());


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
