<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\AuthController;








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

Route::group(['middleware' => 'AdminAuth'], function () {
    
    Route::get('/', [AuthController::class, 'index'])->name('Auth.index');
    Route::get('/recoverpw', [AuthController::class, 'password'])->name('Auth.Password');
    Route::get('/register', [AuthController::class, 'Register'])->name('Auth.Register');

    Route::post('/insert', [AuthController::class, 'insert'])->name('Auth.insert.Register');
    Route::post('/login', [AuthController::class, 'login'])->name('Auth.login');
     
    Route::post('forget-password', [AuthController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
    Route::post('reset-password', [AuthController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('set-password', [AuthController::class, 'submitResetPasswordForm'])->name('reset.password.post');
});




Route::group(['middleware' => 'auth'], function () {
    

Route::prefix('admin')->group(function () {

    Route::get('/',[DashboardController::class,'index'])->name('admin.dashboard');
    Route::get('/logout',[DashboardController::class,'logout'])->name('admin.logout');
    
    Route::get('/profile',[ProfileController::class,'Profile'])->name('admin.profile');
    Route::post('/profileUpdate',[ProfileController::class,'Update'])->name('admin.profile.Update');



    Route::prefix('banner')->group(function () {
        Route::get('/',[BannerController::class,'Create'])->name('Banner.Create');
        Route::get('/index/{id}',[BannerController::class,'index'])->name('Banner.index');
        Route::get('/list',[BannerController::class,'show'])->name('Banner.list');
        Route::post('/chengestatus',[BannerController::class,'changestatus'])->name('Banner.chnageStatus');
        Route::get('edit/{id}', [BannerController::class, 'Edit'])->name('Banner.Edit');
        Route::post('editData/{id}', [BannerController::class, 'Update'])->name('Banner.Update');
        Route::get('/delete/{id}', [BannerController::class, 'remove'])->name('Banner.delete');
        Route::post('/store-data', [BannerController::class, 'store'])->name('Banner.store');
    });

    Route::prefix('category')->group(function () {
        Route::get('/',[CategoryController::class,'Create'])->name('Category.Create');
        Route::get('/index/{id}',[CategoryController::class,'index'])->name('Category.index');
        Route::get('/list',[CategoryController::class,'show'])->name('Category.list');
        Route::post('/chengestatus',[CategoryController::class,'changestatus'])->name('Category.chnageStatus');
        Route::get('edit/{id}', [CategoryController::class, 'Edit'])->name('category.Edit');
        Route::post('editData/{id}', [CategoryController::class, 'Update'])->name('category.Update');
        Route::get('/delete/{id}', [CategoryController::class, 'remove'])->name('category.delete');
        Route::post('/store-data', [CategoryController::class, 'store'])->name('category.store');
    });

    Route::prefix('product')->group(function () {
        Route::get('/',[ProductController::class,'Create'])->name('Product.create');
        Route::get('/index/{id}',[ProductController::class,'index'])->name('Product.index');
        Route::post('/store', [ProductController::class, 'store'])->name('Product.store');
        Route::get('/list',[ProductController::class,'show'])->name('Product.list');
        Route::post('/status',[ProductController::class,'status'])->name('Product.Status');
        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('Product.edit');
        Route::post('editData/{id}', [ProductController::class, 'Update'])->name('Product.Update');
        Route::get('/delete/{id}', [ProductController::class, 'Delete'])->name('Product.delete');
        Route::get('/deleteimage/{id}',[ProductController::class,'Destroy'])->name('admin.Pimage.delete');

    });

    Route::prefix('order')->group(function () {
        Route::get('/list',[OrderController::class,'show'])->name('Order.list');
    });
});

});





