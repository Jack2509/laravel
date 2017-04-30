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

// Route::get('/', function () {
//     return view('welcome');
// });

//Test route
Route::get('/test','TestController@index');

//Page controller
Route::get('/','PagesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Widget resource
Route::get('widget/create', 'WidgetController@create')->name('widget.create');
Route::get('widget/{id}-{slug?}', 'WidgetController@show')->name('widget.show');
Route::resource('/widget', 'WidgetController', ['except' => ['show', 'create']]);
