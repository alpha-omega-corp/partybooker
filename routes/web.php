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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'en'], function () {
    Route::get('/partner', 'mainWebsite@partner');

    Route::get('/listings', '\App\Http\Controllers\Web\ListingController@index');
    Route::get('/listings-filtered', '\App\Http\Controllers\Web\ListingController@filtered');
    Route::get('/listings/{category}', '\App\Http\Controllers\Web\ListingController@category');
    Route::get('/listings/{cat}/{subcat}', '\App\Http\Controllers\Web\ListingController@subcategory');
    Route::get('/listing/{slug}', '\App\Http\Controllers\Web\ListingController@service');


    Route::get('/aboutus', 'mainWebsite@aboutus');
    Route::get('/partner-terms', 'mainWebsite@partnerterms');

    Route::get('/sitemap', '\App\Http\Controllers\Web\PageController@siteMap');
});


Route::group(['prefix' => null], function () {

    Route::get('/partenaire', 'mainWebsite@partner');

    Route::get('/annonces', '\App\Http\Controllers\Web\ListingController@index');
    Route::get('/annonces-filtered', '\App\Http\Controllers\Web\ListingController@filtered');
    Route::get('/annonces/{category}', '\App\Http\Controllers\Web\ListingController@category');
    Route::get('/annonces/{cat}/{subcat}', '\App\Http\Controllers\Web\ListingController@subcategory');


    Route::get('/annonce/{slug}', '\App\Http\Controllers\Web\ListingController@service');

    Route::get('/a-propos-de-nous', 'mainWebsite@aboutus');
    Route::get('/conditions-generales-partnaires', 'mainWebsite@partnerterms');

    Route::get('/plan-du-site', '\App\Http\Controllers\Web\PageController@siteMap');
});


Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], function () {
    Route::fallback(function () {
        return response()->view('404');
    });

    Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
    Route::get('/callback/{provider}', 'SocialController@callback');


    Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.email');
    Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail');
    Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.request');
    Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.reset');


    Route::get('/', 'mainWebsite@home');

    // Request Forms
    Route::post('/request/partner', 'ServiceRequestController@commissionFormAction');
    Route::post('/request/caterer', 'ServiceRequestController@catererFormAction');
    Route::post('/request/general', 'ServiceRequestController@requestFormAction');

    Route::get('/user-terms', 'mainWebsite@userterms');
    Route::get('/faq', 'mainWebsite@faq');
    Route::get('/contacts', 'mainWebsite@contacts');
    Route::get('/blog', 'mainWebsite@blog');
    Route::get('/blog/{post_slug}', 'mainWebsite@post');
    //Route::get('/blog/post', 'mainWebsite@post'); //temp


    //POST
    Route::post('/partner/reg', 'partnerController@register');
    Route::post('/subscribe', 'ajaxController@subscribe');
    Route::post('/leave-phone', 'ajaxController@phone');
    Route::post('/contact-form', 'ajaxController@contact');
    Route::post('/rate', 'ajaxController@rate');
    Route::post('/stat', 'ajaxController@statClicks');

    Route::get('/sitemap_{lang}.xml', 'SiteMapController@sitemap');

    Auth::routes();

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
        Route::get('/cp', 'adminController@index');
        Route::get('/cp/messages', 'adminController@messages');
        Route::get('/cp/listing', 'adminController@listing');
        Route::get('/cp/blog', 'adminController@blog');
        Route::get('/cp/blog/post/{post_slug}', 'adminController@post');
        Route::get('/cp/blog/new-post', 'adminController@newpost');
        Route::get('/cp/faq', 'adminController@faq');

        //CREATE/EDIT PARTNER PAGES
        //get
        Route::get('/cp/add-new-partner', 'adminController@addPartner');
        //post
        Route::post('/cp/create-new-partner', 'adminController@createPartner');

        Route::post('/cp/partner-remove', 'adminController@removePartner');

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

        Route::post('/cp/blog/create-post', 'newPost@create');
        Route::post('/draft', 'ajaxController@draft');
        Route::post('/publish', 'ajaxController@publish');
        Route::post('/cp/blog/remove/{postid}', 'newPost@remove');
        Route::post('/cp/blog/edit-post', 'newPost@edit');

        Route::get('/cp/partner-cp/{id_partner}', '\App\Http\Controllers\Web\ProfileController@index');
        Route::get('/cp/partner-cp/{id_partner}/plans', '\App\Http\Controllers\Web\ProfileController@plans');
        Route::get('/cp/partner-cp/{id_partner}/profile', '\App\Http\Controllers\Web\ProfileController@profile');
        Route::get('/cp/partner-cp/{id_partner}/adverts', '\App\Http\Controllers\Web\PartnerController@adverts');
        Route::post('/cp/partner-cp/create-advert', '\App\Http\Controllers\Web\AdvertController@activateOption');


        Route::post('/cp/admin/set-discount', 'adminController@setDiscount');

        //PARTNER profile
        //Route::get('/cp/partner-cp/{id_partner}', 'partnerController@index');
        //post
        Route::post('/cp/partner-cp/change-plan', 'partnerController@ChangePlanByAdmin');
        Route::post('/cp/partner-cp/set-commission', '\App\Http\Controllers\Web\PartnerController@setCommission');
        Route::get('/cp/get-categories', '\App\Http\Controllers\Web\ProfileController@getCategories');
        Route::post('/cp/set-categories', '\App\Http\Controllers\Web\ProfileController@setAdditionalCategories');

        Route::post('/cp/partner-cp/edit-contacts', '\App\Http\Controllers\Web\ProfileController@editContacts');
        Route::post('/cp/partner-cp/edit-company', '\App\Http\Controllers\Web\ProfileController@editCompany');
        Route::post('/cp/partner-cp/edit-www', '\App\Http\Controllers\Web\ProfileController@editWww');
        Route::post('/cp/partner-cp/edit-seo', '\App\Http\Controllers\Web\ProfileController@editSeo');
        Route::post('/cp/partner-cp/edit-images-alt', '\App\Http\Controllers\Web\ProfileController@editImagesAlt');

        Route::post('/cp/partner-cp/edit-option', '\App\Http\Controllers\Web\PlanOptionController@editOption');
        Route::post('/cp/partner-cp/edit-category', 'partnerController@editCategory');
        Route::post('/cp/partner-cp/edit-event-types', '\App\Http\Controllers\Web\ProfileController@updateEventTypes');

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
        Route::post('/cp/service-images/upload-main/{id_partner}/{category}', 'ServiceImageController@uploadMainImage');
        Route::post('/cp/service-images/remove/{id_partner}/{image_id}', 'ServiceImageController@remove');

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
        Route::get('/partner-cp', '\App\Http\Controllers\Web\ProfileController@index');
        Route::get('/partner-cp/{id_partner}', '\App\Http\Controllers\Web\ProfileController@index');
        Route::get('/partner-cp/{id_partner}/faq', '\App\Http\Controllers\Web\ProfileController@faq');
        Route::get('/partner-cp/{id_partner}/plans', '\App\Http\Controllers\Web\ProfileController@plans');
        Route::get('/partner-cp/{id_partner}/terms', '\App\Http\Controllers\Web\ProfileController@terms');
        Route::get('/partner-cp/{id_partner}/profile', '\App\Http\Controllers\Web\ProfileController@profile')->name('profile');
        Route::get('/partner-cp/{id_partner}/contacts', '\App\Http\Controllers\Web\ProfileController@contacts');

        Route::get('/partner-cp/{id_partner}/adverts', '\App\Http\Controllers\Web\PartnerController@adverts');
        Route::post('/partner-cp/create-advert', '\App\Http\Controllers\Web\AdvertController@activateOption');

        //post
        Route::post('/partner-form', 'ajaxController@partner');
        Route::post('/partner-cp/edit-contacts', '\App\Http\Controllers\Web\ProfileController@editContacts');
        Route::post('/partner-cp/edit-company', '\App\Http\Controllers\Web\ProfileController@editCompany');
        Route::post('/partner-cp/edit-www', '\App\Http\Controllers\Web\ProfileController@editWww');
        Route::post('/partner-cp/edit-option', '\App\Http\Controllers\Web\PlanOptionController@editOption');
        Route::post('/partner-cp/edit-event-types', '\App\Http\Controllers\Web\ProfileController@updateEventTypes');

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
        Route::post('/service-images/upload-main/{id_partner}/{category}', 'ServiceImageController@uploadMainImage');
        Route::post('/service-images/remove/{id_partner}/{image_id}', 'ServiceImageController@remove');

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
    });

    Route::post("/contacts/claim-requests", 'ContactsController@SendClaimOrDeleteRequest');
});

//language switch
Route::get('setlocale/{lang}', 'LocaleController@setLocale')->name('setlocale');
