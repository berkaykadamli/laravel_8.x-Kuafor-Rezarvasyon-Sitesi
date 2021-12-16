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


Route::get('/admin/login',[\App\Http\Controllers\Admin\AdminController::class,'login'])->name('adminLogin');
Route::get('/admin/home',[\App\Http\Controllers\Admin\AdminController::class,'index'])->name('adminHome');







Route::redirect('/anasayfa', '/home');
Route::get('/home', [HomeController::class, 'index']);
Route::get('/home/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
