<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\IkanController;
use App\Http\Controllers\Web\RestokController;
use App\Http\Controllers\Web\DashboardController;


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

Route::group(['domain' => ''], function() {
    Route::get('auth',[AuthController::class, 'login'])->name('auth.index');
    Route::get('auth/register',[AuthController::class, 'register'])->name('auth.register');
    Route::prefix('auth')->name('auth.')->group(function(){
        Route::post('login',[AuthController::class, 'do_login'])->name('login');
        Route::post('register',[AuthController::class, 'do_register'])->name('register');
        Route::post('forgot',[AuthController::class, 'do_forgot'])->name('forgot');
        Route::get('reset/{token}',[AuthController::class, 'reset'])->name('getreset');
        Route::post('reset',[AuthController::class, 'do_reset'])->name('reset');
    });
    Route::post('/logout',[AuthController::class,'do_logout'])->name('logout');
    Route::get('/',[DashboardController::class,'index'])->name('dasboard');
    Route::get('/ikanbatak',[DashboardController::class,'ibatak'])->name('ibatak');
    Route::get('/ikanlele',[DashboardController::class,'ilele'])->name('ilele');
    Route::get('/ikanmas',[DashboardController::class,'imas'])->name('imas');
    Route::get('/ikannila',[DashboardController::class,'inila'])->name('inila');
    Route::get('/ikanmujahir',[DashboardController::class,'imujahir'])->name('imujahir');
    Route::get('/sejarah',[DashboardController::class,'sejarah'])->name('sejarah');
    Route::get('/menu',[DashboardController::class,'menu'])->name('menu');
    Route::get('/daftar',[IkanController::class,'index'])->name('daftar');
    Route::get('/restok',[RestokController::class,'index'])->name('restok');


});

