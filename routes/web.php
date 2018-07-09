<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::get('menindex', 'UsersController@menindex')->name('users.menindex');
Route::get('wemenindex', 'UsersController@womenindex')->name('users.womenindex');

Route::group(['middleware' => 'auth'], function () {
    //Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
    Route::group(['prefix' => 'users/{id}'], function () { 
        Route::post('like', 'UserFavoriteController@store')->name('user.follow');
        Route::delete('unlike', 'UserFavoriteController@destroy')->name('user.unfollow');
    });
    
});