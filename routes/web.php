<?php

use App\Http\Controllers\TestNewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

Route::get('/', 'App\Http\Controllers\WelcomeController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth','adminUserRole']);

Route::group([
    'middleware'    =>  ['auth','adminUserRole'],
    'prefix'        =>  'user'
],function(){
    Route::get('create','App\Http\Controllers\UserController@create')->name('user.create');
    Route::get('list','App\Http\Controllers\UserController@index')->name('user.index');
    Route::get('{user}/edit','UserController@edit')->name('user.edit');
    Route::post('store','App\Http\Controllers\UserController@store')->name('user.store');
    Route::post('search','UserController@searchUser')->name('user.search');
    Route::get('destroy','UserController@destroy')->name('user.destroy');
    Route::put('{user}/update', 'UserController@update')->name('user.update');
    Route::get('show','UserController@show')->name('user.show');

});
Route::resource('provider', ProviderController::class)->middleware('adminUserRole');
Route::resource('product', ProductController::class)->middleware('adminUserRole');
Route::resource('purchase', PurchaseProductController::class)->middleware('adminUserRole');
Route::resource('cart', CartController::class)->middleware('clientUserRole');


