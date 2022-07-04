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



Route::get('signup','Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup','Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::get('/','CatsController@index');
Route::get('create','CatsController@create')->name('cats.form');

Route::group(['middleware'=>['auth']],function(){
    Route::get('users','UsersController@index')->name('users.index');
    Route::get('users/{id}','UsersController@show')->name('user.show');
    Route::post('store','CatsController@store')->name('cats.create');
    Route::delete('delete/{id}','CatsController@destroy')->name('cat.delete');
    
    Route::group(['prefix'=>'uses/{id}'],function(){
        Route::post('favorite','UserCatsController@store')->name('favorite');
        Route::delete('favolite','UserCatsController@destroy')->name('unfavorite');
        Route::get('favorites','UserCatsController@index')->name('favorites');
    });
    
    Route::group(['prefix'=>'cats/{id}'],function(){
        Route::post('messages','MessagesController@store')->name('post.messages');
        Route::get('messages','MessagesController@messageboard')->name('messageboard');
    });
});


