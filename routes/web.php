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

Route::get('lang/{locale}', 'LangController@lang');

Route::get('/', function () {
    return view('landing');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::middleware('user-admin')->group(function () {
    Route::get('/subscriber-system/{id}', 'SubscriberController@system')->name('subscriber-system');
    Route::get('/subscriber-edit/{id}', 'SubscriberController@edit')->name('subscriber-edit');
    Route::get('/add-info/{id}', 'SubscriberController@add')->name('subscriber-edit');
    Route::post('/subscriber-edit-submit/{id}', 'SubscriberController@editSubmit')->name('subscriber-edit-submit');
    Route::post('/user-edit-submit/{id}', 'Auth\UserController@editSubmit')->name('user-edit-submit');
    Route::post('/add-info-submit/{id}', 'SubscriberController@addSubmit')->name('add-info-submit');
    Route::get('/subscriber-info/{id}', 'SubscriberController@info')->name('subscriber-info');
});


Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin');
});

