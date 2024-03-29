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

Route::get('/', 'PostController@index')->name('homepage');
Route::get('/posts/{post:slug}', 'PostController@show');

Route::get('/login', 'LoginController@index')->middleware('guest');
Route::post('/login', 'LoginController@authenticate');
Route::post('/logout', 'LoginController@logout');

Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'Dashboard\DashboardController@index');
    Route::get('/dashboard/posts/{post:slug}', 'Dashboard\DashboardController@show');
});
