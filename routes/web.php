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
//     return view('auth.login');
// });

Auth::routes();

Route::get('/', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');
Route::get('/write', 'PostsController@write');
Route::post('/friend/{friend}/sendMessage', 'FriendsController@sendMessage');
Route::get('/friends', 'FriendsController@friends');

Route::post('/writed', 'PostsController@writed')->name('writed');


