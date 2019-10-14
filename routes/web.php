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
})->name('home');

Auth::routes();
Route::post('register', 'Auth\RegisterController@register')->name('register');

Route::group(['middleware' => 'auth'], function (){

    //

    Route::get('activate', 'Auth\ActivateController@index')->name('activate');
    Route::post('activate', 'Auth\ActivateController@activate')->name('activate-acc');

    Route::group(['middleware' => 'activate'], function (){

        //

    });


    Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function (){

        //

        Route::get('admin', 'Admin\AdminController@index')->name('admin');
    });
});
