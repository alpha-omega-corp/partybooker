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
use App\Http\Controllers\AdvertController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\App\AboutController;
use App\Http\Controllers\App\CommentController;
use App\Http\Controllers\App\ContentController;
use App\Http\Controllers\App\FaqController;
use App\Http\Controllers\App\FormController;
use App\Http\Controllers\App\InformationController;
use App\Http\Controllers\App\NotificationController;
use App\Http\Controllers\App\PlanController;
use App\Http\Controllers\App\PostController;
use App\Http\Controllers\App\UspController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\PartnerController;

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
                Route::get('/partners/top', 'tops')->name('tops');

                Route::name('fr.')
                    ->group(function () {
                        Route::get('/partners/listing', 'listing')->name('listing');
                    });

                Route::name('en.')
                    ->prefix('en')
                    ->group(function () {
                        Route::get('/partners/listing', 'listing')->name('listing');
                    });
            });

        // HomeController
        Route::controller(HomeController::class)
            ->name('home.')
            ->group(function () {
                Route::name('fr.')
                    ->group(function () {
                        Route::get('/accueil', 'index')->name('index');
                        Route::get('/a-propos', 'about')->name('about');
                        Route::get('/partenariat', 'partnership')->name('partnership');
                        Route::get('/blog', 'blog')->name('blog');
                        Route::get('/blog/{post}', 'showPost')->name('post');
                        Route::get('/faq', 'faq')->name('faq');
                    });

                Route::name('en.')
                    ->prefix('en')
                    ->group(function () {
                        Route::get('/home', 'index')->name('index');
                        Route::get('/about', 'about')->name('about');
                        Route::get('/partnership', 'partnership')->name('partnership');
                        Route::get('/blog', 'blog')->name('blog');
                        Route::get('/blog/{post}', 'showPost')->name('post');
                        Route::get('/faq', 'faq')->name('faq');
                    });

                Route::post('/help', 'requestHelp')->name('help');
                Route::post('/join', 'requestPartnership')->name('join');
            });

        // ListingController
        Route::controller(ListingController::class)
            ->name('listing.')
            ->group(function () {
                Route::name('fr.')
                    ->group(function () {
                        Route::get('/annonces/{category?}/{tag?}', 'index')->name('index');
                        Route::get('/annonce/{company:slug}/{advert:slug}', 'advert')->name('advert');
                    });

                Route::name('en.')
                    ->prefix('en')
                    ->group(function () {
                        Route::get('/adverts/{category?}/{tag?}', 'index')->name('index');
                        Route::get('/advert/{company:slug}/{advert:slug}', 'advert')->name('advert');
                    });
            });

        // CompanyController
        Route::controller(CompanyController::class)
            ->name('company.')
            ->prefix('company')
            ->group(function () {
                Route::get('/{company:slug}', 'show')->name('show');
                Route::get('/{company:id}/request/', 'request')->name('request');

            });
    });

Route::post('/', [PartnerController::class, 'store'])->name('partner.store');
Route::delete('/', [PartnerController::class, 'destroy'])->name('partner.destroy');

Route::name('partner.')
    ->group(function () {
        Route::controller(PartnerController::class)
            ->middleware('partner')
            ->group(function () {
                Route::name('fr.')
                    ->group(function () {
                        Route::get('/profile/{company:slug}', 'dashboard')->name('dashboard');
                    });

                Route::name('en.')
                    ->prefix('en')
                    ->group(function () {
                        Route::get('/profile/{company:slug}', 'dashboard')->name('dashboard');
                    });

                Route::put('/plan', 'plan')->name('plan');
            });
    });

