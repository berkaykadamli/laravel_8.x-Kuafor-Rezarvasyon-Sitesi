<?php

use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/about', [HomeController::class, 'aboutus'])->name('about');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/getservices', [HomeController::class, 'getservice'])->name('getservices');

Route::get('/categoryproduct/{id}', [HomeController::class, 'categoryproduct'])->name('categoryproduct');
Route::get('/servicedetail/{id}', [HomeController::class, 'servicedetail'])->name('servicedetail');
Route::get('/serviceimageslider/{id}', [HomeController::class, 'serviceimageslider'])->name('serviceimageslider');

Route::post('/sendmessage', [HomeController::class, 'sendMessage'])->name('sendmessage');
// Admin Login
Route::get('/admin/login', [\App\Http\Controllers\Admin\AdminController::class, 'login'])->name('admin_login');
Route::get('/admin', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin_home');
Route::post('/admin/loginCheck', [\App\Http\Controllers\Admin\AdminController::class, 'loginCheck'])->name('admin_login_check');
Route::get('/admin/logout', [\App\Http\Controllers\Admin\AdminController::class, 'logout'])->name('admin_logout');


// Admin
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::middleware('admin')->group(function () {


        Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin_home');
        Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
        Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
        Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
        Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
        Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
        Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
        Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

//Services
        Route::prefix('service')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\ServiceController::class, 'index'])->name('admin_service');
            Route::get('create', [\App\Http\Controllers\Admin\ServiceController::class, 'create'])->name('admin_service_add');

            Route::post('store', [\App\Http\Controllers\Admin\ServiceController::class, 'store'])->name('admin_service_store');

            Route::get('edit/{id}', [\App\Http\Controllers\Admin\ServiceController::class, 'edit'])->name('admin_service_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\ServiceController::class, 'update'])->name('admin_service_update');

            Route::get('delete/{id}', [\App\Http\Controllers\Admin\ServiceController::class, 'destroy'])->name('admin_service_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ServiceController::class, 'show'])->name('admin_service_show');

        });

//Services image Gallery
        Route::prefix('image')->group(function () {
            Route::get('create/{id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
            Route::post('store/{id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
            Route::get('delete/{id}/{service_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');

        });

//Message
        Route::prefix('message')->group(function () {
            Route::get('/', [MessageController::class, 'index'])->name('admin_message');
            Route::get('edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
            Route::post('update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
            Route::get('delete/{id}', [MessageController::class, 'destroy'])->name('admin_message_delete');

        });
//Message
        Route::prefix('reservation')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\ReservationController::class, 'index'])->name('admin_reservation');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\ReservationController::class, 'edit'])->name('admin_reservation_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\ReservationController::class, 'update'])->name('admin_reservation_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\ReservationController::class, 'destroy'])->name('admin_reservation_delete');

        });

        #Settings
        Route::prefix('setting')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');
        });


        //Review
        Route::prefix('review')->group(function () {
            Route::get('/', [ReviewController::class, 'index'])->name('admin_review');
            Route::get('show/{id}', [ReviewController::class, 'show'])->name('admin_review_show');
            Route::post('update/{id}', [ReviewController::class, 'update'])->name('admin_review_update');
            Route::get('delete/{id}', [ReviewController::class, 'destroy'])->name('admin_review_delete');

        });
        # User
        Route::prefix('user')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_user');
            Route::post('create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
            Route::post('store', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('show', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::get('userrole/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('userrolestore/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
            Route::get('userroledelete/{userid}/{roleid}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');

        });



    }); # admin
}); # auth

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('profile');
    Route::get('/myreviews', [UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/destroyviews/{id}', [UserController::class, 'destroyviews'])->name('destroyview_delet');

    Route::prefix('service')->group(function () {
        Route::get('/', [\App\Http\Controllers\ServiceController::class, 'index'])->name('myaccount_service');
        Route::get('create', [\App\Http\Controllers\ServiceController::class, 'create'])->name('myaccount_service_add');
        Route::post('store', [\App\Http\Controllers\ServiceController::class, 'store'])->name('myaccount_service_store');
        Route::get('edit/{id}', [\App\Http\Controllers\ServiceController::class, 'edit'])->name('myaccount_service_edit');
        Route::post('update/{id}', [\App\Http\Controllers\ServiceController::class, 'update'])->name('myaccount_service_update');
        Route::get('delete/{id}', [\App\Http\Controllers\ServiceController::class, 'destroy'])->name('myaccount_service_delete');
        Route::get('show', [\App\Http\Controllers\ServiceController::class, 'show'])->name('myaccount_service_show');

    });
    //Services image Gallery
    Route::prefix('image')->group(function () {
        Route::get('create/{id}', [\App\Http\Controllers\ImageController::class, 'create'])->name('myaccount_image_add');
        Route::post('store/{id}', [\App\Http\Controllers\ImageController::class, 'store'])->name('myaccount_image_store');
        Route::get('delete/{id}/{service_id}', [\App\Http\Controllers\ImageController::class, 'destroy'])->name('myaccount_image_delete');
        Route::get('show', [\App\Http\Controllers\ImageController::class, 'show'])->name('myaccount_image_show');

    });

});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect()->route('home');
});

Route::get('/dash', function () {
    return view('dashboard');
})->name('dashboard');

// Gerçek Jetstream login
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');
