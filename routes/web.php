<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/posts', "PostController@index");

Route::get('/posts/create', "PostController@create");

Route::post('/posts/store', "PostController@store");

Route::get('/posts/{post}', "PostController@show");

Route::get('/posts/{post}/edit', "PostController@edit");

Route::post('/posts/{post}/comments', "CommentsController@store");

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionController@create')->name('login');

Route::post('/login', 'SessionController@store');

Route::get('/logout', 'SessionController@destroy');

