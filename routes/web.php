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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/news', 'HomeController@posts');
Route::get('/news/{post}', 'HomeController@show');

// Route::get('/news', function () {
//     $posts=DB::table('posts')->get();
//     return view('home',compact('posts'));
// });

// Route::get('/news/{post}', function ($id) {
//     $post=DB::table('posts')->find($id);
//     return view('posts.show',compact('post'));
// });
