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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Article
Route::get('/articles','ArticleController@index')->name('articles.index');
Route::post('/articles','ArticleController@store')->name('articles.store');
Route::get('/articles/create','ArticleController@create')->name('articles.create');
Route::get('/articles/{article}','ArticleController@show')->name('articles.show');
Route::get('/articles/{article}/edit','ArticleController@edit')->name('articles.edit');
Route::put('/articles/{article}','ArticleController@update')->name('articles.update');
//Profile
Route::get('/userlist', 'ProfileController@index');
Route::get('/profiles/{name}', 'ProfileController@show');
Route::get('/profiles/{user}/edit','ProfileController@edit')->name('profile.edit');
Route::patch('/profiles/{user}','ProfileController@update')->name('profile.update');
//Comment
Route::post('/articles/{article}/comments', 'CommentController@store')->name('comments.store');