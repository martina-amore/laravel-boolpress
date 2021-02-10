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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/posts', 'PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/free-zone/hello', 'TestController@guest')->name('free-zone');
Route::get('/restricted-zone/hello', 'TestController@logged', function () {})->middleware('auth');
