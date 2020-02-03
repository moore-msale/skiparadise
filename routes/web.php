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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'Controller@index')->name('/');

Route::post('book_send','MessageController@book')->name('book_send');
Route::post('contact_send','MessageController@contact')->name('contact_send');

Route::get('/set-language/{lang}', 'LanguageSwitcher@set')->name('set.language');