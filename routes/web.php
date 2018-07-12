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
    if(Auth::check()){
        $itemboys = \DB::table('favorites')->join('items', 'favorites.favorite_id', '=', 'items.id')->select('items.*', \DB::raw('COUNT(*) as count'))->where('gender', 1)->groupBy('items.id', 'items.gender', 'items.items', 'items.story','items.created_at', 'items.updated_at','items.price','items.kind','items.item_brand')->orderBy('count', 'DESC')->take(10)->get();
        $itemgirls = \DB::table('favorites')->join('items', 'favorites.favorite_id', '=', 'items.id')->select('items.*', \DB::raw('COUNT(*) as count'))->where('gender', 2)->groupBy('items.id', 'items.gender', 'items.items', 'items.story','items.created_at', 'items.updated_at','items.price','items.kind','items.item_brand')->orderBy('count', 'DESC')->take(10)->get();
    return view('welcome', ['items'=> $itemboys,'itemgirls'=>$itemgirls]);
    } else {
        return view('welcome');
    }
});

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::get('menindex', 'UsersController@menindex')->name('users.menindex');
Route::get('wemenindex', 'UsersController@womenindex')->name('users.womenindex');

Route::get('mensearch', 'UsersController@mensearch')->name('users.mensearch');
Route::get('womensearch', 'UsersController@womensearch')->name('users.womensearch');

Route::group(['middleware' => 'auth'], function () {
    
    Route::group(['prefix' => 'users/{id}'], function () { 
        Route::post('like', 'UserFavoriteController@store')->name('user.follow');
        Route::delete('unlike', 'UserFavoriteController@destroy')->name('user.unfollow');
        
        Route::post('like', 'UserFavoriteController@store')->name('user.like');
        Route::delete('unlike', 'UserFavoriteController@destroy')->name('user.unlike');
        Route::get('favorites', 'UsersController@favorites')->name('users.favorites');
        
        Route::get('loginmenindex', 'UsersController@loginmenindex')->name('users.loginmenindex');
        Route::get('loginwemenindex', 'UsersController@loginwomenindex')->name('users.loginwomenindex');
    });
    
});