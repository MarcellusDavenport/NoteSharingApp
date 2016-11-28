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

Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::resource('notes', 'PostController'); // laravel knows about the CRUD (get and post) operations

// Registration Routes
Route::get('auth/register', 'Auth\RegisterController@getRegister');
Route::post('auth/register', 'Auth\RegisterController@postRegister');

// Authentification Routes
Auth::routes();
