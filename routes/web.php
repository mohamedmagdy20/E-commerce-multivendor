<?php

use App\Http\Controllers\Front\AuthController;
use App\Http\Controllers\Front\GoogleController;
use App\Http\Controllers\Front\RegisterController;
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

Route::get('/', function () {
    return view(view: 'front.home');
})->name('home');

Route::group(['controller'=>RegisterController::class,'middleware'=>'guest'],function(){
    Route::get('/register','index')->name('register');
    Route::post('/register','register')->name('registerPost');
    Route::get('virefiy','virefyView')->name('account.verify.view');
    Route::post('virefiy','virefyAccount')->name('account.verify');
});


Route::group(['controller'=>AuthController::class,'middleware'=>'guest'],function(){
    Route::get('/login','loginView')->name('login.view');
    Route::post('/login','login')->name('login');
});

Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);