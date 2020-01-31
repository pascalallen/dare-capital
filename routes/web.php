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
    })->name('welcome');

    Auth::routes(['register' => false]);

    Route::group(['middleware' => 'auth'], static function () {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::resource('posts', 'PostController');
        Route::delete('posts/{id}/destroy-image', 'PostController@destroyImage')->name('posts.destroy-image');
        Route::put('profile', 'ProfileController@update')->name('profile.update');
        Route::get('profile', 'ProfileController@index')->name('profile.index');
        Route::delete('profile', 'ProfileController@destroyImage')->name('profile.destroy-image');
    });

    Route::post('/contact', 'HomeController@contact')->name('contact');
    Route::get('/about', 'HomeController@about')->name('about');
    Route::get('/blog', 'HomeController@blog')->name('blog');
    Route::get('/blog/{slug}', 'PostController@show')->name('blog.show');
});

Route::get('/apply', static function () {
    return view('apply');
})->name('apply');

Route::get('/broker-referral', static function () {
    return view('broker-referral');
})->name('broker-referral');