Route::name('partner.')
    ->prefix('profile')
    ->group(function () {
        Route::middleware('partner')
            ->prefix('{company:slug}')
            ->group(function () {
                Route::controller(PartnerController::class)
                    ->group(function () {

                        Route::put('/plan', 'plan')->name('plan');
                    });

                Route::controller(CompanyController::class)
                    ->name('company.')
                    ->prefix('company')
                    ->group(function () {
                        Route::put('/', 'update')->name('update');
                    });

                Route::controller(PartnerController::class)
                    ->group(function () {
                    });
            });


        Route::name('advert.')
            ->group(function () {
                Route::controller(AdvertController::class)
                    ->prefix('advert')
                    ->group(function () {
                        Route::post('/{partner}', 'store')->name('store');
                        Route::delete('/{advert}', 'destroy')->name('destroy');

                        Route::put('/status/{advert}', 'status')->name('status');
                        Route::put('/access/{advert}', 'access')->name('access');
                        Route::put('/description/{advert}', 'description')->name('description');
                        Route::put('/meta/{advert}', 'meta')->name('meta');
                    });

                Route::controller(GalleryController::class)
                    ->name('gallery.')
                    ->prefix('image')
                    ->group(function () {
                        Route::post('/{advert}', 'store')->name('store');
                        Route::delete('/{image}', 'destroy')->name('destroy');
                        Route::put('/{image}', 'update')->name('update');
                    });
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
                Route::get('/content', 'content')->name('content');
                Route::get('/forms', 'forms')->name('forms');
                Route::get('/messages', 'messages')->name('messages');
                Route::get('/partners', 'partners')->name('partners');

                Route::put('/update-tops', 'updateTopServices')->name('tops');
                Route::put('/update-contacts', 'updateAppContacts')->name('contacts');
            });

        Route::controller(NotificationController::class)
            ->name('notification.')
            ->prefix('notification')
            ->group(function () {
                Route::put('/status/{notification}', 'status')->name('status');
            });

        Route::controller(FormController::class)
            ->name('form.')
            ->prefix('form')
            ->group(function () {
                Route::post('/{type}', 'store')->name('store');
                Route::put('/{form}', 'update')->name('update');
                Route::delete('/{form}', 'destroy')->name('destroy');
            });


        Route::controller(CategoryController::class)
            ->name('categories.')
            ->prefix('categories')
            ->group(function () {
                Route::put('/{categories}', 'updateCategory')->name('update');
                Route::put('/tag/{tag}', 'updateTag')->name('tag.update');
            });


        Route::controller(PostController::class)
            ->name('post.')
            ->prefix('blog/posts')
            ->group(function () {
                Route::post('/create', 'store')->name('store');
                Route::put('/{post}', 'update')->name('update');
                Route::put('/{post}/status', 'status')->name('status');
                Route::delete('/{post}', 'destroy')->name('destroy');
            });

        Route::controller(CommentController::class)
            ->name('comment.')
            ->prefix('comment')
            ->group(function () {
                Route::post('/', 'store')->name('store');
                Route::put('/{comment}', 'update')->name('update');
                Route::delete('/{comment}', 'destroy')->name('destroy');
            });

        Route::controller(InformationController::class)
            ->name('information.')
            ->prefix('information')
            ->group(function () {
                Route::post('/', 'store')->name('store');
                Route::put('/{information}', 'update')->name('update');
                Route::delete('/{information}', 'destroy')->name('destroy');
            });

        Route::controller(FaqController::class)
            ->name('faq.')
            ->prefix('faq')
            ->group(function () {
                Route::post('/', 'store')->name('store');
                Route::put('/{faq}', 'update')->name('update');
                Route::delete('/{faq}', 'destroy')->name('destroy');
            });

        Route::controller(PlanController::class)
            ->name('plan.')
            ->prefix('plan')
            ->group(function () {
                Route::put('/{plan}', 'update')->name('update');
            });

        Route::controller(UspController::class)
            ->name('usp.')
            ->prefix('usp')
            ->group(function () {
                Route::post('/', 'store')->name('store');
                Route::put('/{usp}', 'update')->name('update');
                Route::delete('/{usp}', 'destroy')->name('destroy');
            });

        Route::controller(ContentController::class)
            ->name('service.')
            ->prefix('service')
            ->group(function () {
                Route::put('/{service}', 'update')->name('update');
            });

        Route::controller(AboutController::class)
            ->name('about.')
            ->prefix('about')
            ->group(function () {
                Route::post('/', 'store')->name('store');
                Route::put('/{about}', 'update')->name('update');
                Route::delete('/{about}', 'destroy')->name('destroy');

                Route::post('/{about}/item', 'createItem')->name('item.store');
                Route::put('/item/{item}', 'editItem')->name('item.update');
                Route::delete('/item/{item}', 'destroyItem')->name('item.destroy');
            });
    });

Route::middleware(['auth', 'partner', 'email'])->group(function () {
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


//language switch
