<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\bannerController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register'=>false]);
//admin dashboard
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
      Route::get('/',[AdminController::class,'admin'])->name('admin');

   // banner section
 Route::resource('banner', bannerController::class);
   // Category section
 Route::resource('category', CategoryController::class);
 // brand Section
 Route::resource('brand', BrandController::class);
 });

