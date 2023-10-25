<?php

use App\Http\Controllers\Main\MainController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Info\UserInfoController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', [MainController::class, 'index'])->name('admin.home');
//Route::get('/auth/login', [MainController::class, 'login'])->name('admin.login');
Route::controller(AuthController::class)
    -> group(function (){
        Route::get('/', 'login')->name('login');
        Route::get('/login', 'login')->name('login');
        Route::get('/signUp', 'sign-Up')->name('signUp');
        Route::get('/forgotPassword', 'forgotPassword')->name('forgotPassword');
    });

Route::controller(MainController::class)
    ->prefix('admin')
    ->group(function () {
        Route::get('/main', 'main')->name('admin.home');
    });

Route::controller(MainController::class)
    ->prefix('user')
    ->group(function () {
        //  TODO: session check
        Route::get('/main', 'main')->name('user.home');
    });

Route::controller(MainController::class)
    ->group(function () {
        Route::GET('/userInfo', 'userInfo')->name('info.userInfo');
        Route::GET('/siteInfo', 'siteInfo')->name('info.siteInfo');
        Route::GET('/trafficInfo', 'trafficInfo')->name('info.trafficInfo');
    });

