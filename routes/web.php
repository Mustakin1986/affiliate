<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\bannerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Frontend\FrontendController;


// frontend controller start
Route::get('/', [FrontendController::class, 'home'])->name('home');


// frontend controller end

// Route::get('/', function () {
//     return view('welcome');
// });

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
 // product Section
 Route::resource('product', ProductController::class);
 // User Section
 Route::resource('user', UserController::class);
// slider Section
Route::resource('slider',SliderController::class);

 });

