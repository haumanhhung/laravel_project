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

Route::get('/category/{id}','App\Http\Controllers\FrontEndController@category')->name('website.category');
Route::get('/post/{id}', 'App\Http\Controllers\FrontEndController@post')->name('website.post');
Route::get('/', 'App\Http\Controllers\FrontEndController@home')->name('website');
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('/ad','App\Http\Controllers\AdminController@index' )->name('indexAdmin');
    Route::resource('category','App\Http\Controllers\CategoryController');
    Route::resource('post','App\Http\Controllers\PostController');
    Route::get('/language/{language}','App\Http\Controllers\LanguageController@index')->name('language.index');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
