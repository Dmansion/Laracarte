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

Route::get('/','PagesController@home')->name('home');

Route::get('/about','PagesController@about')->name('about');

Route::get('/artisans','PagesController@artisans')->name('artisans');

Route::get('/contact','PagesController@contact')->name('contact');