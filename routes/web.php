<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Route::get('/', 'UsersController@index');

Route::get('/user', function () {
    return view('user.index');
});

Auth::routes();
/*Route::post('storeBlog', 'BlogController@store') ;*/

//Admin///////////
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('create', 'DashboardController@create')->name('create');
    Route::post('store', 'DashboardController@store')->name('store');
    Route::get('/blog_edit/{blog}', 'DashboardController@edit')->name('edit');
    Route::get('/blogs/{blog} ', 'DashboardController@destroy')->name('delete');
    Route::put('/update/{blog} ', 'DashboardController@update')->name('update');
    Route::resource('categories', 'CategoryController');

//    Route::resource('blogs', 'DashboardController');
});
/*Route::get('/home', 'HomeController@index')->name('home');*/

Route::group(['prefix' => 'user', 'as' => 'user.', 'namespace' => 'User', 'middleware' => ['auth', 'User']], function () {
});


Route::get('/{vue_route?}', function () {
    return view('welcome');
})->where('vue_route', '(.*)');
