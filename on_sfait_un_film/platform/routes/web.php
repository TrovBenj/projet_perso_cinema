<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home','UserController@userIndex');

Route::get('/news','ArticleController@index');

Route::post('/register','UserController@store');

Route::get('/edit','UserController@edit');

Route::post('/edit','UserController@update');

Route::post ('/edit/password_update','UserController@passwordUpdate');

Route::get('/members','UserController@index');

Route::get('/search','MovieController@searchMovie');

Route::get('/search/results', 'MovieController@searchResults');

Route::post('/search/results', 'UserController@storeMovie');

Route::get('/mymovies','UserController@myMovies');

Route::post('/mymovies','UserController@deleteMovie');