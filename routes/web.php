<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\mainWebsite;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ServiceImageController;
use App\Http\Controllers\Web\ProfileController;
use App\Http\Middleware\LocaleMiddleware;

Route::fallback(function () {
    return response()->view('404');
});

Route::get('/locale/{lang}', [LocaleController::class, 'setLocale'])->name('locale');

Route::controller(AuthController::class)
    ->name('auth.')
    ->group(function () {
        Route::post('/login', 'authenticate')->name('login');
        Route::get('/logout', 'logout')->name('logout');
    });


Route::name('guest.')
    ->group(function () {

        // Http Controller
        Route::controller(AjaxController::class)
            ->prefix('ajax')
            ->name('ajax.')
            ->group(function () {
                Route::get('/partners', 'partners')->name('partners');
                Route::get('/partner-tops', 'partnerTops')->name('tops');
            });

        // HomeController
        Route::controller(HomeController::class)
            ->name('guest.')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/a-propos', 'about')->name('about');
                Route::get('/partenariat', 'partnership')->name('partnership');
                Route::get('/blog', 'blog')->name('blog');
            });

        // ListingController
        Route::controller(ListingController::class)
            ->name('listing.')
            ->group(function () {
                Route::get('/annonces/{category?}/{child?}', 'index')->name('index');
                Route::get('/annonce/{company:slug}/{advert:slug}', 'advert')->name('advert');
            });

        // BlogController
        Route::controller(BlogController::class)
            ->name('blog.')
            ->prefix('blog')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/{post:slug}', 'show')->name('show');
            });

        // CompanyController
        Route::controller(CompanyController::class)
            ->name('company.')
            ->prefix('company')
            ->group(function () {
                Route::get('/{company:id}/request/', 'request')->name('request');
            });
    });

Route::name('partner.')
    ->prefix('partner')
    ->group(function () {

        Route::controller(PartnerController::class)
            ->middleware('partner')
            ->prefix('{partner:id}')
            ->group(function () {
                Route::get('/profile', 'dashboard')->name('dashboard');
                Route::put('/company', 'company')->name('company');
                Route::put('/plan', 'plan')->name('plan');
            });

        Route::controller(PartnerController::class)
            ->group(function () {
                Route::post('/', 'store')->name('store');
            });
    });

Route::middleware('admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::controller(AdminController::class)
            ->name('dashboard.')
            ->prefix('dashboard')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/blog', 'blog')->name('blog');
                Route::get('/messages', 'messages')->name('messages');
                Route::get('/partners', 'partners')->name('partners');
                Route::post('/tops', [AdminController::class, 'updateTopServices'])->name('tops');

            });


        Route::controller(BlogController::class)
            ->name('blog.')
            ->prefix('blog')
            ->group(function () {
                Route::post('/', 'store')->name('store');
                Route::put('/{post}', 'update')->name('update');
                Route::delete('/{post}', 'destroy')->name('destroy');
                Route::put('/{post}/status', 'status')->name('status');
            });
    });


Route::group(['prefix' => 'en'], function () {
    Route::get('/partner', 'mainWebsite@partner');
    Route::view('/partner/register', 'partner-register');

    Route::get('/listings', '\App\Http\Controllers\Web\ListingController@index');
    Route::get('/listings-filtered', '\App\Http\Controllers\Web\ListingController@filtered');
    Route::get('/listings/{category}', '\App\Http\Controllers\Web\ListingController@category');
    Route::get('/listings/{cat}/{subcat}', '\App\Http\Controllers\Web\ListingController@subcategory');
    Route::get('/listing/{slug}', '\App\Http\Controllers\Web\ListingController@service');


    Route::get('/partner-terms', 'mainWebsite@partnerterms');

    Route::get('/sitemap', '\App\Http\Controllers\Web\PageController@siteMap');

});


Route::group(['prefix' => null], function () {
    Route::get('/partenaire', 'mainWebsite@partner');
    Route::view('/partenaire/inscription', 'partner-register');
    Route::get('/conditions-generales-partnaires', 'mainWebsite@partnerterms');

    Route::get('/plan-du-site', '\App\Http\Controllers\Web\PageController@siteMap');
});

