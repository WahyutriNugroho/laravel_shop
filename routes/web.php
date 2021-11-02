<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductGalleryController;
use App\Http\Controllers\Admin\UserController;
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



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
Route::get('/categories/{id}', [App\Http\Controllers\CategoryController::class, 'detail'])->name('categories-detail');
Route::get('/details/{id}', [App\Http\Controllers\DetailController::class, 'index'])->name('detail');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::get('/success', [App\Http\Controllers\CartController::class, 'success'])->name('success');

Route::get('/register/success',[App\Http\Controllers\Auth\RegisterController::class,'success'])->name('register-success');

Route::get('/dashboard',[App\Http\Controllers\DashboardController::class,'index'])->name('dashboard');
Route::get('/dashboard/products',[App\Http\Controllers\DashboardProductController::class,'index'])->name('dashboard-products');
Route::get('/dashboard/products/create',[App\Http\Controllers\DashboardProductController::class,'create'])->name('dashboard-product-create');
Route::get('/dashboard/products/{id}',[App\Http\Controllers\DashboardProductController::class,'details'])->name('dashboard-product-details');

Route::get('/dashboard/transaction',[App\Http\Controllers\DashboardTransactionController::class,'index'])->name('dashboard-transaction');
Route::get('/dashboard/transaction/{id}',[App\Http\Controllers\DashboardTransactionController::class,'details'])->name('dashboard-transaction-details');

Route::get('/dashboard/setting',[App\Http\Controllers\DashboardSettingController::class,'store_settings'])->name('dashboard-store-setting');
Route::get('/dashboard/myaccount',[App\Http\Controllers\DashboardSettingController::class,'my_account'])->name('dashboard-my-account');

// ->middleware(['auth','admin']);
Route::prefix('admin')
    // ->namespace('Admin')
    ->group(function(){
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class,'index'])->name('admin-dashboard');
        Route::resource('category', CategoryController::class);
        Route::resource('user', UserController::class);
        Route::resource('product', ProductController::class);
        Route::resource('product-gallery', ProductGalleryController::class);
    });
Auth::routes();