<?php

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

Route::get('/', function () {

    $datalist = DB::select("select * from ogrenci");
    return view("home.index", ['datalist' => $datalist]);
})->name('home');


Route::get('/admin/login', [\App\Http\Controllers\Admin\AdminController::class, 'login'])->name('admin_login');
Route::get('/admin', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin_home');

Route::get('/admin/logout', [\App\Http\Controllers\Admin\AdminController::class, 'logout'])->name('admin_logout');
Route::post('/admin/loginCheck', [\App\Http\Controllers\Admin\AdminController::class, 'loginCheck'])->name('admin_login_check');


//SİLİNECEK
Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

//SİLİNECEK


// Admin
//Route::middleware('auth')->prefix('admin')->group(function (){
//    Route::get('/',[\App\Http\Controllers\Admin\AdminController::class,'index'])->name('admin_home');
//    Route::get('category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
//    Route::get('category/add',[\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
//    Route::post('category/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
//    Route::get('category/edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_edit');
//    Route::post('category/update/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
//    Route::get('category/delete',[\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
//    Route::get('category/show',[\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');
//});


Route::redirect('/anasayfa', '/home');
Route::get('/home', [HomeController::class, 'index']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
