<?php

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
    return view('home.index', ['name' => 'Berkay Kadamlı']);
})->name('home');

Route::get('/home2', function () {
    return view('welcome');
});


Route::redirect('/anasayfa', '/home');
Route::get('/home', [HomeController::class, 'index']);
//Route::get('/home/{id}/{name}', [HomeController::class, 'test'])->where(['id'=>'[0-9]*','name'=>'[A-Za-z]+']);
Route::get('/home/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
