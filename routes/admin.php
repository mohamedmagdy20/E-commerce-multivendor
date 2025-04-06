<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CurrencyController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\VendorController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix'=>'admin','controller'=>AuthController::class],function () {
  Route::get('login','loginView')->name('admin.login.view');
  Route::post('login','login')->name('admin.login');
});
Route::group(['middleware'=>'admin','prefix'=>'admin','controller'=>AuthController::class],function(){
    Route::get('logout','logout')->name('admin.logout');
});
Route::group(['middleware'=>'admin','prefix'=>'admin','controller'=>HomeController::class],function(){
    Route::get('index','index')->name('admin.home');
});

Route::group(['middleware'=>'admin','prefix'=>'admin','controller'=>UserController::class],function(){
    $prefix = 'user/';
    $routeName = 'users.';
    Route::get($prefix.'index','index')->name($routeName.'index');
    Route::get($prefix.'delete/{id}','delete')->name($routeName.'delete');
    Route::get($prefix.'create','create')->name($routeName.'create');
    Route::get($prefix.'edit/{id}','edit')->name($routeName.'edit');
    Route::post($prefix.'store','store')->name($routeName.'store');
    Route::post($prefix.'update/{id}','update')->name($routeName.'update');
});

Route::group(['middleware'=>'admin','prefix'=>'admin','controller'=>CategoryController::class],function(){
    $prefix = 'category/';
    $routeName = 'categories.';
    Route::get($prefix.'index','index')->name($routeName.'index');
    Route::get($prefix.'delete/{id}','delete')->name($routeName.'delete');
    Route::get($prefix.'create','create')->name($routeName.'create');
    Route::get($prefix.'edit/{id}','edit')->name($routeName.'edit');
    Route::post($prefix.'store','store')->name($routeName.'store');
    Route::post($prefix.'update/{id}','update')->name($routeName.'update');
});

Route::group(['middleware'=>'admin','prefix'=>'admin','controller'=>BrandController::class],function(){
    $prefix = 'brand/';
    $routeName = 'brands.';
    Route::get($prefix.'index','index')->name($routeName.'index');
    Route::get($prefix.'delete/{id}','delete')->name($routeName.'delete');
    Route::get($prefix.'create','create')->name($routeName.'create');
    Route::get($prefix.'edit/{id}','edit')->name($routeName.'edit');
    Route::post($prefix.'store','store')->name($routeName.'store');
    Route::post($prefix.'update/{id}','update')->name($routeName.'update');
});

Route::group(['middleware'=>'admin','prefix'=>'admin','controller'=>CurrencyController::class],function(){
    $prefix = 'currency/';
    $routeName = 'currency.';
    Route::get($prefix.'index','index')->name($routeName.'index');
    Route::get($prefix.'update-currency','update')->name($routeName.'update-currency');
});

Route::group(['middleware'=>'admin','prefix'=>'admin','controller'=>VendorController::class],function(){
    $prefix = 'vendor/';
    $routeName = 'vendors.';
    Route::get($prefix.'index','index')->name($routeName.'index');
    Route::get($prefix.'delete/{id}','delete')->name($routeName.'delete');
    Route::get($prefix.'create','create')->name($routeName.'create');
    Route::get($prefix.'edit/{id}','edit')->name($routeName.'edit');
    Route::post($prefix.'store','store')->name($routeName.'store');
    Route::post($prefix.'update/{id}','update')->name($routeName.'update');
});

Route::group(['middleware'=>'admin','prefix'=>'admin','controller'=>ProductController::class],function(){
    $prefix = 'product/';
    $routeName = 'products.';
    Route::get($prefix.'index','index')->name($routeName.'index');
    // Route::get($prefix.'delete/{id}','delete')->name($routeName.'delete');
    Route::get($prefix.'create','create')->name($routeName.'create');
    Route::get($prefix.'edit/{id}','edit')->name($routeName.'edit');
    Route::post($prefix.'store','store')->name($routeName.'store');
    // Route::post($prefix.'update/{id}','update')->name($routeName.'update');
});