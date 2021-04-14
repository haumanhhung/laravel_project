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

Route::get('/cate', function () {
    return view('website.category');
});
Route::get('/post', function () {
    return view('website.post');
});
Route::get('/', function () {
    return view('website.home');
})->name('website');
// Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('/ad', function () {
        return view('admin.dashboard.index');
    });
    Route::resource('category','App\Http\Controllers\CategoryController');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
