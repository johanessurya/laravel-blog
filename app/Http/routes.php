<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('front-home');
});

Route::get('/admin', function () {
    return view('back-home');
});

Route::get('/api/v1/articles/{id?}', 'Articles@index');
// Route::post('/api/v1/articles', 'Articles@store');
// Route::post('/api/v1/articles/{id}', 'Articles@update');
// Route::delete('/api/v1/articles/{id}', 'Articles@destroy');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
