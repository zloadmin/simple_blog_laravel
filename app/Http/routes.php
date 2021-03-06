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

// Route::get('/', 'PostController@index');
// Route::get('/post/{post}', 'PostController@show');

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

Route::group(['middleware' => 'web'], function () {

    Route::auth();
    Route::get('/home', 'HomeController@index');

    //Profile
    Route::get('/profile', 'ProfileController@edit');
    Route::post('/profile', 'ProfileController@update');

    //Posts
    Route::get('/', 'PostController@index');
	Route::get('/post/{post}', 'PostController@show');

	//Comments
    Route::group(['middleware' => 'auth'], function () {

        Route::post('/comment/create', 'CommentController@create');

    });

});