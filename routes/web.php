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

Route::get('/', 'HomeController@home')->name('home');
Route::get('/download', 'HomeController@download')->name('download_data');
Route::get('/history/memorandum', 'HomeController@memorandum')->name('memorandum');
Route::get('/history/stations', 'HomeController@stations')->name('stations');
Route::get('/ceein-bulletins', 'HomeController@bulletins')->name('bulletins');
Route::get('/news', 'HomeController@news')->name('news');
Route::get('/publications', 'HomeController@publications')->name('publications');
