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
    return view('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/search', 'PostController@search')->name('posts.search');
Route::get('/post/create', 'PostController@create')->name('posts.create')->middleware('auth');
Route::get('/my', 'PostController@my')->name('posts.my')->name('posts.my');
Route::get('/post/{post}', 'PostController@show')->name('posts.show');
Route::get('/editor/check', 'EditorController@check')->name('editor.check')->middleware('editor');
