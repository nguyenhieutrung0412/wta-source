<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');



/*
********************************************************************
*******************ROUTE Ở PHẦN GIAO DIỆN ADMIN********************
********************************************************************
*/

Route::group(['module' => 'dashboard', 'middleware' => 'web', 'namespace' => "App\Http\Controllers"], function () {
    Route::get("/", ["as" => "admin.dashboard.index", "uses" => "DashbordAdminController@getIndexAdmin"]);


    Route::group(['middleware' => ['auth']], function () {


    });
});


// Auth::routes();

Route::group(['module' => 'dashboard', 'middleware' => 'web', 'namespace' => "App\Http\Controllers"], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/login/admin', [App\Http\Controllers\DashbordAdminController::class, 'login'])->name('login');
    Route::post('/login/admin', [App\Http\Controllers\DashbordAdminController::class, 'authenticate']);
    Route::get('/logout', [App\Http\Controllers\DashbordAdminController::class, 'logout'])->name('logout');
     //Route::get('/register', [App\Http\Controllers\DashbordAdminController::class, 'login']);
    Route::group(['middleware' => ['auth']], function () {

        Route::group(["prefix" => "admins"], function () {
            Route::get("/", ["as" => "admin.admins", "uses" => "AdminDashbordController@getAdmins"]);
            Route::get("add", ["as" => "admin.admins.add", "uses" => "AdminDashbordController@getAddAdmins"]);
            Route::post("save", ["as" => "admin.admins.save", "uses" => "AdminDashbordController@getSaveAdmins"]);
            Route::get("delete/{id}", ["as" => "admin.admins.delete", "uses" => "AdminDashbordController@deleteAdmin"]);
            Route::get("edit/{id}", ["as" => "admin.admins.edit", "uses" => "AdminDashbordController@getEditAdmins"]);
            Route::post("update/{id}", ["as" => "admin.admins.update", "uses" => "AdminDashbordController@getUpdateAdmins"]);
        });

        Route::group(["prefix" => "news"], function () {
            Route::get("/", ["as" => "admin.news", "uses" => "DashbordAdminController@getNews"]);
            Route::get("add", ["as" => "admin.news.add", "uses" => "DashbordAdminController@getAddNews"]);
            Route::post("save", ["as" => "admin.news.add", "uses" => "DashbordAdminController@getSaveNews"]);
            Route::get("delete/{id}", ["as" => "admin.news.delete", "uses" => "DashbordAdminController@deleteNew"]);
            Route::get("edit/{id}", ["as" => "admin.news.edit", "uses" => "DashbordAdminController@getEditNews"]);
            Route::post("update/{id}", ["as" => "admin.news.eidt", "uses" => "DashbordAdminController@getUpdateNews"]);
        });
        Route::group(["prefix" => "press"], function () {
            Route::get("/", ["as" => "admin.press", "uses" => "PressDashbordController@getPress"]);
            Route::get("add", ["as" => "admin.press.add", "uses" => "PressDashbordController@getAddPress"]);
            Route::post("save", ["as" => "admin.press.add", "uses" => "PressDashbordController@getSavePress"]);
            Route::get("delete/{id}", ["as" => "admin.press.delete", "uses" => "PressDashbordController@deletePress"]);
            Route::get("edit/{id}", ["as" => "admin.press.edit", "uses" => "PressDashbordController@getEditPress"]);
            Route::post("update/{id}", ["as" => "admin.press.eidt", "uses" => "PressDashbordController@getUpdatePress"]);
        });

        Route::group(["prefix" => "faq"], function () {
            Route::get("/", ["as" => "admin.faq", "uses" => "FAQDashbordController@getFaqs"]);
            Route::get("add", ["as" => "admin.faq.add", "uses" => "FAQDashbordController@getAddFaqs"]);
            Route::post("save", ["as" => "admin.faq.add", "uses" => "FAQDashbordController@getSaveFaqs"]);
            Route::get("delete/{id}", ["as" => "admin.faq.delete", "uses" => "FAQDashbordController@deleteFaq"]);
            Route::get("edit/{id}", ["as" => "admin.faq.edit", "uses" => "FAQDashbordController@getEditFaqs"]);
            Route::post("update/{id}", ["as" => "admin.faq.eidt", "uses" => "FAQDashbordController@getUpdateFaqs"]);
        });
        Route::group(["prefix" => "we-would"], function () {
            Route::get("/", ["as" => "admin.we-would", "uses" => "WeWouldDashbordController@getWeWould"]);
            Route::get("add", ["as" => "admin.we-would.add", "uses" => "WeWouldDashbordController@getAddWeWould"]);
            Route::post("save", ["as" => "admin.we-would.add", "uses" => "WeWouldDashbordController@getSaveWeWould"]);
            Route::get("delete/{id}", ["as" => "admin.we-would.delete", "uses" => "WeWouldDashbordController@deleteWeWould"]);
            Route::get("edit/{id}", ["as" => "admin.we-would.edit", "uses" => "WeWouldDashbordController@getEditWeWould"]);
            Route::post("update/{id}", ["as" => "admin.we-would.eidt", "uses" => "WeWouldDashbordController@getUpdateWeWould"]);
        });
        Route::group(["prefix" => "about-us"], function () {
            Route::get("/edit/{id}", ["as" => "admin.about-us.edit", "uses" => "AboutUsDashbordController@getUpdateAboutUs"]);
            
        
            Route::post("update/{id}", ["as" => "admin.about-us.update", "uses" => "AboutUsDashbordController@postUpdateAboutUs"]);
        });
    });
});

/*
********************************************************************
*******************ROUTE Ở PHẦN GIAO DIỆN User********************
********************************************************************
*/

Route::group(['module' => 'user', 'middleware' => 'web', 'namespace' => "App\Http\Controllers"], function () {
    Route::get("/news-user", ["as" => "admin.user.index.news", "uses" => "NewsFrontendController@getIndexNewENG"]);
    Route::get("/home-user", ["as" => "admin.user.index.home", "uses" => "NewsFrontendController@getIndexHomeENG"]);
    Route::get("/about-user", ["as" => "admin.user.index.about", "uses" => "NewsFrontendController@getIndexAboutENG"]);
    Route::get("/service-user", ["as" => "admin.user.index.service", "uses" => "NewsFrontendController@getIndexServiceENG"]);
    Route::get("/docthem-user", ["as" => "admin.user.index.docthem", "uses" => "NewsFrontendController@getIndexDocthemENG"]);
    Route::get("/contact-user", ["as" => "admin.user.index.contact", "uses" => "NewsFrontendController@getIndexContactENG"]);
    Route::get("/token-user", ["as" => "admin.user.index.token", "uses" => "NewsFrontendController@getIndexTokenENG"]);
    Route::get("/privacypolicy-user", ["as" => "admin.user.index.privacypolicy", "uses" => "NewsFrontendController@getIndexPrivacyPolicyENG"]);
    Route::get("/termofuse-user", ["as" => "admin.user.index.termofuse", "uses" => "NewsFrontendController@getIndexTermofuseENG"]);

    Route::group(['middleware' => ['auth']], function () {


    });
});

