<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\IkanController;
use App\Http\Controllers\Admin\RestokController;
use App\Http\Controllers\Admin\DashboardController;

Route::group(['domain' => ''], function() {
    Route::redirect('admin', 'admin/dashboard', 301);
    Route::prefix('admin/')->name('admin.')->group(function(){
        Route::get('auth',[AuthController::class, 'login'])->name('auth.index');
        Route::prefix('auth')->name('auth.')->group(function(){
            Route::post('login',[AuthController::class, 'do_login'])->name('login');
            Route::post('register',[AuthController::class, 'do_register'])->name('register');
            Route::post('forgot',[AuthController::class, 'do_forgot'])->name('forgot');
            Route::get('reset/{token}',[AuthController::class, 'reset'])->name('getreset');
            Route::post('reset',[AuthController::class, 'do_reset'])->name('reset');
        });
        Route::middleware(['auth:admin'])->group(function(){
            Route::redirect('/', 'dashboard', 301);
            Route::get('dashboard',[DashboardController::class,'index'])->name('dasboard');
            Route::get('/input',[DashboardController::class,'tambah'])->name('tambah');
            Route::resource('restok', RestokController::class);
            Route::get('/produk',[DashboardController::class,'produk'])->name('produk');
            Route::resource('ikan', IkanController::class);
            Route::post('logout',[AuthController::class, 'do_logout'])->name('auth.logout');
            // Route::get('/ikanmas',[DashboardController::class,'imas'])->name('imas');
            // Route::get('/ikannila',[DashboardController::class,'inila'])->name('inila');
            // Route::get('/ikanmujahir',[DashboardController::class,'imujahir'])->name('imujahir');
            // Route::get('/sejarah',[DashboardController::class,'sejarah'])->name('sejarah');
        });
    });
});