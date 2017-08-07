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

Route::get('/', 'PagesController@home');

Route::get('/news', 'NewsController@index');
Route::get('/news/{id}', 'NewsController@show')->where('id', '[0-9]+');
Route::get('/news/new', 'NewsController@new');
Route::post('/news', 'NewsController@create');
Route::delete('/news/{id}', 'NewsController@destroy')->where('id', '[0-9]+')->name('news.destroy');
