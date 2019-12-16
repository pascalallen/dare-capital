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

Route::group(['middleware' => 'under-construction'], function () {
    Route::get('/', static function () {
        return view('welcome');
    });

    Auth::routes(['register' => false]);

    Route::group(['middleware' => 'auth'], static function () {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::resource('posts', 'PostController');
        Route::put('avatars/{userId}', 'UserAvatarController@update');
        Route::put('profile', 'ProfileController@update')->name('profile.update');
        Route::get('profile', 'ProfileController@index')->name('profile.index');
    });

    Route::post('/contact', 'HomeController@contact')->name('contact');
    Route::get('/about', 'HomeController@about')->name('about');
    Route::get('/blog', 'HomeController@blog')->name('blog');

    Route::get('/apply', static function () {
        return view('apply');
    })->name('apply');
});
