<?php

use App\Http\Controllers\Admin\MessageController;
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
Route::post('/sendmessage', [HomeController::class, 'sendMessage'])->name('sendmessage');
// Admin Login
Route::get('/admin/login', [\App\Http\Controllers\Admin\AdminController::class, 'login'])->name('admin_login');
Route::get('/admin', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin_home');
Route::post('/admin/loginCheck', [\App\Http\Controllers\Admin\AdminController::class, 'loginCheck'])->name('admin_login_check');
Route::get('/admin/logout', [\App\Http\Controllers\Admin\AdminController::class, 'logout'])->name('admin_logout');


// Admin
Route::middleware('auth')->prefix('admin')->group(function () {
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


    #Settings
    Route::prefix('setting')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');
    });
});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('profile');
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
