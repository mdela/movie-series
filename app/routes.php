<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', array(
	'as'=>'home',function()
	{
		return View::make('site.users.inicio');
	}));
//

// Confide routes users
	Route::get('/users/create', 				array('as' => 'create',			'uses' => 'UsersController@create'));
	Route::post('users', 						array('as' => 'store',			'uses' => 'UsersController@store'));
	Route::post('users/login', 					array('as' => 'do.login',		'uses' => 'UsersController@doLogin'));
	Route::get('users/confirm/{code}', 			array('as' => 'confirm',		'uses' => 'UsersController@confirm'));
	
	Route::post('users/forgot_password', 		array('as' => 'forgot_password','uses' => 'UsersController@doForgotPassword'));
	Route::get('users/reset_password/{token}',	array('as' => 'reset.pass',		'uses' => 'UsersController@resetPassword'));
	Route::post('users/reset_password',			array('as' => 'doreset.pass',	'uses' => 'UsersController@doResetPassword'));
	
	Route::get('forgot', 						array('as' => 'forgot',			'uses' => 'UsersController@forgotPassword'));
	Route::get('logout', 						array('as' => 'logout',			'uses' => 'UsersController@logout'));
	Route::get('login', 						array('as' => 'login',			'uses' => 'UsersController@login'));


//  Movies routes

	Route::get('movie', 					array('as' => 'movie',			'uses' => 'MovieController@get_index'));
	Route::get('movie/create', 				array('as' => 'movie.create', 	'uses' => 'MovieController@get_create'));
	Route::get('movie/update/{id_movie}', 	array('as' => 'movie.update', 	'uses' => 'MovieController@get_update'));
	Route::get('movie/view/{id_movie}',		array('as' => 'movie.view', 	'uses' => 'MovieController@get_view'));
	Route::get('movie/delete/{id_movie}',	array('as' => 'movie.delete', 	'uses' => 'MovieController@get_delete'));
	Route::post('movie/save',				array('as' => 'movie.save', 	'uses' => 'MovieController@post_save'));


// Confide routes series
