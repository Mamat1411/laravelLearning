<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'PostController@index');
Route::get('/posts/{post:slug}', 'PostController@show');

Route::get('/category/{category:slug}', 'CategoryController@index');

Route::get('/author/{author:username}', 'UserController@index');
