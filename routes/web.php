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

Route::get('/', function () { return view('Auth/login'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/changePassword', 'Auth\ChangePasswordController@index')->name('password.change');
Route::get('/editProfile', 'Controller@viewProfile')->name('profile.edit');
Route::post('/updateProfile', 'Controller@updateProfile')->name('profile.update');
Route::post('/changePassword', 'Auth\ChangePasswordController@changepassword')->name('password.update');