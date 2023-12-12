<?php

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

//
//Route::fallback(function (){
//    Route::redirect('/profile');
//});

// Hanya Testing
//Route::get('/' , function (){
//   return view('home');
//});

//Route Authentikasi
Route::controller(\App\Http\Controllers\AuthController::class)->group(function (){
    Route::get('/login' , 'login')->name('login');
    Route::get('/register' , 'register')->name('register');

    Route::post('/logic/login' , 'loginL')->name('logic.login');
    Route::post('/logic/register' , 'registerL')->name('logic.register');
});


//    Route yang bisa di akses ketika belum login
Route::controller(\App\Http\Controllers\IndexController::class)->group(function (){
    Route::get('/detail/{id}' , 'detail')->name('detail');
});



//        membuat middleware auth artinya hanya akun dengan status yang sudah login
Route::middleware('auth')->group(function (){

//        logic logout
    Route::controller(\App\Http\Controllers\AuthController::class)->group(function (){
        Route::post('logic/logout' , 'logout')->name('logic.logout');
    });

    Route::controller(\App\Http\Controllers\IndexController::class)->group(function (){
        Route::get('/detail/{id}' , 'detail')->name('detail');
        Route::get('/order/{id}' , 'order')->name('order');
        Route::get('/history' , 'history')->name('history');
        Route::get('/profile' , 'profile')->name('profile');

//        logic membuat order
        Route::post('logic/order' , 'orderL')->name('logic.order');
    });

});