Route::group(['prefix' => LocaleMiddleware::getLocale()], function () {


    Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
    Route::get('/callback/{provider}', 'SocialController@callback');

    Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.email');
    Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail');
    Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.request');
    Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.reset');


    Route::get('/user-terms', 'mainWebsite@userterms');
    Route::get('/faq', 'mainWebsite@faq');
    Route::get('/contacts', 'mainWebsite@contacts');

    //POST
    Route::post('/partner/reg', 'partnerController@register');
    Route::post('/subscribe', 'ajaxController@subscribe');
    Route::post('/leave-phone', [mainWebsite::class, 'phoneQuestion'])->name('question.phone');
    Route::post('/contact-form', 'ajaxController@contact');

    Route::post('/rate', 'ajaxController@rate');
    Route::post('/stat', 'ajaxController@statClicks');

    Route::get('/sitemap_{lang}.xml', 'SiteMapController@sitemap');
    Route::post('/register', [RegisterController::class, 'register'])->name('user.register');


    //EMAIL VERIFICATION
    Route::middleware(['auth'])->group(function () {
        Route::get('/verify/{email}/{email_hash}', 'emailVerify@index');
        Route::get('/plan-options/{idPartner}', '\App\Http\Controllers\Web\PlanOptionController@getPlanOptionsAjax');
        Route::get('/categories', '\App\Http\Controllers\Web\CategoryController@getCategoriesAjax');
        Route::get('/partner/{id_partner}/plan-options', '\App\Http\Controllers\Web\PartnerController@getOptionsAjax');
    });
    Route::get('/email-verifyed', 'emailVerify@verified')->middleware(['auth', 'email']);
    Route::get('/email-verification', 'emailVerify@verification')->middleware(['auth', 'email-ok']);


    //ACCESS to PARTYBOOKER CP
    Route::middleware(['auth', 'admin', 'email'])->group(function () {

        Route::get('/cp/partner-cp/{id_partner}/advert', '\App\Http\Controllers\Web\ProfileController@advert')->name('profile-advert-admin');
        Route::get('/cp/partner-cp/{id_partner}/plans', '\App\Http\Controllers\Web\ProfileController@adminPlans')->name('profile-plans-admin');
        Route::post('/cp/partner-cp/edit-event-types', '\App\Http\Controllers\Web\ProfileController@updateEventTypes')->name('update-et-admin');

        Route::post('/cp/partner-cp/edit-image-alt', [ProfileController::class, 'editImagesAlt'])->name('alt.update.admin');

        Route::get('/cp', 'AdminController@index')->name('admin');
        Route::get('/cp/top-services', [AdminController::class, 'topServices'])->name('top-services');
        Route::get('/cp/messages', 'AdminController@messages');
        Route::get('/cp/listing', 'AdminController@listing');

        Route::get('/cp/faq', 'AdminController@faq');
        Route::get('/cp/payments', [AdminController::class, 'stripe'])->name('cp-stripe');
        Route::post('/cp/partner-cp/update-plan', [ProfileController::class, 'updatePlan'])->name('plan.update.admin');

        //CREATE/EDIT PARTNER PAGES
        //get
        Route::get('/cp/add-new-partner', 'AdminController@addPartner')->name('partner.create.admin');
        //post
        Route::post('/cp/create-new-partner', 'AdminController@createPartner');

        Route::post('/cp/partner-remove', 'AdminController@removePartner');

        //SETTINGs PAGES
        Route::get('/cp/setting/admin-profile', 'settingPages@profile');
        Route::get('/cp/setting/plans', 'settingPages@plans');
        Route::get('/cp/setting/contacts', 'settingPages@contacts');
        Route::get('/cp/setting/user-terms', 'settingPages@userterms');
        Route::get('/cp/setting/partner-terms', 'settingPages@partnerterms');

        //post
        Route::post('/cp/settings/edit-profile', 'editProfile@edit');

        Route::post('/cp/settings/add-new-plan', 'PlanController@store');
        Route::get('/cp/settings/plans/{id}', 'PlanController@readAjax');
        Route::get('/cp/settings/plans/{id}/remove', 'PlanController@delete');
        Route::post('/cp/settings/edit-plan', 'PlanController@update');

        Route::post('/cp/settings/edit-address', 'editSettings@address');
        Route::post('/cp/settings/edit-email', 'editSettings@email');
        Route::post('/cp/settings/edit-phone', 'editSettings@phone');
        Route::post('/cp/settings/edit-fb', 'editSettings@facebook');
        Route::post('/cp/settings/edit-ln', 'editSettings@linkedin');
        Route::post('/cp/settings/edit-gl', 'editSettings@google');
        Route::post('/cp/settings/edit-tw', 'editSettings@twitter');
        Route::post('/cp/settings/edit-inst', 'editSettings@instagram');
        Route::post('/cp/settings/edit-user-terms', 'editSettings@userterms');
        Route::post('/cp/settings/edit-service-terms', 'editSettings@serviceterms');

        Route::post('/cp/faq/add-new-faq', 'newFaq@create');
        Route::post('/cp/faq/del-faq', 'newFaq@remove');
        Route::post('/cp/faq/edit-faq', 'newFaq@edit');

        Route::post('/read-message', 'ajaxController@read');
        Route::post('/read-direct-message', 'ajaxController@readDirectMessage');

        Route::post('/draft', 'ajaxController@draft');
        Route::post('/publish', 'ajaxController@publish');


        Route::post('/cp/partner-cp/create-advert', '\App\Http\Controllers\Web\AdvertController@activateOption');

        Route::post('/cp/admin/set-discount', 'AdminController@setDiscount');

        //PARTNER profile
        //Route::get('/cp/partner-cp/{id_partner}', 'partnerController@index');
        //post
        Route::post('/cp/partner-cp/edit-company-slug', [ProfileController::class, 'editSlug']);


        Route::post('/cp/partner-cp/change-plan', 'partnerController@ChangePlanByAdmin');
        Route::post('/cp/partner-cp/set-commission', '\App\Http\Controllers\Web\PartnerController@setCommission');
        Route::get('/cp/get-categories', '\App\Http\Controllers\Web\ProfileController@getCategories');
        Route::post('/cp/set-categories', '\App\Http\Controllers\Web\ProfileController@setAdditionalCategories');

        Route::post('/cp/partner-cp/edit-contacts', '\App\Http\Controllers\Web\ProfileController@editContacts');
        Route::post('/cp/partner-cp/edit-company', '\App\Http\Controllers\Web\ProfileController@editCompany')->name('company.update.admin');
        Route::post('/cp/partner-cp/edit-company-location', '\App\Http\Controllers\Web\ProfileController@editCompanyLocation');
        Route::post('/cp/partner-cp/edit-company-description', '\App\Http\Controllers\Web\ProfileController@editCompanyDescription')->name('company-description.update.admin');

        Route::post('/cp/partner-cp/edit-www', '\App\Http\Controllers\Web\ProfileController@editWww');
        Route::post('/cp/partner-cp/edit-seo', '\App\Http\Controllers\Web\ProfileController@editSeo');
        Route::post('/cp/partner-cp/edit-images-alt', '\App\Http\Controllers\Web\ProfileController@editImagesAlt');

        Route::post('/cp/partner-cp/edit-option', '\App\Http\Controllers\Web\PlanOptionController@editOption')->name('option.update.admin');
        Route::post('/cp/partner-cp/edit-category', 'partnerController@editCategory');

        Route::post('/cp/partner-cp/edit-schedule', 'partnerController@editSchedule');
        Route::post('/cp/partner-cp/edit-specialties', 'partnerController@editSpecialties');
        Route::post('/cp/partner-cp/edit-food', 'partnerController@editFood');

        Route::post("/cp/partner-cp/edit-vip-plan", "VipPlanController@updateData");
        Route::post('/cp/partner-cp/del-file', 'ajaxController@partnerDelfile');

        Route::post('/cp/partner-cp/del-image', 'ServiceImageController@remove');

        Route::post('/cp/partner-cp/publish', 'ajaxController@partnerPublish');
        Route::post("/cp/partner-cp/vip-plan-set", "VipPlanPaymentController@setVipStatusAdmin");

        //Images controls
        Route::post('/cp/service-images/upload/{id_partner}/{category}', 'ServiceImageController@upload');
        Route::post('/cp/service-images/thumbnail', [ServiceImageController::class, 'thumbnail'])->name('thumbnail.update.admin');

        Route::post('/cp/service-images/remove/{image_id}', 'ServiceImageController@remove');

        // Swisswine
        Route::get('/cp/swisswin', 'SwisswinDirectoryController@swisswin');
        Route::get('/cp/swisswin/remove/{id}', 'SwisswinDirectoryController@remove');
        Route::post('/cp/swisswin/store', 'SwisswinDirectoryController@store');
        Route::post('/cp/swisswin/update', 'SwisswinDirectoryController@update');
        Route::get('/cp/swisswin/{id}', 'SwisswinDirectoryController@getAjax');

        Route::get('/cp/plan-options/{idPartner}', '\App\Http\Controllers\Web\PlanOptionController@getPlanOptionsAjax');

        //Adverts
        Route::post('/cp/adverts/{advertId}/event-places', '\App\Http\Controllers\Web\EventPlaceController@create');
        Route::post('/cp/adverts/{advertId}/caterer', '\App\Http\Controllers\Web\CatererController@create');
        Route::post('/cp/adverts/{advertId}/wine-lovers', '\App\Http\Controllers\Web\WineController@create');
        Route::post('/cp/adverts/{advertId}/equipment', '\App\Http\Controllers\Web\EquipmentController@create');
        Route::post('/cp/adverts/{advertId}/entertainment', '\App\Http\Controllers\Web\EntertainmentController@create');

        Route::post('/cp/adverts/{advertId}/edit-schedule', '\App\Http\Controllers\Web\AdvertController@editSchedule');
        Route::post('/cp/adverts/{advertId}/edit-rates', '\App\Http\Controllers\Web\AdvertController@editRates');
        Route::post('/cp/adverts/{advertId}/edit-catering', '\App\Http\Controllers\Web\AdvertController@editCatering');
        Route::post('/cp/adverts/{advertId}/edit-general', '\App\Http\Controllers\Web\AdvertController@editGeneral');
        Route::post('/cp/adverts/{advertId}/edit-other', '\App\Http\Controllers\Web\AdvertController@editOther');
        Route::post('/cp/adverts/{advertId}/edit-specialties', '\App\Http\Controllers\Web\CatererController@editSpecialties');
        Route::post('/cp/adverts/{advertId}/edit-food', '\App\Http\Controllers\Web\WineController@editFood');
        Route::post('/cp/partner-cp/edit-comment/{advertId}', '\App\Http\Controllers\Web\AdvertController@editComment');
        Route::post('/cp/adverts/del-menu', '\App\Http\Controllers\Web\CatererController@removeMenu');
    });

    //ACCESS to PARTNER CP
    Route::middleware(['auth', 'partner', 'email'])->group(function () {

        Route::get(
            '/partner-cp/{id_partner}/advert',
            [ProfileController::class, 'advert'])
            ->name('profile-advert')
            ->middleware('subscribed');

        Route::get('/partner-cp/{id_partner}/plans',
            [ProfileController::class, 'plans'])
            ->name('profile-plans');

        Route::post('/partner-cp/edit-company-slug', [ProfileController::class, 'editSlug']);


        Route::post('/partner-cp/edit-event-types', [ProfileController::class, 'updateEventTypes'])->name('update-et');
        Route::post('/partner-cp/edit-image-alt', [ProfileController::class, 'editImagesAlt'])->name('alt.update');
        Route::post('/service-images/thumbnail', [ServiceImageController::class, 'thumbnail'])->name('thumbnail.update');


        Route::get('/partner-cp/{id_partner}/faq', '\App\Http\Controllers\Web\ProfileController@faq');
        Route::get('/partner-cp/{id_partner}/terms', '\App\Http\Controllers\Web\ProfileController@terms');

        Route::post('/partner-cp/create-advert', '\App\Http\Controllers\Web\AdvertController@activateOption');

        //post
        Route::post('/partner-form', '\App\Http\Controllers\Web\ProfileController@partnerContact')->name('partner-contact');
        Route::post('/partner-cp/edit-contacts', '\App\Http\Controllers\Web\ProfileController@editContacts');

        Route::post('/partner-cp/edit-company', '\App\Http\Controllers\Web\ProfileController@editCompany')->name('company.update');
        Route::post('/partner-cp/edit-company-description', '\App\Http\Controllers\Web\ProfileController@editCompanyDescription')->name('company-description.update');
        Route::post('/partner-cp/edit-company-location', '\App\Http\Controllers\Web\ProfileController@editCompanyLocation');

        Route::post('/partner-cp/edit-www', '\App\Http\Controllers\Web\ProfileController@editWww');
        Route::post('/partner-cp/edit-option', '\App\Http\Controllers\Web\PlanOptionController@editOption')->name('option.update');

        Route::post('/partner-cp/edit-category', 'partnerController@editCategory');
        Route::post('/partner-cp/edit-images', 'partnerController@editImages');
        Route::post('/partner-cp/select-free-plan', 'partnerController@ChoseFreePlan');


        Route::post('/partner-cp/edit-schedule', 'partnerController@editSchedule');
        Route::post('/partner-cp/edit-specialties', 'partnerController@editSpecialties');

        Route::post('/partner-cp/edit-other', 'partnerController@editOther');
        Route::post('/partner-cp/edit-food', 'partnerController@editFood');

        Route::post('/partner-cp/del-file', 'ajaxController@partnerDelfile');
        //Route::post('/partner-cp/del-image', 'ajaxController@partnerDelimage');
        Route::post('/partner-cp/del-image', 'ServiceImageController@remove');

        Route::post('/partner-cp/publish', 'ajaxController@partnerPublish');

        //Payments
        Route::post("/partner-cp/payment/cash", "PaymentController@cashPayment");
        Route::post("/partner-cp/payment/paypal", "PaymentController@paypalPayment");
        Route::post("/partner-cp/payment/card", "PaymentController@CardPayment");

        Route::post("/partner-cp/vip-plan-payment/card", "VipPlanPaymentController@CardPayment");
        Route::post("/partner-cp/edit-vip-plan", "VipPlanController@updateData");
        Route::get("/partner-cp/payment/paypal-status", "PaymentController@getPaymentStatus")->name('status');

        //Images controls
        Route::post('/service-images/upload/{id_partner}/{category}', 'ServiceImageController@upload');
        Route::post('/service-images/remove/{image_id}', 'ServiceImageController@remove');

        //adverts
        Route::post('/adverts/{advertId}/event-places', '\App\Http\Controllers\Web\EventPlaceController@create');
        Route::post('/adverts/{advertId}/caterer', '\App\Http\Controllers\Web\CatererController@create');
        Route::post('/adverts/{advertId}/wine-lovers', '\App\Http\Controllers\Web\WineController@create');
        Route::post('/adverts/{advertId}/equipment', '\App\Http\Controllers\Web\EquipmentController@create');
        Route::post('/adverts/{advertId}/entertainment', '\App\Http\Controllers\Web\EntertainmentController@create');

        Route::post('/adverts/{advertId}/edit-schedule', '\App\Http\Controllers\Web\AdvertController@editSchedule');
        Route::post('/adverts/{advertId}/edit-rates', '\App\Http\Controllers\Web\AdvertController@editRates');
        Route::post('/partner-cp/edit-comment/{advertId}', '\App\Http\Controllers\Web\AdvertController@editComment');
        Route::post('/adverts/{advertId}/edit-catering', '\App\Http\Controllers\Web\AdvertController@editCatering');
        Route::post('/adverts/{advertId}/edit-general', '\App\Http\Controllers\Web\AdvertController@editGeneral');
        Route::post('/adverts/{advertId}/edit-other', '\App\Http\Controllers\Web\AdvertController@editOther');
        Route::post('/adverts/{advertId}/edit-specialties', '\App\Http\Controllers\Web\CatererController@editSpecialties');
        Route::post('/adverts/{advertId}/edit-food', '\App\Http\Controllers\Web\WineController@editFood');
        Route::post('/adverts/del-menu', '\App\Http\Controllers\Web\CatererController@removeMenu');

        Route::get('/user/invoice/{invoice}', [BillingController::class, 'invoice'])->name('invoice');
        Route::post('/partner-cp/subscribe', [BillingController::class, 'subscribe'])->name('subscription.start');
        Route::post('/partner-cp/switch', [BillingController::class, 'switch'])->name('subscription.switch');
        Route::post('/partner-cp/cancel', [BillingController::class, 'cancel'])->name('subscription.cancel');
        Route::post('/partner-cp/resume', [BillingController::class, 'resume'])->name('subscription.resume');
        Route::post('/partner-cp/update-payment', [BillingController::class, 'updatePayment'])->name('payment.update');

    });

    Route::post("/contacts/claim-requests", 'ContactsController@SendClaimOrDeleteRequest');


    // Request Forms
    Route::post('/request/partner', 'ServiceRequestController@commissionFormAction')->name('request.commission');
    Route::post('/request/caterer', 'ServiceRequestController@catererFormAction')->name('request.caterer');
    Route::post('/request/general', 'ServiceRequestController@requestFormAction')->name('request.general');

});

//language switch
